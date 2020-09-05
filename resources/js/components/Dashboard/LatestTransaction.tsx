import React from "react";
import {
    Typography,
    Divider,
    List,
    ListItem,
    ListItemIcon,
    ListItemText,
    Avatar,
    CardHeader,
    Grid
} from "@material-ui/core";
import FiberManualRecordIcon from "@material-ui/icons/FiberManualRecord";
function LatestTransaction() {
    return (
        <>
            <Typography
                component="h2"
                variant="h6"
                color="primary"
                gutterBottom
            >
                Latest Transcations
            </Typography>
            <Divider />
            <List>
                <ListItem>
                    <Grid container alignItems="center" spacing={2}>
                        <Grid item>
                            <CardHeader
                                avatar={
                                    <Avatar
                                        alt="Travis Howard"
                                        src="/static/images/avatar/2.jpg"
                                    />
                                }
                                title="username"
                                subheader="September 14, 2016"
                            />
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="p">
                                $ 10000
                            </Typography>
                        </Grid>
                        <Grid item>
                            <FiberManualRecordIcon fill="red" color="primary" />
                            confirmed
                        </Grid>
                    </Grid>
                </ListItem>
                <Divider />
                <ListItem>
                    <Grid container alignItems="center" spacing={2}>
                        <Grid item>
                            <CardHeader
                                avatar={
                                    <Avatar
                                        alt="Travis Howard"
                                        src="/static/images/avatar/2.jpg"
                                    />
                                }
                                title="username"
                                subheader="September 14, 2016"
                            />
                        </Grid>
                        <Grid item>
                            <Typography variant="h6" component="p">
                                $ 10000
                            </Typography>
                        </Grid>
                        <Grid item>
                            <FiberManualRecordIcon fill="red" color="primary" />
                            confirmed
                        </Grid>
                    </Grid>
                </ListItem>
                <Divider />
            </List>
        </>
    );
}

export default LatestTransaction;
