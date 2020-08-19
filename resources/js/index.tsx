import React from "react";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Box from "@material-ui/core/Box";
import Shop from "./components/Shop/Shop";
import Navbar from "./components/ui/Navbar";
import Home from "./components/Home/Home";
import Itemlookup from "./components/Shop/Itemlookup";
export default class App extends React.Component {
    render() {
        return (
            <>
                <Router>
                    <Navbar />
                    <Box mt={10}>
                        <Switch>
                            <Route path="/home">
                                <Home />
                            </Route>
                            <Route
                                path="/shop"
                                render={({ match: { url } }) => (
                                    <>
                                        <Route
                                            path={`${url}/`}
                                            component={Shop}
                                            exact
                                        />
                                        <Route
                                            path={`${url}/item/:itemid`}
                                            component={Itemlookup}
                                        />
                                    </>
                                )}
                            />
                        </Switch>
                    </Box>
                </Router>
            </>
        );
    }
}
