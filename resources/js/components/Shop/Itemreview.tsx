import React from "react";
import { Grid, Typography } from "@material-ui/core";
import StarIcon from "@material-ui/icons/Star";
import Reviewcard from "./Reviewcard";
export default () => {
    return (
        <Grid container>
            <Grid item xs={4} sm={4}>
                {
                    // FIXME
                }
                <Grid item container justify="center">
                    <Typography variant="h1">4,8/5</Typography>
                </Grid>
                <Grid item container justify="center">
                    <StarIcon />
                    <StarIcon />
                    <StarIcon />
                    <StarIcon />
                </Grid>
            </Grid>
            <Grid item xs={8} sm={8}>
                <Reviewcard />
                <Reviewcard />
                <Reviewcard />
                <Reviewcard />
                <Reviewcard />
            </Grid>
        </Grid>
    );
};
