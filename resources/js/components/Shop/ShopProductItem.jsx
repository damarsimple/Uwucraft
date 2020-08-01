import React from "react";
import InputNumber from "rc-input-number";
import "rc-input-number/assets/index.css";
import { getImg } from "../Ajax/Shop";
import Popup from "reactjs-popup";
import { postCart } from "../Ajax/Shop";
import NumberFormat from "react-number-format";
import { ShopProductModal } from "./ShopProductModal";
import { FaHeart, FaShoppingCart } from "react-icons/fa";
export default class ShopProductItem extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            value: null
        };
    }
    handleChange(e) {
        this.setState({ value: e });
    }
    render() {
        return (
            <div className="col-12 col-sm-8 col-md-6 col-lg-4 mt-2 mb-2">
                <div className="card">
                    <Popup
                        trigger={
                            <a>
                                <img
                                    src={getImg(
                                        this.props.data.minecraft_item_shorthand
                                    )}
                                    className="card-img-top"
                                />
                            </a>
                        }
                        modal
                        CloseOnDocumentClick
                    >
                        <ShopProductModal />
                    </Popup>
                    {/* <div className="card-img-overlay d-flex justify-content-end">
                        <a href="#" className="card-link text-danger like">
                            <FaHeart />
                        </a>
                    </div> */}
                    <div className="card-body">
                        <h4 className="card-title">
                            {this.props.data.item_name}
                        </h4>
                        <h6 className="card-subtitle mb-2 text-muted">
                            Seller: {this.props.data.user.username}
                        </h6>
                        {/* <p className="card-text">
                            { this.props.data.description }
                        </p> */}
                        <div className="options d-flex flex-fill"></div>
                        <div className="buy d-flex justify-content-between align-items-center">
                            <div className="price text-success">
                                <h5 className="mt-4">
                                    <NumberFormat
                                        value={this.props.data.price}
                                        displayType={"text"}
                                        thousandSeparator={true}
                                        prefix={"$ "}
                                    />
                                </h5>
                            </div>
                            <button
                                onClick={() => {
                                    postCart(
                                        this.props.data.id,
                                        1,
                                        this.props.data.item_name
                                    );
                                }}
                                className="btn btn-danger mt-3"
                            >
                                <FaShoppingCart /> Add to Cart
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
/**   <div className="col-md-3">
                <Popup
                    trigger={
                        <a>
                            <img
                                src={getImg(
                                    this.props.data.minecraft_item_shorthand
                                )}
                                className="card-img-top"
                            />
                        </a>
                    }
                    modal
                    CloseOnDocumentClick
                >
                    <ShopProductModal />
                </Popup>
                <div className="card-body">
                    <div>
                        <h5>{this.props.data.name}</h5>
                        <p>{this.props.data.username}</p>
                        <div>
                            <span>
                                <NumberFormat
                                    value={this.props.data.price}
                                    displayType={"text"}
                                    thousandSeparator={true}
                                    prefix={"$ "}
                                />
                            </span>
                            <div>
                            <InputNumber
                                min={1}
                                max={64}
                                placeholder="Enter Amount"
                                onChange={this.handleChange.bind(this)}
                                style={{ width: "200px", height: "30px", paddingRight: "2px" }}
                            />
                                <button
                                    type="button"
                                    onClick={() => {
                                        postCart(
                                            this.props.data.id,
                                            this.state.value,
                                            this.props.data.name
                                        );
                                    }}
                                    className="btn btn-primary"
                                    style={{
                                        width: "200px",
                                        height: "30px",
                                        textAlign: "center",
                                        backgroundColor: "#0275d8",
                                        color: "white",
                                        padding: "0",
                                        paddingRight: "2px"
                                    }}
                                >
                                    Add to cart
                                </button>
                            </div>
                            
                        </div>
                       
                    </div>
                </div>
            </div> */
