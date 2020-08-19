import React from "react";
import {
    Grid,
    Typography,
    Paper,
    TextField,
    Box,
    Avatar
} from "@material-ui/core";

const Iteminformation = () => {
    return (
        <>
            <Grid container spacing={3}>
                <Grid item xs={false} sm={4}>
                    <Box p={10} alignItems="center">
                        <img
                            width="350"
                            src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/25/75310861/75310861_b2269d97-2666-441e-9028-a8b74da5db62_713_640.jpg"
                        />
                        <hr />
                        <Grid container spacing={1}>
                            <Grid item>
                                <img
                                    width="75"
                                    src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/25/75310861/75310861_b2269d97-2666-441e-9028-a8b74da5db62_713_640.jpg"
                                />
                            </Grid>
                            <Grid item>
                                <img
                                    width="75"
                                    src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/25/75310861/75310861_b2269d97-2666-441e-9028-a8b74da5db62_713_640.jpg"
                                />
                            </Grid>
                            <Grid item>
                                <img
                                    width="75"
                                    src="https://ecs7.tokopedia.net/img/cache/700/product-1/2017/7/25/75310861/75310861_b2269d97-2666-441e-9028-a8b74da5db62_713_640.jpg"
                                />
                            </Grid>
                        </Grid>
                    </Box>
                </Grid>
                <Grid item xs={false} sm={8}>
                    <Box p={10} alignItems="center">
                        <Typography variant="h5">
                            [CT Shimakaze Kancolle] Kostum Cosplay Kantai
                            Collection Anime Manga
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
                            <Typography variant="h6">RP 1000</Typography>
                        </Paper>
                        <hr />
                        <TextField
                            id="standard-number"
                            label="Number"
                            type="number"
                            InputLabelProps={{
                                shrink: true
                            }}
                        />
                        <hr />
                        <Grid container alignItems="center" spacing={3}>
                            <Grid item>DETAILS1</Grid>
                            <Grid item>DETAILS2</Grid>
                            <Grid item>DETAILS3</Grid>
                        </Grid>
                        <hr />
                        <Grid container alignItems="center" spacing={3}>
                            <Grid item>Review ?</Grid>
                            <Grid item>Review ?</Grid>
                            <Grid item>Review ?</Grid>
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
                                    alt="Remy Sharp"
                                    src="/static/images/avatar/1.jpg"
                                />
                            </Grid>
                            <Grid item>
                                <Typography variant="h6">Seller</Typography>
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
