import React from "react";
import Grid from "@material-ui/core/Grid/";
import Box from "@material-ui/core/Box/";
import Itemcard from "./Itemcard";
import { Link } from "react-router-dom";
export default props => {
    return (
        <>
            <Box p={5} m={2}>
                <Grid container spacing={3}>
                    {props.data.map((item, index) => (
                        <Grid key={index} item xs={6} sm={3}>
                            <Link
                                style={{ textDecoration: "none" }}
                                to={"/shop/item/" + item.item_name}
                            >
                                <Itemcard item={item} />
                            </Link>
                        </Grid>
                    ))}
                </Grid>
            </Box>
        </>
    );
};
