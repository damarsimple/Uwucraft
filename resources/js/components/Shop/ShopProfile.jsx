import React, { Component } from "react";
import ReactDOM from "react-dom";
import { Cart } from "../Ajax/Shop";
import { FiDollarSign } from "react-icons/fi";
import { AiOutlineDollarCircle, AiOutlineUser } from "react-icons/ai";
import NumberFormat from 'react-number-format';
class ShopProfile extends Component {
    constructor(props) {
        super(props);

        this.state = {
            username: null,
            money: null,
            points: null,
            totalCarts: null,
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
                        <AiOutlineDollarCircle size="1em" /> Balance
                        <div>
                            Money <FiDollarSign size="1em" />
                            {this.state.money}
                        </div>
                        <div>Points {this.state.points}</div>
                    </div>
                </div>
                <div className="border-top border-silver  p-2">
                    <p className="font-weight-bold">Purchase History</p>
                    <p>Carts {this.state.totalCarts}</p>
                    <p>Small</p>
                    <p>Small</p>
                </div>
            </div>
        );
    }
}

if (document.getElementById("ShopProfile")) {
    ReactDOM.render(<ShopProfile />, document.getElementById("ShopProfile"));
}

export default ShopProfile;
