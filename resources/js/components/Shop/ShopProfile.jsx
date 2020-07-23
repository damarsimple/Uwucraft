import React, { Component } from "react";
import { AiOutlineShoppingCart } from "react-icons/ai";
import { AiOutlineUser } from "react-icons/ai";
import NumberFormat from "react-number-format";
class ShopProfile extends Component {
    constructor(props) {
        super(props);
    }
    render() {
        return (
            <div className="shadow-sm p-3 mb-5 bg-white rounded bg-light p-2 text-dark">
                <div className="balance text-small  p-2">
                    <div className="mb-2 font-weight-bold p-1">
                        <AiOutlineUser size="2.5em" />
                        {this.props.username}
                    </div>
                    <div className="border-top border-silver pt-2">
                        <p className="font-weight-bold">Balance</p>
                        <div>
                            <NumberFormat
                                value={this.props.money}
                                displayType={"text"}
                                thousandSeparator={true}
                                prefix={"$ "}
                            />
                        </div>
                        <div>
                            Points
                            <NumberFormat
                                value={this.props.points}
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
                        Carts {this.props.totalCarts}
                    </p>
                </div>
                {this.props.cart.map((item,index) => {
                    return (
                        <div key={ index } className="card">
                            <div className="card-body">
                                <div className="row">
                                    <div className="col-xs-12 col-md-3">
                                        <img
                                            src={"/api/image/item/" + item.minecraft_item_shorthand}
                                            width="25px"
                                        ></img>
                                    </div>
                                    <div className="col-md-9"> { `${item.name} x${item.amount}  $${item.amount * item.price}` }</div>
                                </div>
                            </div>
                        </div>
                    );
                })}
            </div>
        );
    }
}
export default ShopProfile;
