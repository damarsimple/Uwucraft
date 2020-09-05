import React from "react";
import Box from "@material-ui/core/Box";
import Avatar from "@material-ui/core/Avatar";
import { Theme, createStyles, makeStyles } from "@material-ui/core/styles";
import Paper from "@material-ui/core/Paper";

const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        comment: {
            marginTop: "1rem",
            marginBottom: "1rem",
            marginLeft: "1rem",
            border: "5px round black",
            width: "750px"
        }
    })
);
export default props => {
    const classes = useStyles();
    const comment = props.comment;
    return (
        <>
            <Box className={classes.comment} display="flex">
                <Avatar
                    alt={comment.author.username}
                    src="/static/images/avatar/1.jpg"
                />
                <Paper>{comment.content}</Paper>
            </Box>
        </>
    );
};
