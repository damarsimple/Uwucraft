import React from "react";
import {
    Grid,
    Paper,
    CardHeader,
    Avatar,
    IconButton,
    Box,
    Typography
} from "@material-ui/core";

import { makeStyles } from "@material-ui/core/styles";
import MostPurchased from "./MostPurchased";
import MostPurchased24HTable from "./MostPurchased24HTable";
import SimpleLineCharts from "./SimpleLineCharts";
const useStyles = makeStyles(theme => ({
    root: {
        padding: "1rem"
    },
    paper: {
        display: "flex",
        flexDirection: "column"
    },
    fixedHeightTop: {
        height: 120
    },
    fixedHeightBottom: {
        height: 300
    }
}));
function Transaction() {
    const classes = useStyles();
    return (
        <>
            <Grid container spacing={1} className={classes.root}>
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
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <MostPurchased24HTable />
                    </Paper>
                </Grid>
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <SimpleLineCharts />
                    </Paper>
                </Grid>
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <SimpleLineCharts />
                    </Paper>
                </Grid>
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <MostPurchased24HTable />
                    </Paper>
                </Grid>
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <MostPurchased24HTable />
                    </Paper>
                </Grid>
                <Grid item xs={false} sm={4}>
                    <Paper className={classes.fixedHeightBottom}>
                        <MostPurchased24HTable />
                    </Paper>
                </Grid>
            </Grid>
            {/* <Grid container spacing={3} className={classes.root}>
              
            </Grid> */}
        </>
    );
}

export default Transaction;
