import React from "react";
export default function ShopCardGroup(props) {
    return (  
            <div className="card m-2">
                <img
                    src={props.image}
                    className="card-img-top"
                />
                <h5 className="card-title">{props.title}</h5>
            </div>
    );
}
