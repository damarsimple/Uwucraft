import React from "react";
import SwipeableViews from "react-swipeable-views";
import { Paper, makeStyles } from "@material-ui/core";
import AppBar from "@material-ui/core/AppBar";
import Tabs from "@material-ui/core/Tabs";
import Tab from "@material-ui/core/Tab";
import ItemReview from "./ItemReview";
import { Box } from "@material-ui/core";
import { Review } from "../../type/type";

function TabPanel(props) {
    return (
        <div
            role="tabpanel"
            hidden={props.value !== props.index}
            id={`full-width-tabpanel-${props.index}`}
            aria-labelledby={`full-width-tab-${props.index}`}
        >
            {props.children}
        </div>
    );
}

interface Description {
    description: string;
    review?: Array<Review>;
}
const useStyles = makeStyles({
    container: {
        height: 1000,
        overflow: "scroll",
        overflowX: "hidden"
    }
});
const ItemDescription = (props: Description) => {
    const classes = useStyles();
    const [value, setValue] = React.useState(0);

    const handleChange = (event: React.ChangeEvent<{}>, newValue: number) => {
        setValue(newValue);
    };

    const handleChangeIndex = (index: number) => {
        setValue(index);
    };

    return (
        <>
            <AppBar position="static" color="default">
                <Tabs
                    value={value}
                    onChange={handleChange}
                    indicatorColor="primary"
                    textColor="primary"
                    variant="fullWidth"
                    aria-label="full width tabs example"
                >
                    <Tab label="Description" />
                    <Tab label="Review" />
                    <Tab label="Discussion" />
                </Tabs>
            </AppBar>
            <Paper className={classes.container}>
                <SwipeableViews index={value} onChangeIndex={handleChangeIndex}>
                    <TabPanel value={value} index={0}>
                        <Box p={5}>{props.description}</Box>
                    </TabPanel>
                    <TabPanel value={value} index={1}>
                        <Box p={5}>
                            <ItemReview data={props.review} />
                        </Box>
                    </TabPanel>
                    <TabPanel value={value} index={2}>
                        <Box p={5}>44</Box>
                    </TabPanel>
                </SwipeableViews>
            </Paper>
        </>
    );
};
export default ItemDescription;
