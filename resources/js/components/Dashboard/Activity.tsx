import React from "react";
import {
    Typography,
    Divider,
    Grid,
    ButtonBase,
    Avatar,
    List,
    ListItem
} from "@material-ui/core";

function Activity() {
    return (
        <>
            <Typography
                component="h2"
                variant="h6"
                color="primary"
                gutterBottom
            >
                Activity
            </Typography>
            <Divider />
            <List>
                <ListItem>
                    <Grid container spacing={2} alignItems="center">
                        <Grid item>
                            <ButtonBase>
                                <Avatar
                                    alt="Travis Howard"
                                    src="/static/images/avatar/2.jpg"
                                />
                            </ButtonBase>
                        </Grid>
                        <Grid item>
                            <Typography variant="body1">
                                Username has added requested to add this.item to
                                shop
                            </Typography>
                        </Grid>
                    </Grid>
                </ListItem>
                <Divider />
                <ListItem>
                    <Grid container spacing={2} alignItems="center">
                        <Grid item>
                            <ButtonBase>
                                <Avatar
                                    alt="Travis Howard"
                                    src="/static/images/avatar/2.jpg"
                                />
                            </ButtonBase>
                        </Grid>
                        <Grid item>
                            <Typography variant="body1">
                                Username has added requested to add this.item to
                                shop
                            </Typography>
                        </Grid>
                    </Grid>
                </ListItem>
                <Divider />
                <ListItem>
                    <Grid container spacing={2} alignItems="center">
                        <Grid item>
                            <ButtonBase>
                                <Avatar
                                    alt="Travis Howard"
                                    src="/static/images/avatar/2.jpg"
                                />
                            </ButtonBase>
                        </Grid>
                        <Grid item>
                            <Typography variant="body1">
                                Username has added requested to add this.item to
                                shop
                            </Typography>
                        </Grid>
                    </Grid>
                </ListItem>
                <Divider />
            </List>
        </>
    );
}

export default Activity;
