import React from "react";
import Itemlist from "./ItemList";
import InfiniteScroll from "react-infinite-scroll-component";
import { Items, PaginatorInfo } from "../../type/type";
import { GET_ITEMS } from "../../api/graphql";
import { Container } from "@material-ui/core";
import { useQuery } from "@apollo/client";

const Shop = () => {
    const { data, loading, error, fetchMore } = useQuery(GET_ITEMS, {
        variables: {
            first: 24,
            after: null
        }
    });
    if (loading) return <h1>Loading</h1>;
    if (error) return <h1>Error Loading</h1>;
    console.log(data);

    const items = data.items;
    const fetchMoreData = () => {
        const { endCursor } = items.pageInfo;
        fetchMore({
            variables: { after: endCursor },
            updateQuery: (prev: any, { fetchMoreResult }) => {
                fetchMoreResult.items.edges = [
                    ...prev.items.edges,
                    ...fetchMoreResult.items.edges
                ];
                return fetchMoreResult;
            }
        });
    };
    return (
        <>
            <Container maxWidth="lg">
                <InfiniteScroll
                    dataLength={items.edges.length}
                    next={fetchMoreData}
                    hasMore={items.pageInfo.hasNextPage}
                    loader={<h4>Loading...</h4>}
                >
                    <Itemlist data={items.edges} />
                </InfiniteScroll>
            </Container>
        </>
    );
};
export default Shop;
