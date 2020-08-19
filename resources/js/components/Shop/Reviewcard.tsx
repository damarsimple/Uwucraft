import React from "react";
import Card from "@material-ui/core/Card";
import CardHeader from "@material-ui/core/CardHeader";
import CardContent from "@material-ui/core/CardContent";
import Avatar from "@material-ui/core/Avatar";
import Typography from "@material-ui/core/Typography";
import { Box } from "@material-ui/core";
import StarIcon from "@material-ui/icons/Star";

export default () => {
    return (
        <Box m={1}>
            <Card>
                <CardHeader
                    avatar={<Avatar aria-label="recipe">R</Avatar>}
                    title="Shrimp and Chorizo Paella"
                    subheader="September 14, 2016"
                />
                <CardContent>
                    <StarIcon />
                    <StarIcon />
                    <StarIcon />
                    <StarIcon />
                    <Typography
                        variant="body2"
                        color="textSecondary"
                        component="p"
                    >
                        This impressive paella is a perfect party dish and a fun
                        meal to cook together with your guests. Add 1 cup of
                        frozen peas along with the mussels, if you like.
                    </Typography>
                </CardContent>
            </Card>
        </Box>
    );
};
