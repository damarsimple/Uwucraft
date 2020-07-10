import React, { Component } from "react";
import ReactDOM from "react-dom";
import { Cart } from "../Ajax/Shop";
import { FiDollarSign } from "react-icons/fi";
import { AiOutlineDollarCircle } from "react-icons/ai";
class ShopProfile extends Component {
    constructor(props) {
        super(props)

        this.state = 
        {
            username: null,
            money: null,
            points: null,
        }
    }
    componentDidMount() {
        const money = 100;
        this.setState( { money })
        
        Cart().then(response => {
            console.log(response);
        });
    }
    render() {
        return (
            <div className="shadow-sm p-3 mb-5 bg-white rounded bg-light p-2 text-dark">
                <div className="balance text-small  p-2">
                    <div className="mb-2 font-weight-bold p-1">
                        <img
                            height={35}
                            src="https://www.pinclipart.com/picdir/big/60-602450_profile-clipart-profile-icon-round-profile-pic-png.png"
                        />
                        Name
                    </div>
                    <div className="border-top border-silver pt-2">
                        <AiOutlineDollarCircle /> Balance
                        <div>
                            Money <FiDollarSign />
                            {this.state.money}
                        </div>
                        <div>Points 1000</div>
                    </div>
                </div>
                <div className="border-top border-silver  p-2">
                    <p className="font-weight-bold">Purchase History</p>
                    <p>Small</p>
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
