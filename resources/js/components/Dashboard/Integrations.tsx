import React from "react";
import { makeStyles } from "@material-ui/core/styles";

import Paper from "@material-ui/core/Paper";
import { Box, Grid } from "@material-ui/core";
import MostPurchased from "./MostPurchased";

const useStyles = makeStyles({
    table: {
        minWidth: 700
    },
    fixedHeightTop: {
        height: 120
    },
    fixedHeightTable: {
        height: "100vh"
    }
});

export default function Integrations() {
    const classes = useStyles();

    return (
        <Box p={3}>
            <Grid container spacing={3}>
                <Grid item container xs={12} sm={12} spacing={1}>
                    <Grid item xs={false} sm={3}>
                        <Paper className={classes.fixedHeightTop}>
                            <MostPurchased />
                        </Paper>
                    </Grid>
                    <Grid item xs={false} sm={3}>
                        <Paper className={classes.fixedHeightTop}>
                            <MostPurchased />
                        </Paper>
                    </Grid>
                    <Grid item xs={false} sm={3}>
                        <Paper className={classes.fixedHeightTop}>
                            <MostPurchased />
                        </Paper>
                    </Grid>
                    <Grid item xs={false} sm={3}>
                        <Paper className={classes.fixedHeightTop}>
                            <MostPurchased />
                        </Paper>
                    </Grid>
                </Grid>
                <Grid item xs={12} sm={12}></Grid>
            </Grid>
        </Box>
    );
}
