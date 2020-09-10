import React from "react";
import {
    Typography,
    Divider,
    List,
    ListItem,
    Grid,
    CardHeader
} from "@material-ui/core";
import { GET_SYSTEMSTATUS } from "../../api/graphql";
import { useQuery } from "@apollo/client";
import { SPIGOTStatus, MYSQLStatus, REDISStatus } from "../../type/type";
import SentimentVerySatisfiedIcon from "@material-ui/icons/SentimentVerySatisfied";
function SystemActivity() {
    const { loading, data, error } = useQuery(GET_SYSTEMSTATUS);
    if (loading) return <h1>Loading</h1>;
    if (error) return <h1>{`Error! ${error.message}`}</h1>;
    const redis: REDISStatus = data.REDISStatus;
    const mysql: MYSQLStatus = data.MYSQLStatus;
    const spigot: SPIGOTStatus = data.SPIGOTStatus;
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
