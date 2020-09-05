import React from "react";
import {
    withStyles,
    Theme,
    createStyles,
    makeStyles
} from "@material-ui/core/styles";
import Table from "@material-ui/core/Table";
import TableBody from "@material-ui/core/TableBody";
import TableCell from "@material-ui/core/TableCell";
import TableContainer from "@material-ui/core/TableContainer";
import TableHead from "@material-ui/core/TableHead";
import TableRow from "@material-ui/core/TableRow";
import Paper from "@material-ui/core/Paper";
import { Box, Grid } from "@material-ui/core";
import MostPurchased from "./MostPurchased";

const StyledTableCell = withStyles((theme: Theme) =>
    createStyles({
        head: {
            backgroundColor: theme.palette.common.black,
            color: theme.palette.common.white
        },
        body: {
            fontSize: 14
        }
    })
)(TableCell);

const StyledTableRow = withStyles((theme: Theme) =>
    createStyles({
        root: {
            "&:nth-of-type(odd)": {
                backgroundColor: theme.palette.action.hover
            }
        }
    })
)(TableRow);

function createData(
    name: string,
    calories: number,
    fat: number,
    carbs: number,
    protein: number
) {
    return { name, calories, fat, carbs, protein };
}

const rows = [
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Frozen yoghurt", 159, 6.0, 24, 4.0),
    createData("Ice cream sandwich", 237, 9.0, 37, 4.3),
    createData("Eclair", 262, 16.0, 24, 6.0),
    createData("Cupcake", 305, 3.7, 67, 4.3),
    createData("Gingerbread", 356, 16.0, 49, 3.9)
];

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

export default function Players() {
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
                <Grid item xs={12}>
                    <TableContainer className={classes.fixedHeightTable}>
                        <Table
                            stickyHeader
                            className={classes.table}
                            aria-label="customized table"
                        >
                            <TableHead>
                                <TableRow>
                                    <StyledTableCell>
                                        Dessert (100g serving)
                                    </StyledTableCell>
                                    <StyledTableCell align="right">
                                        Calories
                                    </StyledTableCell>
                                    <StyledTableCell align="right">
                                        Fat&nbsp;(g)
                                    </StyledTableCell>
                                    <StyledTableCell align="right">
                                        Carbs&nbsp;(g)
                                    </StyledTableCell>
                                    <StyledTableCell align="right">
                                        Protein&nbsp;(g)
                                    </StyledTableCell>
                                </TableRow>
                            </TableHead>
                            <TableBody>
                                {rows.map(row => (
                                    <StyledTableRow key={row.name}>
                                        <StyledTableCell
                                            component="th"
                                            scope="row"
                                        >
                                            {row.name}
                                        </StyledTableCell>
                                        <StyledTableCell align="right">
                                            {row.calories}
                                        </StyledTableCell>
                                        <StyledTableCell align="right">
                                            {row.fat}
                                        </StyledTableCell>
                                        <StyledTableCell align="right">
                                            {row.carbs}
                                        </StyledTableCell>
                                        <StyledTableCell align="right">
                                            {row.protein}
                                        </StyledTableCell>
                                    </StyledTableRow>
                                ))}
                            </TableBody>
                        </Table>
                    </TableContainer>
                </Grid>
            </Grid>
        </Box>
    );
}
