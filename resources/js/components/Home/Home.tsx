import React from "react";
import InfiniteScroll from "react-infinite-scroll-component";
import { useQuery } from "@apollo/client";
import { GET_POSTS } from "../../api/graphql";
import { Container } from "@material-ui/core";
import Post from "./PostCard";
import PostCardLoading from "./PostCardLoading";
const Home = () => {
    const { loading, error, data, fetchMore } = useQuery(GET_POSTS, {
        variables: { after: null }
    });
    if (loading)
        return (
            <Container maxWidth="lg">
                <PostCardLoading />
            </Container>
        );
    if (error) return `Error! ${error.message}`;
    const { posts } = data;
    const fetchMoreData = () => {
        const { endCursor } = posts.pageInfo;
        fetchMore({
            variables: { after: endCursor },
            updateQuery: (prev: any, { fetchMoreResult }) => {
                fetchMoreResult.posts.edges = [
                    ...prev.posts.edges,
                    ...fetchMoreResult.posts.edges
                ];
                return fetchMoreResult;
            }
        });
    };
    return (
        <Container maxWidth="lg">
            <InfiniteScroll
                dataLength={posts.edges.length}
                next={fetchMoreData}
                hasMore={posts.pageInfo.hasNextPage}
                loader={<PostCardLoading />}
            >
                {posts.edges.map((post, index) => {
                    return <Post key={index} post={post.node} />;
                })}
            </InfiniteScroll>
        </Container>
    );
};
export default Home;
// postslist.map((post, index) => {
//     return <Post key={index} post={post} />;
// })
