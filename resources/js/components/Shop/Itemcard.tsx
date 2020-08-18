import React, { useState } from "react";
import { makeStyles } from "@material-ui/core/styles";
import Card from "@material-ui/core/Card";
import CardActionArea from "@material-ui/core/CardActionArea";
import CardActions from "@material-ui/core/CardActions";
import CardContent from "@material-ui/core/CardContent";
import CardMedia from "@material-ui/core/CardMedia";
import Button from "@material-ui/core/Button";
import Typography from "@material-ui/core/Typography";

import Collapse from "@material-ui/core/Collapse";
const useStyles = makeStyles({
    media: {
        height: 250
    }
});
export default props => {
    const classes = useStyles();
    const [expanded, setExpanded] = useState(false);
    const item = props.item;
    return (
        <Card>
            <CardActionArea>
                <CardMedia
                    className={classes.media}
                    image={"/api/image/item/" + item.minecraft_item_shorthand}
                    title="Contemplative Reptile"
                />
            </CardActionArea>
            <CardContent>
                <Typography gutterBottom variant="h5" component="h2">
                    {item.item_name}
                </Typography>
                <Typography gutterBottom variant="h5" component="h3">
                    ${item.price}
                </Typography>
                <Typography variant="body2" color="textSecondary" component="p">
                    Seller : {item.author.username}
                </Typography>
            </CardContent>
            <Collapse in={expanded} timeout="auto" unmountOnExit>
                <CardContent>
                    <Typography paragraph>{item.description}</Typography>
                </CardContent>
            </Collapse>
            <CardActions>
                <Button
                    onClick={() => {
                        setExpanded(!expanded);
                    }}
                    variant="contained"
                    color="primary"
                    size="small"
                >
                    Description
                </Button>
                <Button variant="contained" color="primary" size="small">
                    ADD TO CART
                </Button>
            </CardActions>
        </Card>
    );
};
