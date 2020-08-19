import React from "react";
import SwipeableViews from "react-swipeable-views";
import AppBar from "@material-ui/core/AppBar";
import Tabs from "@material-ui/core/Tabs";
import Tab from "@material-ui/core/Tab";
import Itemreview from "./Itemreview";
import { Box } from "@material-ui/core";

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
}
export default (props: Description) => {
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
            <SwipeableViews index={value} onChangeIndex={handleChangeIndex}>
                <TabPanel value={value} index={0}>
                    <Box p={5}>{props.description}</Box>
                </TabPanel>
                <TabPanel value={value} index={1}>
                    <Box p={5}>
                        <Itemreview />
                    </Box>
                </TabPanel>
                <TabPanel value={value} index={2}>
                    <Box p={5}>44</Box>
                </TabPanel>
            </SwipeableViews>
        </>
    );
};
