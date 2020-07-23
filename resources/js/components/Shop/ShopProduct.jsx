import React, { Component } from "react";
import "./Shop.css";
import { ShopProductItem } from "./ShopProductItem";
import { ShopProductModal } from "./ShopProductModal";
import {  getImg } from "../Ajax/Shop";
import InfiniteScroll from "react-infinite-scroll-component";
class ShopProduct extends Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div>
                <div className="container-fluid"></div>
                <InfiniteScroll
                    dataLength={this.props.products.length}
                    next={this.props.fetchMoreData.bind(this)}
                    hasMore={this.props.hasMore}
                    loader={<h4>Loading...</h4>}
                >
                    <div className="row">
                        {this.props.products.map(product => (
                            <ShopProductItem
                                key={product.id}
                                name={product.name}
                                price={"$" + product.price}
                                seller={product.seller}
                                modal={<ShopProductModal />}
                                itemid={product.id}
                                img={getImg(product.minecraft_item_shorthand)}
                            />
                        ))}
                    </div>
                </InfiniteScroll>
            </div>
        );
    }
}
export default ShopProduct;
