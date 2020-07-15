import React from "react";
import Popup from "reactjs-popup";
import "./Shop.css";
import "react-toastify/dist/ReactToastify.css";
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
                    <h3>{props.name}</h3>
                    <p>{props.seller}</p>
                    <div className="product-price">
                        <span>{props.price}</span>
                        <div>
                            <a title="Add to cart">
                                <button
                                    onClick={() =>
                                        postCart(props.itemid, 1, props.name)
                                    }
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
