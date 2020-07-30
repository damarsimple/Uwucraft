import React from "react";
import "./Dashboard.css";
import ShopProfile from "../Shop/ShopProfile";
import PostCard from "./PostCard";
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
        axios.get("api/posts").then(response => {
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
        });
        // const currentPage = res.data.current_page;
        // const nextPage = res.data.next_page_url;
        // const lastPage = res.data.last_page_url;
        // const totalPages = res.data.last_page;
        // const total = parseInt(res.data.total);
        // const perpage = res.data.per_page;
        // const posts = res.data.data;
        // this.setState({ posts });
        // this.setState({ currentPage });
        // this.setState({ nextPage });
        // this.setState({ lastPage });
        // this.setState({ totalPages });
        // this.setState({ total });
        // this.setState({ perpage });
    }
    fetchMoreData() {
        const number = parseInt(this.state.currentPage) + 1;
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
                        {/** Left */}
                        {this.state.posts.map((post, index) => {
                            return (
                                <PostCard
                                    key={index}
                                    data={post}
                                />
                            );
                        })}

                        {/** End Loop Here */}
                        {/** EndLeft */}
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
