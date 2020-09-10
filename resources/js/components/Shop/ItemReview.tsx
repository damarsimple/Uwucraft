import React from "react";
import { Grid, Typography } from "@material-ui/core";
import Rating from "@material-ui/lab/Rating";
import StarIcon from "@material-ui/icons/Star";
import Reviewcard from "./ReviewCard";
import { Review } from "../../type/type";
const ItemReview = (props: { data?: Array<Review> }) => {
    // IS this too complicated?
    let average = array => array.reduce((a, b) => a + b) / array.length;
    const data = props.data ?? [];
    let arr: number[] = [];
    let i = 0;
    while (i < data.length) {
        arr.push(data[i].score);
        i++;
    }
    const AvgStar = arr.length != 0 ? average(arr) : 0;
    return (
        <Grid container>
            <Grid item xs={4} sm={4}>
                <Grid item container justify="center">
                    <Typography variant="h1">
                        {(Math.round(AvgStar * 100) / 100).toFixed(1)}/5
                    </Typography>
                </Grid>
                <Grid item container justify="center">
                    <Rating
                        name="read-only"
                        value={AvgStar}
                        readOnly
                        size="large"
                    />
                </Grid>
            </Grid>
            <Grid item xs={8} sm={8}>
                {props.data?.map((review, index) => {
                    return <Reviewcard key={index} {...review} />;
                })}
            </Grid>
        </Grid>
    );
};
export default ItemReview;
