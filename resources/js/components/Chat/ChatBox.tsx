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
import ScrollToBottom from "react-scroll-to-bottom";
const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        chatContainer: {
            height: 400
        },
        chatBubbleRight: {
            backgroundColor: "#FFFFF0",
            paddingTop: "10px",
            marginTop: "15px",
            paddingBottom: "10px"
        },
        chatBubbleLeft: {
            backgroundColor: "#fffafa",
            paddingTop: "10px",
            marginTop: "15px",
            paddingBottom: "10px"
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
    const sort = [props.friend_id as number, session.session?.id as number];
    sort.sort((a, b) => a - b);
    EchoClient.channel(`chatmessage${sort.toString()}`).listen(
        "ChatSendEvent",
        data => {
            const obj = chats.concat(data.data);
            setChats(obj);
        }
    );
    return (
        <Paper square elevation={3}>
            <ScrollToBottom className={classes.chatContainer}>
                <Grid
                    container
                    direction="column"
                    justify="flex-start"
                    alignItems="stretch"
                >
                    {chats.length != 0
                        ? chats.map((chat, index) => {
                              return chat.from.username ==
                                  session.session?.username ? (
                                  <Grid item key={index} xs={12} container>
                                      <Grid item xs={3} />
                                      <Grid item xs={9}>
                                          <Paper
                                              className={
                                                  classes.chatBubbleRight
                                              }
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
                                              className={classes.chatBubbleLeft}
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
            </ScrollToBottom>
        </Paper>
    );
}

export default ChatBox;
