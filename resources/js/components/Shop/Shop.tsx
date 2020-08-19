import React from "react";
import Grid from "@material-ui/core/Grid";
import Sidebar from "./Sidebar";
import Carousel from "./Carousel";
import Itemlist from "./Itemlist";
import InfiniteScroll from "react-infinite-scroll-component";
import { items, Items, PaginatorInfo } from "../../api/graphql";
import { BrowserRouter as Router } from "react-router-dom";

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
                <Grid container spacing={6}>
                    <Grid item xs={false} sm={2}>
                        <Sidebar />
                    </Grid>
                    <Grid item xs={12} sm={8}>
                   
                        <InfiniteScroll
                            dataLength={this.state.items.length}
                            next={this.fetchMoreData.bind(this)}
                            hasMore={this.state.paginator.hasMorePages}
                            loader={<h4>Loading...</h4>}
                        >
                            <Itemlist data={this.state.items} />
                        </InfiniteScroll>
                    </Grid>
                    <Grid item xs={false} sm={2}>
                        <Sidebar />
                    </Grid>
                </Grid>
            </>
        );
    }
}
