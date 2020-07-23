import React from "react";
import Popup from "reactjs-popup";
import { postCart } from "../Ajax/Shop";
export function ShopProductItem(props) {
    return (
        <div className="col-md-3 shadow-sm p-3 mb-5 bg-white rounded">
            <div className="single-product">
                <div className="product-img">
                    <Popup
                        trigger={
                            <a>
                                <img className="default-img" src={props.img} />
                                <img className="hover-img" src={props.img} />
                            </a>
                        }
                        modal
                        CloseOnDocumentClick
                    >
                        <div>{props.modal}</div>
                    </Popup>
                </div>
                <div className="product-content">
                    <h5>{props.name}</h5>
                    <p>{props.seller}</p>
                    <div className="product-price">
                        <span>{props.price}</span>
                        <div className="input-group input-group-sm mb-3">
                            <div className="input-group-prepend">
                                <span
                                    className="input-group-text"
                                    id="inputGroup-sizing-sm"
                                >
                                    Small
                                </span>
                            </div>
                            <input
                                type="text"
                                className="form-control"
                                aria-label="Small"
                                aria-describedby="inputGroup-sizing-sm"
                            />
                        </div>
                        <div>
                            <a title="Add to cart">
                                <button
                                //Need A way to fix this garbage code
                                    onClick={() => {postCart(props.itemid, 1, props.name); props.update}}
                                    type="button"
                                    className="btn btn-primary"
                                >
                                    Add to cart
                                </button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    );
}
