import React, { useState } from "react";
import {
    Button,
    Checkbox,
    Container,
    createStyles,
    FormControl,
    FormControlLabel,
    FormLabel,
    Grid,
    makeStyles,
    Paper,
    Radio,
    RadioGroup,
    TextField,
    Theme,
    Typography
} from "@material-ui/core";
import CartList from "./CartList";
import { useFormik } from "formik";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        root: {
            "& .MuiTextField-root": {
                margin: theme.spacing(1),
                width: "25ch"
            }
        },
        baseContainer: {
            padding: "2rem"
        }
    })
);
const paymentType = { card: "card", ingamemoney: "ingamemoney" };
const Checkout = () => {
    const [currentPage, setCurrentPage] = useState<
        "In Game Money" | "Credit Card" | string
    >("In Game Money");
    const formik = useFormik({
        initialValues: {
            method: ""
        },

        onSubmit: values => {
            alert(JSON.stringify(values, null, 2));
        }
    });
    const classes = useStyles();

    return (
        <Container>
            <Paper className={classes.baseContainer}>
                <form onSubmit={formik.handleSubmit}>
                    <Typography variant="h6" gutterBottom>
                        Payment method
                    </Typography>
                    <FormControl component="fieldset">
                        <RadioGroup
                            row
                            defaultValue={"In Game Money"}
                            onChange={e => {
                                setCurrentPage(e.target.value);
                            }}
                        >
                            <FormControlLabel
                                value="In Game Money"
                                control={
                                    <Radio
                                        id="method"
                                        name="method"
                                        onChange={formik.handleChange}
                                        color="primary"
                                    />
                                }
                                label="In Game Money"
                                labelPlacement="top"
                            />
                            <FormControlLabel
                                value="Credit Card"
                                control={
                                    <Radio
                                        id="method"
                                        name="method"
                                        onChange={formik.handleChange}
                                        color="primary"
                                    />
                                }
                                label="Credit Card"
                                labelPlacement="top"
                            />
                        </RadioGroup>
                    </FormControl>
                    {currentPage == "In Game Money" ? (
                        <InGameMoney />
                    ) : (
                        <CreditCard />
                    )}
                    <Button
                        color="primary"
                        size="large"
                        fullWidth
                        variant="contained"
                        type="submit"
                    >
                        Proceed
                    </Button>
                </form>
            </Paper>
        </Container>
    );
};
const InGameMoney = () => {
    return (
        <React.Fragment>
            <Typography>Current Balance : {10000}</Typography>
        </React.Fragment>
    );
};
const CreditCard = () => {
    return (
        <React.Fragment>
            <Grid container spacing={3}>
                <Grid item xs={12} md={6}>
                    <TextField
                        required
                        id="cardName"
                        label="Name on card"
                        fullWidth
                        autoComplete="cc-name"
                    />
                </Grid>
                <Grid item xs={12} md={6}>
                    <TextField
                        required
                        id="cardNumber"
                        label="Card number"
                        fullWidth
                        autoComplete="cc-number"
                    />
                </Grid>
                <Grid item xs={12} md={6}>
                    <TextField
                        required
                        id="expDate"
                        label="Expiry date"
                        fullWidth
                        autoComplete="cc-exp"
                    />
                </Grid>
                <Grid item xs={12} md={6}>
                    <TextField
                        required
                        id="cvv"
                        label="CVV"
                        helperText="Last three digits on signature strip"
                        fullWidth
                        autoComplete="cc-csc"
                    />
                </Grid>
            </Grid>
        </React.Fragment>
    );
};
export default Checkout;
