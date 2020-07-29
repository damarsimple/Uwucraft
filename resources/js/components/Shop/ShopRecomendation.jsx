import React from "react";
import ShopCardGroup from "./ShopCardGroup";
class ShopRecomendation extends React.Component {
    render() {
        return (
            <div className="container-fluid">
                <h3> Recomendation </h3>
                <div className="card-group">
                    <ShopCardGroup title="Nice" image="/api/image/item/stone"/>
                    <ShopCardGroup title="Nice" image="/api/image/item/stone"/>
                    <ShopCardGroup title="Nice" image="/api/image/item/stone"/>
                    <ShopCardGroup title="Nice" image="/api/image/item/stone"/>
                </div>
            </div>
        );
    }
}

export default ShopRecomendation;
