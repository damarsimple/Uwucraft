import {
    Container,
    createStyles,
    Grid,
    makeStyles,
    Theme,
    Typography,
    Box,
    Paper,
    Divider,
    Button
} from "@material-ui/core";
import React, { useContext, useEffect, useState } from "react";
import UserContext from "../../context/UserContext";
import CartList from "./CartList";
import { meCart } from "../../api/graphql";

const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        container: { margin: "2rem", padding: "2rem" },
        cartReviewContainer: {
            position: "fixed",
            width: 376
        }
    })
);

const Cart = () => {
    const { carts, setCarts } = useContext(UserContext);
    const [totalPrice, setTotalPrice] = useState<number>(0);
    const classes = useStyles();
    useEffect(() => {
        const setCartsData = async () => {
            const data = await meCart(true);
            if (localStorage.getItem("token")) {
                setCarts ? setCarts(data.data.me.usercart) : null;
                var totalPrice = 0;
                data.data.me.usercart.map(e => {
                    totalPrice = totalPrice + e.item.price;
                });
                setTotalPrice(totalPrice);
            }
        };
        setCartsData();
    }, []);
    return (
        <Container maxWidth="lg">
            <Paper elevation={0} className={classes.container}>
                <Grid container spacing={3}>
                    <Grid item xs={8} sm={8}>
                        <CartList />
                    </Grid>
                    <Grid item xs={4} sm={4}>
                        <Paper
                            elevation={2}
                            className={classes.cartReviewContainer}
                        >
                            <Box p={3}>
                                <Typography variant="h3" color="initial">
                                    Cart Review
                                </Typography>
                                <Divider />
                                <Box mt={5} mb={5}>
                                    <Grid container justify="space-between">
                                        <Grid item>
                                            <Box textAlign="left">
                                                <Typography
                                                    variant="body2"
                                                    color="initial"
                                                >
                                                    Total Price
                                                </Typography>
                                            </Box>
                                        </Grid>
                                        <Grid item>
                                            <Box textAlign="right">
                                                <Typography
                                                    variant="body2"
                                                    color="initial"
                                                >
                                                    $ {totalPrice}
                                                </Typography>
                                            </Box>
                                        </Grid>
                                    </Grid>
                                </Box>
                                <Button
                                    color="primary"
                                    fullWidth
                                    variant="contained"
                                >
                                    Buy
                                </Button>
                            </Box>
                        </Paper>
                    </Grid>
                </Grid>
            </Paper>
        </Container>
    );
};

export default Cart;
