import React, { useContext } from "react";
import {
    makeStyles,
    Theme,
    createStyles,
    Grid,
    Paper,
    Typography,
    Box,
    Button,
    ButtonGroup,
    TextField
} from "@material-ui/core";
import { Usercart } from "../../type/type";
import Image from "material-ui-image";
import DeleteIcon from "@material-ui/icons/Delete";
import FavoriteIcon from "@material-ui/icons/Favorite";
import UserContext from "../../context/UserContext";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        imgContainer: {
            maxWidth: "100%",
            maxHeight: "100%"
        },
        container: { marginBottom: "2rem", maxHeight: "100" }
    })
);

const CartList = () => {
    const { carts, setCarts } = useContext(UserContext);
    const HandleClick = (number: number) => {
        const pr = carts;
        pr[number]!.amount = carts[number]!.amount - 1;
        console.log(carts);
        setCarts ? setCarts(pr) : console.log("bruh");
    };
    const classes = useStyles();
    return (
        <>
            {carts.map((item, i) => (
                <Paper key={i} elevation={1} className={classes.container}>
                    <Grid container spacing={5}>
                        <Grid item xs={2} md={2}>
                            <Box p={1}>
                                <Image
                                    className={classes.imgContainer}
                                    src={
                                        "/api/image/item/" +
                                        item?.item?.minecraft_item_shorthand
                                    }
                                />
                            </Box>
                        </Grid>
                        <Grid
                            item
                            xs={6}
                            md={6}
                            container
                            direction="row"
                            justify="flex-start"
                            alignItems="center"
                        >
                            <Grid item xs={12}>
                                <Typography variant="h6">
                                    {item?.item?.item_name}
                                </Typography>
                            </Grid>
                            <Grid item xs={12}>
                                <Typography variant="body2">
                                    $ {item?.item?.price}
                                </Typography>
                            </Grid>
                        </Grid>
                        <Grid item xs={4} md={4}>
                            <Grid container justify="center" spacing={1}>
                                <Grid item container spacing={1}>
                                    <Grid item xs={4}>
                                        <Button size="small">-</Button>
                                    </Grid>
                                    <Grid item xs={4}>
                                        <TextField
                                            value={item?.amount}
                                            inputProps={{
                                                min: 0,
                                                style: { textAlign: "center" }
                                            }}
                                        />
                                    </Grid>
                                    <Grid item xs={4}>
                                        <Button size="small">+</Button>
                                    </Grid>
                                </Grid>
                                <Grid item>
                                    <ButtonGroup
                                        variant="contained"
                                        color="primary"
                                    >
                                        <Button>
                                            <FavoriteIcon />
                                        </Button>
                                        <Button
                                            onClick={() => {
                                                HandleClick(i);
                                            }}
                                        >
                                            <DeleteIcon />
                                        </Button>
                                    </ButtonGroup>
                                </Grid>
                            </Grid>
                        </Grid>
                    </Grid>
                </Paper>
            ))}
        </>
    );
};

export default CartList;
