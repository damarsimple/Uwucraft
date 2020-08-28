import React from "react";
import { BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import Theme from "./components/Ui/Theme";
import Box from "@material-ui/core/Box";
import Shop from "./components/Shop/Shop";
import Navbar from "./components/ui/Navbar";
import Home from "./components/Home/Home";
import Register from "./components/Register";
import Login from "./components/Login";
import Itemlookup from "./components/Shop/Itemlookup";
import { ThemeProvider } from "@material-ui/core";
import Dashboard from "./components/Dashboard/Dashboard";
import Sidebar from "./components/Dashboard/Sidebar";
import Transaction from "./components/Dashboard/Transaction";
import Players from "./components/Dashboard/Players";
import Reports from "./components/Dashboard/Reports";
import Integrations from "./components/Dashboard/Integrations";
export default class App extends React.Component {
    render() {
        return (
            <>
                <Router>
                    <ThemeProvider theme={Theme}>
                        <Navbar />
                        <Box mt={10}>
                            <Switch>
                                <Route path="/home" component={Home} />

                                <Route path="/login" component={Login} />
                                <Route path="/register" component={Register} />
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
                                <Route
                                    path="/dashboard"
                                    render={({ match: { url } }) => (
                                        <div style={{ display: "flex" }}>
                                            <Sidebar />
                                            <Route
                                                path={`${url}/`}
                                                component={Dashboard}
                                                exact
                                            />
                                            <Route
                                                path={`${url}/transaction`}
                                                component={Transaction}
                                                exact
                                            />
                                            <Route
                                                path={`${url}/users`}
                                                component={Players}
                                            />
                                            <Route
                                                path={`${url}/reports`}
                                                component={Reports}
                                            />
                                            <Route
                                                path={`${url}/system`}
                                                component={Integrations}
                                            />
                                        </div>
                                    )}
                                />
                            </Switch>
                        </Box>
                    </ThemeProvider>
                </Router>
            </>
        );
    }
}
