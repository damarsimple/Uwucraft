import React, { Component } from "react";
import Popup from "reactjs-popup";
import "./Shop.css";
import axios from "axios";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";

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
                    <div className="button-head">
                        <div className="product-action-2">
                            <a title="Add to cart">
                                <button
                                    onClick={() =>
                                        postCart(
                                            props.itemid,
                                            1,
                                            props.name,
                                        )
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
                <div className="product-content">
                    <h3>{props.name}</h3>
                    <p>{props.seller}</p>
                    <div className="product-price">
                        <span>{props.price}</span>
                    </div>
                </div>
            </div>
        </div>
    );
}
function postCart(itemid, amount, name) {
    try {
        const response = axios.post(
            window.location.protocol +
                "//" +
                window.location.hostname +
                ":" +
                window.location.port +
                "/ajax/shop",
            {
                item: itemid,
                amount: amount
            }
        );
        toast.info("🛒 " + "Added " + name + " To Carts !", {
            position: "bottom-left",
            autoClose: 5000,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined
        });
    } catch (e) {
        console.log(`😱 Axios request failed: ${e}`);
    }
    
}
