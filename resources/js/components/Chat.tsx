import {
    createStyles,
    makeStyles,
    Paper,
    Theme,
    Typography,
    List,
    ListItemAvatar,
    ListItem,
    Avatar,
    ListItemText,
    Slide,
    Grid,
    Box,
    Button
} from "@material-ui/core";
import { Formik, Field, Form, FormikHelpers } from "formik";
import SendIcon from "@material-ui/icons/Send";
import CloseIcon from "@material-ui/icons/Close";
import React, { useState, useContext, useEffect } from "react";
import UserContext from "../context/UserContext";
import { ChatMessage, Friend } from "../type/type";
import { chatquery, sendMessage } from "../api/graphql";

import ChatBox from "./Chat/ChatBox";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        container: {
            position: "fixed",
            bottom: 0,
            right: 20,
            display: "flex",
            zIndex: 1000
        },
        header: {
            maxHeight: 50
        },
        chatContainer: {
            height: 450,
            maxHeight: 450,
            overflow: "scroll",
            overflowX: "hidden"
        }
    })
);
interface ActiveFriend extends Friend {
    isActive?: boolean;
    chats?: ChatMessage[];
}

interface ChatBoxInput {
    message: any;
}

const Chat = () => {
    const [collapse, setCollapse] = useState<boolean>(false);
    const [activeChat, setActiveChat] = useState<Array<ActiveFriend>>([]);
    const classes = useStyles();
    const { session } = useContext(UserContext);

    useEffect(() => {
        activeChat.map((chat, index) => {});
    }, [activeChat]);
    const addActiveFriend = (friend: Friend) => {
        //limit active chat window to 4
        if (activeChat.length >= 4) {
            removeActiveFriend(0);
            return;
        }
        //dont let add friend that already active
        for (let i = 0; i < activeChat.length; i++) {
            if (activeChat[i].friend.username == friend.friend.username) {
                return;
            }
        }
        chatquery(
            session.session?.id as number,
            friend.friend?.id as number
        ).then(data => {
            const obj = Object.assign(
                { isActive: true, chats: data.data.chatquery },
                friend
            );
            const obj2 = activeChat.concat(obj);
            setActiveChat(obj2);
        });
    };
    const setActiveFriendTab = (index: number) => {
        const output: ActiveFriend[] = [];
        for (let i = 0; i < activeChat.length; i++) {
            if (i == index) {
                const base = activeChat;
                base[i].isActive = !base[i].isActive;
                output.push(base[i]);
            } else {
                output.push(activeChat[i]);
            }
        }
        setActiveChat(output);
    };
    const removeActiveFriend = (index: number) => {
        const output: ActiveFriend[] = [];
        for (let i = 0; i < activeChat.length; i++) {
            if (i != index) {
                output.push(activeChat[i]);
            }
        }
        setActiveChat(output);
    };
    const handleSubmit = (to_id: number, message: string) => {
        sendMessage(to_id, message);
    };
    return (
        <>
            <Grid
                container
                direction="row"
                justify="flex-end"
                alignItems="flex-end"
                className={classes.container}
                spacing={2}
            >
                {activeChat.map((friend, index) => {
                    return (
                        <Grid item xs={2} key={index}>
                            <Paper
                                square
                                className={classes.header}
                                elevation={3}
                            >
                                <Box padding={1} position="relative">
                                    <Typography
                                        align="center"
                                        variant="h6"
                                        color="initial"
                                        onClick={() =>
                                            setActiveFriendTab(index)
                                        }
                                    >
                                        {friend.friend.username}
                                    </Typography>
                                    <Button
                                        onClick={() =>
                                            removeActiveFriend(index)
                                        }
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
                            {friend.isActive ? (
                                <>
                                    <ChatBox friend_id={friend.friend.id} />
                                    <Paper square elevation={3}>
                                        <Formik
                                            initialValues={{
                                                message: ""
                                            }}
                                            onSubmit={(
                                                values: ChatBoxInput,
                                                {
                                                    setSubmitting,
                                                    resetForm
                                                }: FormikHelpers<ChatBoxInput>
                                            ) => {
                                                sendMessage(
                                                    friend.friend.id,
                                                    values.message
                                                );
                                                setSubmitting(false);
                                                //@ts-ignore
                                                resetForm({ message: "" });
                                            }}
                                        >
                                            <Form>
                                                <Grid
                                                    container
                                                    justify="center"
                                                    alignItems="center"
                                                    spacing={1}
                                                >
                                                    <Grid item xs={9}>
                                                        <Field
                                                            id="message"
                                                            name="message"
                                                            placeholder="John"
                                                        />
                                                    </Grid>
                                                    <Grid item xs={3}>
                                                        <Button type="submit">
                                                            <SendIcon />
                                                        </Button>
                                                    </Grid>
                                                </Grid>
                                            </Form>
                                        </Formik>
                                    </Paper>
                                </>
                            ) : null}
                        </Grid>
                    );
                })}
                <Grid item xs={2}>
                    <Paper
                        elevation={3}
                        square
                        onClick={() => {
                            setCollapse(!collapse);
                        }}
                    >
                        <Box padding={1}>
                            <Typography
                                align="center"
                                variant="h6"
                                color="initial"
                            >
                                CHAT
                            </Typography>
                        </Box>
                    </Paper>
                    <Paper square>
                        <Slide
                            direction="up"
                            in={collapse}
                            mountOnEnter
                            unmountOnExit
                        >
                            <List disablePadding>
                                {Array.isArray(session.session?.friends)
                                    ? session.session?.friends.map(
                                          (friend, index) => {
                                              return (
                                                  <ListItem
                                                      button
                                                      key={index}
                                                      onClick={() => {
                                                          addActiveFriend(
                                                              friend
                                                          );
                                                      }}
                                                  >
                                                      <ListItemAvatar>
                                                          <Avatar
                                                              alt={friend.friend.username
                                                                  .charAt(0)
                                                                  .toUpperCase()}
                                                              src={`/static/images/avatar/0.jpg`}
                                                          />
                                                      </ListItemAvatar>
                                                      <ListItemText
                                                          primary={
                                                              friend.friend
                                                                  .username
                                                          }
                                                      />
                                                  </ListItem>
                                              );
                                          }
                                      )
                                    : null}
                            </List>
                        </Slide>
                    </Paper>
                </Grid>
            </Grid>
        </>
    );
};

export default Chat;
