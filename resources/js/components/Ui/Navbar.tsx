import React from "react";
import {
    createStyles,
    makeStyles,
    Theme,
    fade
} from "@material-ui/core/styles";
import InputBase from "@material-ui/core/InputBase";
import AppBar from "@material-ui/core/AppBar";
import Toolbar from "@material-ui/core/Toolbar";
import Typography from "@material-ui/core/Typography";
import Button from "@material-ui/core/Button";
import SearchIcon from "@material-ui/icons/Search";
import { Link as Go } from "react-router-dom";

const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        anchor: { color: "white", textDecoration: "none" },
        search: {
            position: "relative",
            borderRadius: theme.shape.borderRadius,
            backgroundColor: fade(theme.palette.common.white, 0.15),
            "&:hover": {
                backgroundColor: fade(theme.palette.common.white, 0.25)
            },
            marginRight: theme.spacing(2),
            marginLeft: 0,
            width: "100%",
            [theme.breakpoints.up("sm")]: {
                marginLeft: theme.spacing(3),
                width: "auto"
            }
        },
        searchIcon: {
            padding: theme.spacing(0, 2),
            height: "100%",
            position: "absolute",
            pointerEvents: "none",
            display: "flex",
            alignItems: "center",
            justifyContent: "center"
        },
        inputRoot: {
            color: "inherit"
        },
        inputInput: {
            padding: theme.spacing(1, 1, 1, 0),
            // vertical padding + font size from searchIcon
            paddingLeft: `calc(1em + ${theme.spacing(4)}px)`,
            transition: theme.transitions.create("width"),
            width: "100%",
            [theme.breakpoints.up("md")]: {
                width: "20ch"
            }
        }
    })
);

export default () => {
    const classes = useStyles();

    return (
        <div>
            <AppBar position="fixed">
                <Toolbar>
                    <Typography variant="h6">UWUCRAFT</Typography>
                    <div className={classes.search}>
                        <div className={classes.searchIcon}>
                            <SearchIcon />
                        </div>
                        <InputBase
                            placeholder="Search…"
                            classes={{
                                root: classes.inputRoot,
                                input: classes.inputInput
                            }}
                            inputProps={{ "aria-label": "search" }}
                        />
                    </div>
                    <Go className={classes.anchor} to="/home">
                        <Button>Home</Button>
                    </Go>
                    <Go className={classes.anchor} to="/status">
                        <Button>Status</Button>
                    </Go>
                    <Go className={classes.anchor} to="/shop">
                        <Button color="inherit">Shop</Button>
                    </Go>
                    <Go className={classes.anchor} to="/store">
                        <Button color="inherit">Store</Button>
                    </Go>
                    <Go className={classes.anchor} to="/register">
                        <Button color="inherit">Register</Button>
                    </Go>
                    <Go className={classes.anchor} to="/login">
                        <Button color="inherit">Login</Button>
                    </Go>
                </Toolbar>
            </AppBar>
        </div>
    );
};
