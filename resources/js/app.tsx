import React, { useState, useMemo, useEffect } from "react";
import { BrowserRouter as Router, Switch, Route } from "react-router-dom";
import Theme from "./components/Ui/Theme";
import Box from "@material-ui/core/Box";
import Shop from "./components/Shop/Shop";
import Navbar from "./components/Ui/Navbar";
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
import UserContext from "./context/UserContext";
import { IUserContext, User, Usercart } from "./type/type";
import { me } from "./api/graphql";
import Cart from "./components/Shop/Cart";
import Chat from "./components/Chat";
import EchoInstance from "./components/Echo";
import EchoContext from "./context/EchoContext";
const App = () => {
    const [session, setSession] = useState<IUserContext>({ isLogged: false });
    const [carts, setCarts] = useState<Array<Usercart | null>>([]);
    const destroySession = () => {
        setSession({ isLogged: false });
        localStorage.removeItem("token");
    };
    useEffect(() => {
        EchoInstance.channel("GlobalNotifications").listen(
            "GlobalNotifications",
            data => {
                console.log(data);
            }
        );
        const setData = async () => {
            const data = await me();
            if (data.data.me != null && localStorage.getItem("token")) {
                setSession({ isLogged: true, session: data.data.me as User });
                return;
            }
        };
        setData();
    }, []);
    const sessionData = useMemo(
        () => ({ session, carts, setCarts, setSession, destroySession }),
        [session, carts, setSession, setCarts, destroySession]
    );
    const EchoClient = EchoInstance;
    const echoClient = useMemo(() => ({ EchoClient }), [EchoClient]);
    return (
        <>
            <Router>
                <Switch>
                    <UserContext.Provider value={sessionData}>
                        <EchoContext.Provider value={echoClient}>
                            <ThemeProvider theme={Theme}>
                                <Navbar />
                                <Chat />
                                <Box mt={10}>
                                    <Route path="/home" component={Home} />
                                    <Route path="/login" component={Login} />
                                    <Route
                                        path="/register"
                                        component={Register}
                                    />
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
                                                <Route
                                                    path={`${url}/cart`}
                                                    component={Cart}
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
                                </Box>
                            </ThemeProvider>
                        </EchoContext.Provider>
                    </UserContext.Provider>
                </Switch>
            </Router>
        </>
    );
};
export default App;
