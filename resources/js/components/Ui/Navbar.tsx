import React, { useContext, useEffect, useState } from "react";
import {
  createStyles,
  makeStyles,
  Theme,
  fade
} from "@material-ui/core/styles";
import AppBar from "@material-ui/core/AppBar";
import Toolbar from "@material-ui/core/Toolbar";
import Button from "@material-ui/core/Button";
import IconButton from "@material-ui/core/IconButton";
import SearchIcon from "@material-ui/icons/Search";
import TextField from "@material-ui/core/TextField";
import {
  Badge,
  Grid,
  List,
  ListItem,
  Box,
  ListItemIcon,
  ListItemText,
  ListItemSecondaryAction,
  Typography,
  ListItemAvatar
} from "@material-ui/core";
import { Link as Go } from "react-router-dom";
import UserContext from "../../context/UserContext";
import { meCart, GET_SEARCH } from "../../api/graphql";
import ShoppingCartIcon from "@material-ui/icons/ShoppingCart";
import Tippy from "@tippyjs/react";
import "tippy.js/themes/translucent.css";
import Autocomplete from "@material-ui/lab/Autocomplete";
import { useQuery } from "@apollo/client";
import { Item, Search, User } from "../../type/type";
import { getImage, linkTo } from "../../utils/linker";
import CircularProgress from "@material-ui/core/CircularProgress";
const useStyles = makeStyles((theme: Theme) =>
  createStyles({
    root: {
      flexGrow: 1
    },
    menuButton: {
      marginRight: theme.spacing(2)
    },
    title: {
      flexGrow: 1
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
    },
    inputRoot: {
      color: "inherit"
    },
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
    anchor: {
      color: "white",
      textDecoration: "none",
      "&:hover": {
        color: "black"
      }
    },
    anchorCart: {
      color: "black",
      textDecoration: "none",
      "&:hover": {
        color: "grey"
      }
    }
  })
);
const ItemList = props => {
  return (
    <ListItem button>
      <ListItemIcon>
        <img
          width={30}
          height={30}
          src={
            "/api/image/item/" + props?.data?.item?.minecraft_item_shorthand ??
            "stone"
          }
          alt=""
        />
      </ListItemIcon>
      <ListItemText primary={props?.data?.item?.item_name ?? "stone"} />
      <ListItemSecondaryAction>
        <IconButton edge="end" aria-label="delete">
          ${props?.data?.item?.price ?? 0}
        </IconButton>
      </ListItemSecondaryAction>
    </ListItem>
  );
};
export default function Navbar() {
  const classes = useStyles();
  const { session, destroySession, carts, setCarts } = useContext(UserContext);
  useEffect(() => {
    const setCartsData = async () => {
      const data = await meCart();
      if (localStorage.getItem("token")) {
        setCarts ? setCarts(data.data.me.usercart) : null;
      }
    };
    setCartsData();
  }, []);
  const handleEvent = async () => {
    const data = await meCart(true);
    setCarts ? setCarts(data.data.me.usercart) : null;
  };
  const [open, setOpen] = React.useState(false);
  const [options, setOptions] = React.useState<Search[]>([]);
  const [search, setSearch] = React.useState<String>("");
  const { loading, error, data } = useQuery(GET_SEARCH, {
    variables: { search: search }
  });

  const handleChange = e => {
    setSearch(e.target.value);
  };
  useEffect(() => {
    if (data && data.search) {
      setOptions(data.search);
    }
  }, [data]);

  return (
    <div className={classes.root}>
      <AppBar position="fixed">
        <Toolbar>
          <Grid
            container
            direction="row"
            justify="space-between"
            alignItems="center"
          >
            <Grid item xs={2} sm={4}>
              <Grid container justify="flex-start">
                <Grid item>
                  <Go className={classes.anchor} to="/home">
                    <Button color="inherit">Home</Button>
                  </Go>
                </Grid>
                <Grid item>
                  <Go className={classes.anchor} to="/status">
                    <Button color="inherit">Status</Button>
                  </Go>
                </Grid>
                <Grid item>
                  <Go className={classes.anchor} to="/dashboard">
                    <Button color="inherit">Dashboard</Button>
                  </Go>
                </Grid>
                <Grid item>
                  <Go className={classes.anchor} to="/shop">
                    <Button color="inherit">Shop</Button>
                  </Go>
                </Grid>
                <Grid item>
                  <Go className={classes.anchor} to="/store">
                    <Button color="inherit">Store</Button>
                  </Go>
                </Grid>
              </Grid>
            </Grid>
            <Grid item xs={10} sm={4}>
              <Autocomplete
                fullWidth
                freeSolo
                open={open}
                onOpen={() => {
                  setOpen(true);
                }}
                onClose={() => {
                  setOpen(false);
                }}
                getOptionSelected={(option, value) =>
                  option.name === value.name
                }
                getOptionLabel={option => option.name}
                options={options}
                loading={loading}
                renderOption={option => (
                  <ListItem
                    button
                    onClick={() => {
                      window.location.href = linkTo(option.action, option.type);
                    }}
                  >
                    <ListItemAvatar>
                      <img
                        width={35}
                        height={35}
                        src={getImage(option.img, option.type)}
                      />
                    </ListItemAvatar>

                    <ListItemText
                      primary={option.name}
                      secondary={option.type}
                    />
                  </ListItem>
                )}
                renderInput={params => (
                  <TextField
                    {...params}
                    value={search}
                    onChange={handleChange}
                    label="Search Something"
                    variant="filled"
                    InputProps={{
                      ...params.InputProps,
                      endAdornment: (
                        <React.Fragment>
                          {loading ? (
                            <CircularProgress color="inherit" size={20} />
                          ) : (
                            <SearchIcon />
                          )}

                          {params.InputProps.endAdornment}
                        </React.Fragment>
                      )
                    }}
                  />
                )}
              />
            </Grid>
            <Grid item xs={2} sm={4}>
              <Grid container justify="center">
                {// if i dont do this horribleness they wont appear as two instead one
                session.isLogged ? (
                  <>
                    <Tippy
                      trigger={"mouseenter click"}
                      onTrigger={handleEvent}
                      theme="translucent"
                      interactive
                      allowHTML
                      placement="bottom"
                      content={
                        <span>
                          <Box
                            height="80vh"
                            width="450px"
                            overflow="scroll"
                            style={{
                              backgroundColor: "whitesmoke",
                              color: "black"
                            }}
                          >
                            <AppBar position="static">
                              <Toolbar>
                                <Typography variant="h6">
                                  Shopping Cart ({carts.length})
                                </Typography>
                                <Go className={classes.anchor} to="/shop/cart">
                                  <Button color="inherit">Look Now</Button>
                                </Go>
                              </Toolbar>
                            </AppBar>
                            <List>
                              {carts.map((data, index) => {
                                return (
                                  <Go
                                    key={index}
                                    className={classes.anchorCart}
                                    to={"/shop/item/" + data?.item_id}
                                  >
                                    <ItemList data={data} />
                                  </Go>
                                );
                              })}
                            </List>
                          </Box>
                        </span>
                      }
                    >
                      <IconButton>
                        <Badge badgeContent={carts.length} color="error">
                          <ShoppingCartIcon />
                        </Badge>
                      </IconButton>
                    </Tippy>

                    <Button
                      onClick={() => {
                        destroySession ? destroySession() : console.log("bruh");
                      }}
                      color="inherit"
                    >
                      logout
                    </Button>
                  </>
                ) : (
                  <>
                    <Go className={classes.anchor} to="/register">
                      <Button color="inherit">Register</Button>
                    </Go>
                    <Go className={classes.anchor} to="/login">
                      <Button color="inherit">Login</Button>
                    </Go>
                  </>
                )}
                <Grid item></Grid>
              </Grid>
            </Grid>
          </Grid>
        </Toolbar>
      </AppBar>
    </div>
  );
}
