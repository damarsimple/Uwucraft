import React from "react";
import "./Shop.css";
import ShopProductItem from "./ShopProductItem";
import InfiniteScroll from "react-infinite-scroll-component";
export default function ShopProduct(props) {
    return (
        <div>
            <div className="container-fluid"></div>
            <InfiniteScroll
                dataLength={props.products.length}
                next={props.fetchMoreData.bind(this)}
                hasMore={props.hasMore}
                loader={<h4>Loading...</h4>}
            >
                <div className="row">
                    {props.products.map((product, index) => (
                        <ShopProductItem key={index} data={product} />
                    ))}
                </div>
            </InfiniteScroll>
        </div>
    );
}
