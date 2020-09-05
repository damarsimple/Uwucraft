import React from "react";
import {
    AppBar,
    Tabs,
    Tab,
    Box,
    Typography,
    makeStyles,
    Theme,
    Divider
} from "@material-ui/core";
import SimpleLineCharts from "./SimpleLineCharts";
interface TabPanelProps {
    children?: React.ReactNode;
    index: any;
    value: any;
}

function TabPanel(props: TabPanelProps) {
    const { children, value, index, ...other } = props;

    return (
        <div
            role="tabpanel"
            hidden={value !== index}
            id={`simple-tabpanel-${index}`}
            aria-labelledby={`simple-tab-${index}`}
            {...other}
        >
            {value === index && (
                <Box p={3}>
                    <Typography>{children}</Typography>
                </Box>
            )}
        </div>
    );
}

function a11yProps(index: any) {
    return {
        id: `simple-tab-${index}`,
        "aria-controls": `simple-tabpanel-${index}`
    };
}

function Chart() {
    const [value, setValue] = React.useState(0);

    const handleChange = (event: React.ChangeEvent<{}>, newValue: number) => {
        setValue(newValue);
    };
    return (
        <>
            <AppBar position="static" color="transparent">
                <Tabs
                    value={value}
                    onChange={handleChange}
                    aria-label="simple tabs example"
                >
                    <Tab label="Store" {...a11yProps(0)} />
                    <Tab label="Player" {...a11yProps(1)} />
                    <Tab label="System Usage" {...a11yProps(2)} />
                </Tabs>
            </AppBar>
            <Divider />
            <TabPanel value={value} index={0}>
                <SimpleLineCharts />
            </TabPanel>
            <TabPanel value={value} index={1}>
                <SimpleLineCharts />
            </TabPanel>
            <TabPanel value={value} index={2}>
                <SimpleLineCharts />
            </TabPanel>
        </>
    );
}

export default Chart;
