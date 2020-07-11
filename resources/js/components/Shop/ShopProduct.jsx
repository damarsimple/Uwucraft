import React, { Component } from "react";
import ReactDOM from "react-dom";
import "./Shop.css";
import { ShopProductItem } from "./ShopProductItem";
import { ShopProductModal } from "./ShopProductModal";
import { fetchItems, getImg } from "../Ajax/Shop";
import InfiniteScroll from "react-infinite-scroll-component";
import axios from "axios";
class ShopProduct extends Component {
    constructor(props) {
        super(props);
        this.state = {
            products: [],
            currentPage: null,
            nextPage: null,
            lastPage: null,
            totalPages: null,
            total: 10,
            perpage: null,
            hasMore: true
        };
    }
    componentDidMount() {
        fetchItems().then(res => {
            const currentPage = res.data.current_page;
            const nextPage = res.data.next_page_url;
            const lastPage = res.data.last_page_url;
            const totalPages = res.data.last_page;
            const total = parseInt(res.data.total);
            const perpage = res.data.per_page;
            const products = res.data.data;
            this.setState({ products });
            this.setState({ currentPage });
            this.setState({ nextPage });
            this.setState({ lastPage });
            this.setState({ totalPages });
            this.setState({ total });
            this.setState({ perpage });
        });
    }
    fetchMoreData() {
        const number = parseInt(this.state.currentPage) + 1;
        axios
            .get(
                this.state.nextPage
            )
            .then(res => {
                const currentPage = res.data.current_page;
                const products = this.state.products.concat(res.data.data);
                const nextPage = res.data.next_page_url;
                this.setState({ nextPage });
                this.setState({ currentPage });
                this.setState({ products });
                if (this.state.totalPages <= this.state.currentPage) {
                    const hasMore = false;
                    this.setState({ hasMore });
                }
            });
    }
    render() {
        return (
            <div>
                <div className="container-fluid"></div>
                <InfiniteScroll
                    dataLength={this.state.products.length}
                    next={this.fetchMoreData.bind(this)}
                    hasMore={this.state.hasMore}
                    loader={<h4>Loading...</h4>}
                >
                    <div className="row">
                        {this.state.products.map(product => (
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

if (document.getElementById("ShopProduct")) {
    ReactDOM.render(<ShopProduct />, document.getElementById("ShopProduct"));
}

export default ShopProduct;
