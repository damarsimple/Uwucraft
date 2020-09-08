import {
    createStyles,
    Grid,
    makeStyles,
    Paper,
    Theme,
    Typography
} from "@material-ui/core";
import React, { useContext, useEffect, useState } from "react";
import { chatquery } from "../../api/graphql";
import EchoContext from "../../context/EchoContext";
import UserContext from "../../context/UserContext";
import { ChatMessage } from "../../type/type";

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
interface ChatBoxData {
    friend_id: number;
}
function ChatBox(props: ChatBoxData) {
    const classes = useStyles();
    const { session } = useContext(UserContext);
    const [chats, setChats] = useState<Array<ChatMessage>>([]);
    const { EchoClient } = useContext(EchoContext);
    useEffect(() => {
        const ChatsData = async () => {
            const data = await chatquery(
                session.session?.id as number,
                props.friend_id as number
            );
            setChats(chats.concat(data.data.chatquery));
        };
        ChatsData();
    }, []);
    const arr = [props.friend_id as number, session.session?.id as number];
    arr.sort((a, b) => a - b);
    EchoClient.channel(`chatmessage${arr.toString()}`).listen(
        "ChatSendEvent",
        data => {
            const obj = chats.concat(data.data);
            setChats(obj);
            console.log(chats);
        }
    );
    return (
        <>
            <Paper square className={classes.chatContainer}>
                <Grid
                    container
                    direction="column"
                    justify="flex-start"
                    alignItems="stretch"
                    spacing={2}
                >
                    {chats.length != 0
                        ? chats.map((chat, index) => {
                              return chat.from.username ==
                                  session.session?.username ? (
                                  <Grid item key={index} xs={12} container>
                                      <Grid item xs={3} />
                                      <Grid item xs={9}>
                                          <Paper
                                              style={{
                                                  backgroundColor: "#fffafa"
                                              }}
                                          >
                                              <Typography
                                                  variant="subtitle1"
                                                  color="initial"
                                              >
                                                  {chat.message}
                                              </Typography>
                                          </Paper>
                                      </Grid>
                                  </Grid>
                              ) : (
                                  <Grid item key={index} xs={12} container>
                                      <Grid item xs={9}>
                                          <Paper
                                              style={{
                                                  backgroundColor: "#FFFFF0"
                                              }}
                                          >
                                              <Typography
                                                  variant="subtitle1"
                                                  color="initial"
                                              >
                                                  {chat.message}
                                              </Typography>
                                          </Paper>
                                      </Grid>
                                      <Grid item xs={3} />
                                  </Grid>
                              );
                          })
                        : null}
                </Grid>
            </Paper>
        </>
    );
}

export default ChatBox;
