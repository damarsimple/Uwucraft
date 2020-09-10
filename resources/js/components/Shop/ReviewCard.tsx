import React from "react";
import Card from "@material-ui/core/Card";
import CardHeader from "@material-ui/core/CardHeader";
import CardContent from "@material-ui/core/CardContent";
import Avatar from "@material-ui/core/Avatar";
import Typography from "@material-ui/core/Typography";
import { Box } from "@material-ui/core";
import Rating from "@material-ui/lab/Rating";
import { Review } from "../../type/type";
const ReviewCard = (props: Review) => {
    return (
        <Box m={1}>
            <Card>
                <CardHeader
                    avatar={
                        <Avatar
                            aria-label="avatar"
                            alt={props.author.username.toUpperCase()}
                        />
                    }
                    title={props.author.username}
                    subheader={props.created_at}
                />
                <CardContent>
                    <Rating name="disabled" value={props.score} disabled />
                    <Typography
                        variant="body2"
                        color="textSecondary"
                        component="p"
                    >
                        {props.caption}
                    </Typography>
                </CardContent>
            </Card>
        </Box>
    );
};
export default ReviewCard;
