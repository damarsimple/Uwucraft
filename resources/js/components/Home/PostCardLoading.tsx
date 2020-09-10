import React from "react";
import { makeStyles, Theme, createStyles } from "@material-ui/core/styles";
import clsx from "clsx";
import Card from "@material-ui/core/Card";
import CardHeader from "@material-ui/core/CardHeader";
import CardMedia from "@material-ui/core/CardMedia";
import CardContent from "@material-ui/core/CardContent";
import CardActions from "@material-ui/core/CardActions";
import Collapse from "@material-ui/core/Collapse";
import Avatar from "@material-ui/core/Avatar";
import IconButton from "@material-ui/core/IconButton";
import Typography from "@material-ui/core/Typography";
import { red } from "@material-ui/core/colors";
import FavoriteIcon from "@material-ui/icons/Favorite";
import ShareIcon from "@material-ui/icons/Share";
import ExpandMoreIcon from "@material-ui/icons/ExpandMore";
import MoreVertIcon from "@material-ui/icons/MoreVert";
import Skeleton from "@material-ui/lab/Skeleton";
import { Post } from "../../type/type";
import Postcomment from "./PostComment";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        root: {
            margin: "2rem"
        },
        media: {
            height: 0,
            paddingTop: "56.25%" // 16:9
        },
        expand: {
            transform: "rotate(0deg)",
            marginLeft: "auto",
            transition: theme.transitions.create("transform", {
                duration: theme.transitions.duration.shortest
            })
        },
        expandOpen: {
            transform: "rotate(180deg)"
        },
        avatar: {
            backgroundColor: red[500]
        },
        skeletonMedia: {
            height: 657,
            width: "100%"
        },
        skeletonCaption: {
            height: 100,
            width: "100%"
        },
        skeletonHeader: {
            height: 20,
            width: "100%"
        }
    })
);

const PostCardLoading = () => {
    const classes = useStyles();

    return (
        <Card className={classes.root}>
            <CardHeader
                avatar={<Skeleton variant="circle" width={40} height={40} />}
                title={
                    <Skeleton
                        className={classes.skeletonHeader}
                        variant="text"
                    />
                }
                subheader={
                    <Skeleton
                        className={classes.skeletonHeader}
                        variant="text"
                    />
                }
            />
            <Skeleton className={classes.skeletonMedia} variant="rect" />
            <CardContent>
                <Typography component="p">
                    <Skeleton
                        className={classes.skeletonCaption}
                        variant="text"
                    />
                </Typography>
            </CardContent>
            <CardActions disableSpacing>
                <IconButton aria-label="add to favorites">
                    <FavoriteIcon />
                </IconButton>
                <IconButton aria-label="share">
                    <ShareIcon />
                </IconButton>
            </CardActions>
        </Card>
    );
};
export default PostCardLoading;
