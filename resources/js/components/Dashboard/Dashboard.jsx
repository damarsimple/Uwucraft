import React from "react";
import "./Dashboard.css";
import ShopProfile from "../Shop/ShopProfile";
import PostCard from "./PostCard";
import Echo from "laravel-echo";
import socketio from "socket.io-client";
import InfiniteScroll from "react-infinite-scroll-component";
import PropagateLoader from "react-spinners/ScaleLoader";
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
            hasMore: true
        };
    }
    componentDidMount() {
        axios.get("ajax/posts").then(response => {
            const currentPage = response.data.current_page;
            const nextPage = response.data.next_page_url;
            const lastPage = response.data.last_page_url;
            const totalPages = response.data.last_page;
            const total = parseInt(response.data.total);
            const perpage = response.data.per_page;
            const posts = response.data.data;
            this.setState({ posts });
            this.setState({ currentPage });
            this.setState({ nextPage });
            this.setState({ lastPage });
            this.setState({ totalPages });
            this.setState({ total });
            this.setState({ perpage });

            const echo = new Echo({
                broadcaster: "socket.io",
                host: window.location.hostname + ":6001",
                client: socketio
            });

            echo.channel("posts").listen("PostEvent", e => {
                let index = this.state.posts.findIndex(
                    obj => obj.id == e.data.post_id
                );
                if (index != -1) {
                    //prepare the result
                    let result = this.state.posts[index].comment.concat(e.data);
                    let posts = this.state.posts;
                    //Assign new data to object
                    let comments = Object.assign({}, posts[index]);
                    comments.comment = result;
                    //assign new object to posts
                    posts[index] = comments;
                    this.setState({ posts: posts });
                }
            });
        });
    }
    fetchMoreData() {
        axios.get(this.state.nextPage).then(res => {
            const currentPage = res.data.current_page;
            const posts = this.state.posts.concat(res.data.data);
            const nextPage = res.data.next_page_url;
            this.setState({ nextPage });
            this.setState({ currentPage });
            this.setState({ posts });
            if (this.state.totalPages <= this.state.currentPage) {
                const hasMore = false;
                this.setState({ hasMore });
            }
        });
    }
    render() {
        return (
            <div className="container">
                <div className="row padding">
                    <div className="col-md-9">
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
