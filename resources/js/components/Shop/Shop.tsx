import React, { useState, useEffect } from "react";
import Grid from "@material-ui/core/Grid";
import Sidebar from "./Sidebar";
import Carousel from "./Carousel";
import Itemlist from "./Itemlist";
import InfiniteScroll from "react-infinite-scroll-component";
import { items, Items, PaginatorInfo } from "../../api/graphql";
interface ShopData {
    items: Items;
    paginator: PaginatorInfo;
}
export default class Shop extends React.PureComponent<ShopData> {
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
            console.log(result.data.items.paginatorInfo);
        });
    };
    render() {
        return (
            <>
                <Grid container spacing={6}>
                    <Grid item xs={3}>
                        <Sidebar />
                    </Grid>
                    <Grid item xs={9}>
                        <Carousel />
                        <InfiniteScroll
                            dataLength={this.state.items.length}
                            next={this.fetchMoreData.bind(this)}
                            hasMore={this.state.paginator.hasMorePages}
                            loader={<h4>Loading...</h4>}
                        >
                            <Itemlist data={this.state.items} />
                        </InfiniteScroll>
                    </Grid>
                </Grid>
            </>
        );
    }
}

/**export test () => {
    let [itemslist, SetItem] = useState<Items>();
    let [paginatorInfo, setPaginator] = useState<PaginatorInfo>();
    const fetchMoreData = () => {
        items(paginatorInfo.currentPage + 1).then(result => {
            const b = itemslist.concat(result.data.items.data);
            SetItem(b);
            setPaginator(result.data.items.paginatorInfo);
            console.log(itemslist);
        });
    };
    useEffect(() => {
        items().then(result => {
            SetItem(result.data.items.data);
            setPaginator(result.data.items.paginatorInfo);
        });
    });

    return (
        <>
            <Grid container spacing={6}>
                <Grid item xs={3}>
                    <Sidebar />
                </Grid>
                <Grid item xs={9}>
                    <Carousel />
                    {itemslist && paginatorInfo ? (
                        <Itemlist
                            data={itemslist}
                            fetchMoreData={fetchMoreData}
                            paginatorInfo={paginatorInfo}
                        />
                    ) : null}
                </Grid>
            </Grid>
        </>
    );
};
 */
