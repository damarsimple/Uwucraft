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
    Box
} from "@material-ui/core";

import React, { useState, useContext, useEffect } from "react";
import UserContext from "../context/UserContext";
import { Friend, User } from "../type/type";

import ChatContainer from "./Chat/ChatContainer";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        container: {
            position: "fixed",
            bottom: 0,
            right: 20,
            display: "flex",
            zIndex: 1000
        }
    })
);
interface ActiveFriend extends Friend {
    isActive: boolean;
    friend: User;
}

const Chat = () => {
    const [collapse, setCollapse] = useState<boolean>(false);
    const [activeChat, setActiveChat] = useState<Array<ActiveFriend>>([]);
    const classes = useStyles();
    const { session } = useContext(UserContext);

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
        const obj = Object.assign({ isActive: true }, friend);
        const obj2 = activeChat.concat(obj);
        setActiveChat(obj2);
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
                            <ChatContainer
                                friend={friend.friend}
                                index={index}
                                isActive={friend.isActive}
                                removeActiveFriend={removeActiveFriend}
                                setActiveFriendTab={setActiveFriendTab}
                            />
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
                            <List
                                disablePadding
                                style={{ height: 500, overflow: "auto" }}
                            >
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
