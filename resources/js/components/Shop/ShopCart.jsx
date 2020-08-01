import React, { useState } from "react";
import NumberFormat from 'react-number-format';
import { AiOutlineShoppingCart } from 'react-icons/ai'
export default function ShopCart(props) {
    return (
        <>
            <div className="border-top border-silver  p-2 position-fixed">
                <p className="font-weight-bold">Purchase History</p>
                <p>
                    <AiOutlineShoppingCart size="1em" className="m-3" />
                    Cart {props.cart.length}
                </p>
            </div>
            {props.cart.map((item, index) => {
                return (
                    <div key={index} className="card">
                        <div className="card-body">
                            <div className="row">
                                <div className="col-xs-12 col-md-3">
                                    <img
                                        src={
                                            "/api/image/item/" +
                                            item.minecraft_item_shorthand
                                        }
                                        width="25px"
                                    ></img>
                                </div>
                                <div className="col-md-9">
                                    {`${item.item_name} x${item.amount}`}
                                    <NumberFormat
                                        value={item.amount * item.price}
                                        displayType={"text"}
                                        thousandSeparator={true}
                                        prefix={" $ "}
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                );
            })}
        </>
    );
}
