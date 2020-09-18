import {
    Paper,
    Box,
    Typography,
    Button,
    createStyles,
    makeStyles,
    Theme
} from "@material-ui/core";
import React from "react";
import { User } from "../../type/type";
import ChatForm from "./ChatForm";
import CloseIcon from "@material-ui/icons/Close";
import ChatBox from "./ChatBox";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        header: {
            maxHeight: 50
        }
    })
);
interface ChatContainerInformation {
    friend: User;
    index: number;
    isActive: boolean;
    setActiveFriendTab: (index: number) => void;
    removeActiveFriend: (index: number) => void;
}
function ChatContainer(props: ChatContainerInformation) {
    const classes = useStyles();
    return (
        <>
            <Paper square className={classes.header} elevation={3}>
                <Box padding={1} position="relative">
                    <Typography
                        align="center"
                        variant="h6"
                        color="initial"
                        onClick={() => props.setActiveFriendTab(props.index)}
                    >
                        {props.friend.username}
                    </Typography>
                    <Button
                        onClick={() => props.removeActiveFriend(props.index)}
                        style={{
                            position: "absolute",
                            top: "10%",
                            right: "0%"
                        }}
                    >
                        <CloseIcon />
                    </Button>
                </Box>
            </Paper>
            {props.isActive ? (
                <>
                    <ChatBox friend_id={props.friend.id} />
                    <ChatForm friend={props.friend} />
                </>
            ) : null}
        </>
    );
}

export default ChatContainer;
