import React, { useState } from "react";
import {
    Typography,
    Divider,
    List,
    ListItem,
    Grid,
    CardHeader
} from "@material-ui/core";
import SentimentVeryDissatisfiedIcon from "@material-ui/icons/SentimentVeryDissatisfied";
import { systemstatus } from "../../api/graphql";
import { SPIGOTStatus, MYSQLStatus, REDISStatus } from "../../type/type";
import SentimentVerySatisfiedIcon from "@material-ui/icons/SentimentVerySatisfied";
function SystemActivity() {
    const [redis, setRedis] = useState<REDISStatus>({
        ping: 0,
        online: false,
        exception: "",
        updated_at: ""
    });
    const [mysql, setMysql] = useState({
        ping: 0,
        online: false,
        exception: "",
        updated_at: ""
    });
    const [spigot, setSpigot] = useState({
        ping: 0,
        online: false,
        exception: "",
        updated_at: ""
    });
    systemstatus().then(res => {
        setRedis(res.data.REDISStatus);
        setMysql(res.data.MYSQLStatus);
        setSpigot(res.data.SPIGOTStatus);
        console.log(res.data);
    });
    return (
        <>
            <Typography
                component="h2"
                variant="h6"
                color="primary"
                gutterBottom
            >
                System Activity
            </Typography>
            <Divider />
            <List>
                <ListItem>
                    <Grid container alignItems="center" spacing={8}>
                        <Grid item>
                            <CardHeader
                                avatar={
                                    redis.online ? (
                                        <SentimentVerySatisfiedIcon />
                                    ) : (
                                        <SentimentVerySatisfiedIcon />
                                    )
                                }
                                title={"REDIS"}
                                subheader="September 14, 2016"
                            />
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="p">
                                {Math.round(redis.ping / 1000) * 1000}ms
                            </Typography>
                        </Grid>
                        <Grid item>{redis.online ? "ONLINE" : "OFFLINE"}</Grid>
                    </Grid>
                </ListItem>
                <Divider />
                <ListItem>
                    <Grid container alignItems="center" spacing={8}>
                        <Grid item>
                            <CardHeader
                                avatar={
                                    mysql.online ? (
                                        <SentimentVerySatisfiedIcon />
                                    ) : (
                                        <SentimentVerySatisfiedIcon />
                                    )
                                }
                                title="MYSQL"
                                subheader="September 14, 2016"
                            />
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="p">
                                {Math.round(mysql.ping / 1000) * 1000}ms
                            </Typography>
                        </Grid>
                        <Grid item>{mysql.online ? "ONLINE" : "OFFLINE"}</Grid>
                    </Grid>
                </ListItem>
                <Divider />
                <ListItem>
                    <Grid container alignItems="center" spacing={8}>
                        <Grid item>
                            <CardHeader
                                avatar={
                                    spigot.online ? (
                                        <SentimentVerySatisfiedIcon />
                                    ) : (
                                        <SentimentVerySatisfiedIcon />
                                    )
                                }
                                title="SPIGOT"
                                subheader="September 14, 2016"
                            />
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="p">
                                {Math.round(spigot.ping / 1000) * 1000}ms
                            </Typography>
                        </Grid>
                        <Grid item>{spigot.online ? "ONLINE" : "OFFLINE"}</Grid>
                    </Grid>
                </ListItem>
                <Divider />
            </List>
        </>
    );
}

export default SystemActivity;
