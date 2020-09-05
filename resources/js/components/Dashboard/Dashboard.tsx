import React from "react";
import clsx from "clsx";
import { makeStyles } from "@material-ui/core/styles";
import Grid from "@material-ui/core/Grid";
import Paper from "@material-ui/core/Paper";
import LatestTransaction from "./LatestTransaction";
import Activity from "./Activity";
import SystemActivity from "./SystemActivity";
import Chart from "./Chart";
const useStyles = makeStyles(theme => ({
    root: {
        padding: "1rem"
    },
    paper: {
        display: "flex",
        flexDirection: "column"
    },
    fixedHeight: {
        height: 480
    }
}));

export default function Dashboard() {
    const classes = useStyles();

    const fixedHeightPaper = clsx(classes.paper, classes.fixedHeight);
    return (
        <Grid container spacing={3} className={classes.root}>
            <Grid item xs={6}>
                <Paper className={fixedHeightPaper}>
                    <Chart />
                </Paper>
            </Grid>
            <Grid item xs={6}>
                <Paper className={fixedHeightPaper}>
                    <LatestTransaction />
                </Paper>
            </Grid>
            <Grid item xs={6}>
                <Paper className={fixedHeightPaper}>
                    <Activity />
                </Paper>
            </Grid>
            <Grid item xs={6}>
                <Paper className={fixedHeightPaper}>
                    <SystemActivity />
                </Paper>
            </Grid>
        </Grid>
    );
}
