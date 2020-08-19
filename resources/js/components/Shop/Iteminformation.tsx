import React from "react";
import {
    Grid,
    Typography,
    Paper,
    TextField,
    Box,
    Avatar,
    IconButton,
    Button
} from "@material-ui/core";
import VisibilityIcon from "@material-ui/icons/Visibility";
import FavoriteIcon from "@material-ui/icons/Favorite";
import ShoppingCartIcon from "@material-ui/icons/ShoppingCart";
import Image from "material-ui-image";
import { Author } from "../../api/graphql";

interface Information {
    imgSrc: string;
    item_name: string;
    price: number;
    counter: number;
    author: Author;
}
const Iteminformation = (props: Information) => {
    return (
        <>
            <Grid container spacing={3}>
                <Grid item xs={false} sm={4}>
                    <Image
                        imageStyle={{
                            width: 400,
                            height: 400,
                            marginTop: "5rem"
                        }}
                        src={props.imgSrc}
                    />
                </Grid>
                <Grid item xs={false} sm={8}>
                    <Box p={10} alignItems="center">
                        <Typography variant="h5">
                            {props.item_name}
                            <hr />
                        </Typography>
                        <Paper
                            elevation={1}
                            style={{
                                width: "inherit",
                                padding: "1rem",
                                backgroundColor: "#F5FFFA"
                            }}
                        >
                            <Typography variant="h6">
                                IDR {props.price}
                            </Typography>
                        </Paper>
                        <hr />
                        <Grid container spacing={3}>
                            <Grid item>
                                <TextField
                                    id="standard-number"
                                    label="Number"
                                    type="number"
                                    InputLabelProps={{
                                        shrink: true
                                    }}
                                />
                            </Grid>
                            <Grid item>
                                <Button variant="contained" color="primary">
                                    buy now
                                </Button>
                            </Grid>
                            <Grid item>
                                <Button variant="contained" color="primary">
                                    add to cart
                                </Button>
                            </Grid>
                        </Grid>
                        <hr />
                        <Grid container alignItems="center" spacing={3}>
                            <Grid item>
                                <VisibilityIcon /> {props.counter}
                            </Grid>
                            <Grid item>
                                <ShoppingCartIcon /> 100
                            </Grid>
                            <Grid item>
                                <FavoriteIcon /> 100
                            </Grid>
                        </Grid>
                        <hr />
                        <Grid container alignItems="center" spacing={3}>
                            <Grid item>
                                <IconButton
                                    color="primary"
                                    aria-label="add to shopping cart"
                                >
                                    <FavoriteIcon />
                                </IconButton>
                            </Grid>
                            <Grid item>
                                <IconButton
                                    color="primary"
                                    aria-label="add to shopping cart"
                                >
                                    <FavoriteIcon />
                                </IconButton>
                            </Grid>
                            <Grid item>
                                <IconButton
                                    color="primary"
                                    aria-label="add to shopping cart"
                                >
                                    <FavoriteIcon />
                                </IconButton>
                            </Grid>
                        </Grid>
                        <hr />
                        <Grid
                            container
                            spacing={1}
                            direction="row"
                            justify="flex-start"
                            alignItems="center"
                        >
                            <Grid item>
                                <Avatar
                                    alt={props.author.username.toUpperCase()}
                                    src="/static/images/avatar/1.jpg"
                                />
                            </Grid>
                            <Grid item>
                                <Typography variant="h6">
                                    {props.author.username}
                                </Typography>
                            </Grid>
                        </Grid>
                        <hr />
                    </Box>
                </Grid>
            </Grid>
            <hr />
        </>
    );
};

export default Iteminformation;
