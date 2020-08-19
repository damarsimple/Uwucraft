import React from "react";
import SwipeableViews from "react-swipeable-views";
import AppBar from "@material-ui/core/AppBar";
import Tabs from "@material-ui/core/Tabs";
import Tab from "@material-ui/core/Tab";
import Itemreview from "./Itemreview";

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

export default () => {
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
                    <div>
                        Lorem ipsum dolor sit amet consectetur, adipisicing
                        elit. Corrupti adipisci velit aliquam praesentium
                        explicabo nobis voluptatum alias, deleniti, cupiditate
                        quae expedita, autem unde non tenetur id quasi ratione
                        eos ad sunt neque. Ipsum magni quam quo? Dolorum
                        laudantium nisi expedita eligendi vero iusto eaque
                        commodi incidunt ullam sed delectus aut, quas quis
                        officia quaerat optio consectetur earum consequatur fuga
                        soluta sit beatae! Quis incidunt ipsa enim, commodi
                        officiis veritatis maiores impedit explicabo nihil
                        iusto. Reprehenderit dolores, quia tempore in vero
                        itaque corporis voluptate atque incidunt blanditiis
                        perferendis illo provident amet! Optio vero omnis
                        deserunt commodi fuga accusantium, facilis tempora
                        consectetur!
                    </div>
                </TabPanel>
                <TabPanel value={value} index={1}>
                    <Itemreview />
                </TabPanel>
                <TabPanel value={value} index={2}>
                    <div>44</div>
                </TabPanel>
            </SwipeableViews>
        </>
    );
};
