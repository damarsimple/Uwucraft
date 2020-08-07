import React from "react";
//import "./Shop.css";
import "./Shop.css";
import { fetchItems, Cart, postCart } from "../Ajax/Shop";
import axios from "axios";
import ShopProfile from "./ShopProfile";
import ShopCarousel from "./ShopCarousel";
import ShopProduct from "./ShopProduct";
import ShopRecomendation from "./ShopRecomendation";
import ShopTopRecomendation from "./ShopTopRecomendation";
import { ApolloClient, InMemoryCache, gql } from "@apollo/client";
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
            points: null
        };
    }
    componentDidMount() {
        const client = new ApolloClient({
            uri: "/graphql",
            cache: new InMemoryCache()
        });

        client
            .query({
                query: gql`
                    query {
                        items {
                            data {
                                id
                                item_name
                                description
                                type
                                minecraft_item_shorthand
                                price
                                counter
                                author {
                                    username
                                }
                            }
                            paginatorInfo {
                                count
                                currentPage
                                firstItem
                                hasMorePages
                                lastItem
                                lastPage
                                perPage
                                total
                            }
                        }
                    }
                `
            })
            .then(res => {
                const response = res.data.items;
                const page = response.paginatorInfo;
                const products = response.data;
                this.setState({ products });

                const currentPage = page.currentPage;
                const nextPage = page.currentPage + 1;
                const lastPage = page.lastPage;
                const totalPages = page.lastPage;
                const total = page.total;
                const perpage = page.perPage;
                const hasMore = page.hasMorePages;
                this.setState({ hasMore });
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

            this.setState({ username });
            this.setState({ money });
            this.setState({ points });
            this.setState({ totalCarts });
        });
    }
    fetchMoreData() {
        const client = new ApolloClient({
            uri: "/graphql",
            cache: new InMemoryCache()
        });

        client
            .query({
                query: gql`
                    query {
                        items(page: ${this.state.nextPage}) {
                            data {
                                id
                                item_name
                                description
                                type
                                minecraft_item_shorthand
                                price
                                counter
                                author{
                                    username
                                }
                            }
                            paginatorInfo {
                                count
                                currentPage
                                firstItem
                                hasMorePages
                                lastItem
                                lastPage
                                perPage
                                total
                            }
                        }
                    }
                `
            })
            .then(res => {
                const products = this.state.products.concat(
                    res.data.items.data
                );
                const page = res.data.items.paginatorInfo;
                const currentPage = page.currentPage;
                const nextPage = this.state.currentPage + 1;
                const hasMore = page.hasMorePages;
                this.setState({ hasMore });
                this.setState({ nextPage });
                this.setState({ currentPage });
                this.setState({ products });
            });
    }
    render() {
        const {
            points,
            money,
            cart,
            username,
            totalCarts,
            products,
            hasMore
        } = this.state;
        return (
            <div className="container ">
                <div className="row padding">
                    <div className="col-md-3 shadow-sm p-3 mb-5 bg-white rounded">
                        <div className="mt-5" />
                        <ShopProfile
                            points={points}
                            money={money}
                            cart={cart}
                            username={username}
                            totalCarts={totalCarts}
                        />
                    </div>
                    <div className="col-md-9">
                        <ShopCarousel />
                        <ShopRecomendation />
                        <ShopTopRecomendation />
                        <div className="shadow-sm p-3 mb-5 bg-white rounded mt-5">
                            <ShopProduct
                                fetchMoreData={this.fetchMoreData.bind(this)}
                                products={products}
                                hasMore={hasMore}
                            />
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
