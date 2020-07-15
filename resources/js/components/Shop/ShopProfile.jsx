import React, { Component } from "react";
import ReactDOM from "react-dom";
import { Cart } from "../Ajax/Shop";
import { AiOutlineShoppingCart } from "react-icons/ai";
import { AiOutlineUser } from "react-icons/ai";
import NumberFormat from "react-number-format";
class ShopProfile extends Component {
    constructor(props) {
        super(props);

        this.state = {
            username: null,
            money: null,
            points: null,
            totalCarts: null
        };
    }
    componentDidMount() {
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
    render() {
        return (
            <div className="shadow-sm p-3 mb-5 bg-white rounded bg-light p-2 text-dark">
                <div className="balance text-small  p-2">
                    <div className="mb-2 font-weight-bold p-1">
                        <AiOutlineUser size="2.5em" />
                        {this.state.username}
                    </div>
                    <div className="border-top border-silver pt-2">
                        <p className="font-weight-bold">Balance</p>
                        <div>
                            <NumberFormat
                                value={this.state.money}
                                displayType={"text"}
                                thousandSeparator={true}
                                prefix={"$ "}
                            />
                        </div>
                        <div>
                            Points
                            <NumberFormat
                                value={this.state.points}
                                displayType={"text"}
                                thousandSeparator={true}
                                prefix={" "}
                            />
                        </div>
                    </div>
                </div>
                <div className="border-top border-silver  p-2">
                    <p className="font-weight-bold">Purchase History</p>
                    <p>
                        <AiOutlineShoppingCart size="1em" />
                        Carts {this.state.totalCarts}
                    </p>
                </div>
            </div>
        );
    }
}
export default ShopProfile;
