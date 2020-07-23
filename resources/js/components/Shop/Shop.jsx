import React from "react";
import "./Shop.css";
import { fetchItems, Cart, postCart } from "../Ajax/Shop";
import axios from "axios";
import ShopProfile from "./ShopProfile";
import ShopCarousel from "./ShopCarousel";
import ShopProduct from "./ShopProduct";
import ShopRecomendation from "./ShopRecomendation";
import ShopTopRecomendation from "./ShopTopRecomendation";
export default class Shop extends React.Component {
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
            hasMore: true,

            username: null,
            money: null,
            points: null,
            totalCarts: null,
            cart: []
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
        Cart().then(response => {
            const username = response.data.username;
            const money = response.data.balance;
            const points = response.data.points;
            const totalCarts = response.data.cart.length;
            const cart = response.data.cart;
            this.setState({ username });
            this.setState({ money });
            this.setState({ points });
            this.setState({ totalCarts });
            this.setState({ cart });
        });
    }
    fetchMoreData() {
        const number = parseInt(this.state.currentPage) + 1;
        axios.get(this.state.nextPage).then(res => {
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
    bruhmoment()
    {
        console.log('test');
    }
    render() {
        return (
            <div className="container mt-5">
                <div className="row">
                    <div className="col-md-3 shadow-sm p-3 mb-5 bg-white rounded">
                        <div className="mt-5" />
                        <ShopProfile
                            points={this.state.points}
                            money={this.state.money}
                            cart={this.state.cart}
                            username={this.state.username}
                            totalCarts={this.state.totalCarts}
                        />
                    </div>
                    <div className="col-md-9">
                        <ShopCarousel />
                        <ShopRecomendation />
                        <ShopTopRecomendation />
                        <div className="shadow-sm p-3 mb-5 bg-white rounded mt-5">
                            <ShopProduct
                                fetchMoreData={this.fetchMoreData.bind(this)}
                                products={this.state.products}
                                hasMore={this.state.hasMore}
                                //Need To pass onclick event to grandchild component somehow
                                update={this.bruhmoment.bind(this)}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
