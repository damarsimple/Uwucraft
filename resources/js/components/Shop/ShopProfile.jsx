import React from "react";
import { AiOutlineShoppingCart } from "react-icons/ai";
import { AiOutlineUser } from "react-icons/ai";
import { FaWallet, FaCoins } from "react-icons/fa";
import NumberFormat from "react-number-format";
export default function ShopProfile(props) {
    return (
        <div className="p-3 mb-5 bg-white rounded bg-light p-2 text-dark">
            <div className="balance text-small  p-2">
                <div className="mb-2 font-weight-bold p-1">
                    <AiOutlineUser size="2.5em" />
                    {props.username}
                </div>
                <div className="border-top border-silver pt-2">
                    <p className="font-weight-bold">Balance</p>
                    <div>
                        <FaWallet size="1em" className="m-3" />
                        <NumberFormat
                            value={props.money}
                            displayType={"text"}
                            thousandSeparator={true}
                            prefix={"$ "}
                        />
                    </div>
                    <div>
                        <FaCoins size="1em" className="m-3" />
                        Points
                        <NumberFormat
                            value={props.points}
                            displayType={"text"}
                            thousandSeparator={true}
                            prefix={" "}
                        />
                    </div>
                </div>
            </div>
        </div>
    );
}
