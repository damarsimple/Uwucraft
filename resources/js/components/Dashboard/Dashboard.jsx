import React from "react";
import "./Dashboard.css";
import ShopProfile from "../Shop/ShopProfile";
import PostCard from "./PostCard.tsx";
import echo from "../Echo";
import InfiniteScroll from "react-infinite-scroll-component";
import PropagateLoader from "react-spinners/ScaleLoader";
import {
    ApolloClient,
    InMemoryCache,
    gql,
    createHttpLink
} from "@apollo/client";
class Dashboard extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            posts: [],
            currentPage: null,
            nextPage: null,
            lastPage: null,
            totalPages: null,
            total: 0,
            perpage: null,
            hasMore: true,

            inputValue: ""
        };
    }
    componentDidMount() {
        const link = createHttpLink({
            uri: "/graphql",
            credentials: "same-origin"
        });
        const client = new ApolloClient({
            uri: "/graphql",
            cache: new InMemoryCache(),
            link
        });
        client
            .query({
                query: gql`
                    {
                        me {
                            username
                            email
                        }
                    }
                `
            })
            .then(e => console.log(e));
        client
            .query({
                query: gql`
                    query {
                        posts {
                            data {
                                id
                                content
                                commentsCount
                                reactionsCount
                                author {
                                    username
                                }
                                comments {
                                    author {
                                        username
                                    }
                                    content
                                }
                                reactions {
                                    author {
                                        username
                                    }
                                    content
                                }
                            }
                            paginatorInfo {
                                count
                                currentPage
                                firstItem
                                hasMorePages
                                lastItem
                                lastPage
                                perPage
                                total
                            }
                        }
                    }
                `
            })
            .then(res => {
                //SetPosts
                const posts = res.data.posts.data;
                this.setState({ posts });
                //SetPagination
                const page = res.data.posts.paginatorInfo;
                const currentPage = page.currentPage;
                const nextPage = page.currentPage + 1;
                const lastPage = page.lastPage;
                const totalPages = page.lastPage;
                const total = page.total;
                const perpage = page.perPage;
                const hasMore = page.hasMorePages;
                this.setState({ hasMore });
                this.setState({ currentPage });
                this.setState({ nextPage });
                this.setState({ lastPage });
                this.setState({ totalPages });
                this.setState({ total });
                this.setState({ perpage });
            });
        // TODO  PERSONAL FEED FOR MORE EFFICIENT TRANSFER//
        //listen for events
        echo.channel("posts").listen("PostEvent", e => {
            //find posts associate with comment
            let index = this.state.posts.findIndex(
                obj => obj.id == e.data.post_id
            );
            //check if post already rendered here
            if (index != -1 && e.data.type == "comment") {
                //prepare the result
                let result = this.state.posts[index].comments.concat(e.data);
                let posts = this.state.posts;
                //Assign new data to object
                let comments = Object.assign({}, posts[index]);
                comments.comments = result;
                comments.commentsCount = posts[index].commentsCount + 1;
                //assign new object to posts
                posts[index] = comments;
                this.setState({ posts: posts });
            }
            if (index != -1 && e.data.type == "reaction") {
                //prepare the result
                let result = this.state.posts[index].reactions.concat(e.data);
                let posts = this.state.posts;
                //Assign new data to object
                let reactions = Object.assign({}, posts[index]);
                reactions.reactions = result;
                reactions.reactionsCount = posts[index].reactionsCount + 1;
                //assign new object to posts
                posts[index] = reactions;
                this.setState({ posts: posts });
            }
            if (e.data.type == "post") {
                // TODO: find a way to push to first index instead of last
                let post = [e.data];
                console.log(post.concat(this.state.posts));
                this.setState({
                    posts: this.state.posts.concat(e.data) //post.concat(this.state.posts)// //TODO: FIX THIS STUPID WAY
                });
            }
        });
    }

    fetchMoreData() {
        const client = new ApolloClient({
            uri: "/graphql",
            cache: new InMemoryCache()
        });

        client
            .query({
                query: gql`
                    query {
                        posts(first: 10, page: ${this.state.nextPage}) {
                            data {
                                id
                                content
                                author {
                                    username
                                }
                                comments {
                                    author {
                                        username
                                    }
                                    content
                                }
                                reactions {
                                    author {
                                        username
                                    }
                                    content
                                }
                            }
                            paginatorInfo {
                                count
                                currentPage
                                firstItem
                                hasMorePages
                                lastItem
                                lastPage
                                perPage
                                total
                            }
                        }
                    }
                `
            })
            .then(res => {
                const posts = this.state.posts.concat(res.data.posts.data);
                const page = res.data.posts.paginatorInfo;
                const currentPage = page.currentPage;
                const nextPage = this.state.currentPage + 1;
                const hasMore = page.hasMorePages;
                this.setState({ hasMore });
                this.setState({ nextPage });
                this.setState({ currentPage });
                this.setState({ posts });
            });
    }
    handleSubmit() {
        const sub = {
            type: "post",
            content: this.state.inputValue
        };
        axios.post("/ajax/posts", sub);
        this.setState({ inputValue: "" });
    }
    render() {
        return (
            <div className="container">
                <div className="row padding">
                    <div className="col-md-9">
                        <div className="card w-100 mb-3">
                            <div className="card-body">
                                <textarea
                                    className="form-control"
                                    rows={2}
                                    value={this.state.inputValue}
                                    onChange={() => {
                                        this.setState({
                                            inputValue: event.target.value
                                        });
                                    }}
                                    placeholder="Submit Sumthing"
                                />
                                <button
                                    onClick={this.handleSubmit.bind(this)}
                                    className="btn btn-primary w-100 mt-2"
                                >
                                    Submit
                                </button>
                            </div>
                        </div>
                        <InfiniteScroll
                            dataLength={this.state.posts.length}
                            next={this.fetchMoreData.bind(this)}
                            hasMore={this.state.hasMore}
                            loader={
                                <PropagateLoader
                                    size={150}
                                    color={"#9B9B9B"}
                                    loading={true}
                                />
                            }
                        >
                            {this.state.posts.map((post, index) => {
                                return <PostCard key={index} props={post} />;
                            })}
                        </InfiniteScroll>
                    </div>
                    <div className="col-md-3">
                        <ShopProfile
                            points={1}
                            money={1}
                            cart={[]}
                            username={1}
                            totalCarts={1}
                        />
                    </div>
                </div>
            </div>
        );
    }
}
export default Dashboard;
