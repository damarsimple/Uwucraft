import React from "react";
import InputNumber from "rc-input-number";
import "rc-input-number/assets/index.css";
import { getImg } from "../Ajax/Shop";
import Popup from "reactjs-popup";
import { postCart } from "../Ajax/Shop";
import NumberFormat from "react-number-format";
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
            <div className="col-md-3">
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
                    <div>Bruh</div>
                </Popup>
                <div className="card-body">
                    <div>
                        <h5>{this.props.data.name}</h5>
                        <p>{this.props.data.seller}</p>
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
            </div>
        );
    }
}
