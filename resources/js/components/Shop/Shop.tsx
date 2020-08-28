import React from "react";
import Itemlist from "./Itemlist";
import InfiniteScroll from "react-infinite-scroll-component";
import { Items, PaginatorInfo } from "../../type/type";
import { items } from "../../api/graphql";
import { Container } from "@material-ui/core";

interface ShopData {
    items?: Items;
    paginator?: PaginatorInfo;
}

export default class Shop extends React.Component<ShopData> {
    state: ShopData;
    constructor(props) {
        super(props);
        this.state = {
            items: [],
            paginator: { total: 100 }
        };
    }
    componentDidMount() {
        items().then(result => {
            this.setState({
                items: result.data.items.data,
                paginator: result.data.items.paginatorInfo
            });
        });
    }
    fetchMoreData = () => {
        items(this.state.paginator.currentPage + 1).then(result => {
            this.setState({
                items: this.state.items.concat(result.data.items.data),
                paginator: result.data.items.paginatorInfo
            });
        });
    };
    render() {
        return (
            <>
                <Container maxWidth="lg">
                    <InfiniteScroll
                        dataLength={this.state.items.length}
                        next={this.fetchMoreData.bind(this)}
                        hasMore={this.state.paginator.hasMorePages}
                        loader={<h4>Loading...</h4>}
                    >
                        <Itemlist data={this.state.items} />
                    </InfiniteScroll>
                </Container>
            </>
        );
    }
}
