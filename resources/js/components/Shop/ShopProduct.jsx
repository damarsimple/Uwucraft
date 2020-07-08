import React, { Component } from "react";
import ReactDOM from "react-dom";
import "./Shop.css";
import { ShopProductItem } from "./ShopProductItem";
import axios from "axios";
import Pagination from "react-js-pagination";
import { ShopProductModal } from "./ShopProductModal";
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
            perpage: null
        };
    }
    componentDidMount() {
        axios.get(window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '/api/items').then(res => {
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
    setProduct(pageNumber) {
        axios.get(window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '/api/items?page=' + pageNumber).then(res => {
            const products = res.data.data;
            const currentPage = res.data.current_page;
            this.setState({ products });
            this.setState({ currentPage });
            this.setState({ activePage: pageNumber });
        });
    }
    getImg(img) {
        return window.location.protocol + '//' + window.location.hostname + ':' + window.location.port + '/api/image/item/' + img;
    }
    render() {
        return (
            <div>
                <div className="container-fluid">
                    <div className="row">
                        {this.state.products.map(product => (
                            <ShopProductItem
                                key={product.id}
                                name={product.name}
                                price={"$" + product.price}
                                seller={product.seller}
                                modal={<ShopProductModal />}
                                itemid={product.id}
                                img={this.getImg(product.minecraft_item_shorthand)}
                            />
                        ))}
                    </div>
                </div>
                { 'will make it to infinite scrolling instead of pagination'}
                <Pagination
                    itemClass="page-item"
                    linkClass="page-link"
                    hideNavigation
                    activePage={this.state.currentPage}
                    itemsCountPerPage={this.state.perpage}
                    totalItemsCount={this.state.total}
                    pageRangeDisplayed={5}
                    onChange={this.setProduct.bind(this)}
                />
            </div>
        );
    }
}

if (document.getElementById("ShopProduct")) {
    ReactDOM.render(<ShopProduct />, document.getElementById("ShopProduct"));
}

export default ShopProduct;
