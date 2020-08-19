import React from "react";
import { Grid } from "@material-ui/core";
import Iteminformation from "./Iteminformation";
import Itemdescription from "./Itemdescription";

export default () => {
    return (
        <Grid>
            <Grid container spacing={6}>
                <Grid item xs={false} sm={2}></Grid>
                <Grid item xs={12} sm={8}>
                    <Iteminformation />
                    <Itemdescription />
                </Grid>
                <Grid item xs={false} sm={2}></Grid>
            </Grid>
        </Grid>
    );
};
