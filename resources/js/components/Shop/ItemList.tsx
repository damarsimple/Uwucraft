import React from "react";
import Grid from "@material-ui/core/Grid/";
import Box from "@material-ui/core/Box/";
import Itemcard from "./ItemCard";
import { Link } from "react-router-dom";
const ItemList = props => {
    return (
        <>
            <Grid container spacing={1}>
                {props.data.map((item, index) => (
                    <Grid key={index} item xs={6} sm={2}>
                        <Link
                            style={{ textDecoration: "none" }}
                            to={"/shop/item/" + item.node.id}
                        >
                            <Itemcard item={item.node} />
                        </Link>
                    </Grid>
                ))}
            </Grid>
        </>
    );
};
export default ItemList;
