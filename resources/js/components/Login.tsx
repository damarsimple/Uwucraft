import React, { useState, useContext } from "react";
import Avatar from "@material-ui/core/Avatar";
import Button from "@material-ui/core/Button";
import CssBaseline from "@material-ui/core/CssBaseline";
import TextField from "@material-ui/core/TextField";
import FormControlLabel from "@material-ui/core/FormControlLabel";
import Checkbox from "@material-ui/core/Checkbox";
import Grid from "@material-ui/core/Grid";
import LockOutlinedIcon from "@material-ui/icons/LockOutlined";
import Typography from "@material-ui/core/Typography";
import { makeStyles } from "@material-ui/core/styles";
import Container from "@material-ui/core/Container";
import { Link } from "react-router-dom";
import Alert from "@material-ui/lab/Alert";
import { login } from "../api/graphql";
import { GET_ME } from "../api/graphql";
import { Collapse } from "@material-ui/core";
import UserContext from "../context/UserContext";
const useStyles = makeStyles(theme => ({
    container: {
        minHeight: "85vh"
    },
    paper: {
        marginTop: theme.spacing(8),
        display: "flex",
        flexDirection: "column",
        alignItems: "center"
    },
    avatar: {
        margin: theme.spacing(1),
        backgroundColor: theme.palette.secondary.main
    },
    form: {
        width: "100%", // Fix IE 11 issue.
        marginTop: theme.spacing(1)
    },
    submit: {
        margin: theme.spacing(3, 0, 2)
    }
}));

export default function Login() {
    const { setSession } = useContext(UserContext);
    const classes = useStyles();
    const [username, setUsername] = useState<string>("");
    const [password, setPassword] = useState<string>("");
    const [status, setStatus] = useState<boolean>(false);
    const [message, setMessage] = useState<string>("");
    const handleClick = () => {
        login({ username: username, password: password }).then(r => {
            r.data.login.success
                ? (setSession!({
                      isLogged: true,
                      session: r.data.login.user
                  }),
                  localStorage.removeItem("token"),
                  localStorage.setItem("token", r.data.login.token),
                  window.location.replace("/home"))
                : (setMessage(r.data.login.exception), setStatus(true));
        });
    };
    return (
        <Grid
            container
            spacing={0}
            direction="column"
            alignItems="center"
            justify="center"
            className={classes.container}
        >
            <Grid item xs={3}>
                <Container component="main" maxWidth="xs">
                    <CssBaseline />
                    <div className={classes.paper}>
                        <Avatar className={classes.avatar}>
                            <LockOutlinedIcon />
                        </Avatar>
                        <Typography component="h1" variant="h5">
                            Login
                        </Typography>
                        <Collapse in={status}>
                            <Alert severity="warning">
                                Failed to login reason : {message}
                            </Alert>
                        </Collapse>

                        <TextField
                            margin="normal"
                            required
                            fullWidth
                            label="Username"
                            name="username"
                            autoComplete="username"
                            autoFocus
                            value={username}
                            onChange={event => {
                                setUsername(event.target.value);
                            }}
                        />
                        <TextField
                            margin="normal"
                            required
                            fullWidth
                            name="password"
                            label="Password"
                            type="password"
                            autoComplete="current-password"
                            value={password}
                            onChange={event => {
                                setPassword(event.target.value);
                            }}
                        />
                        <FormControlLabel
                            control={
                                <Checkbox value="remember" color="primary" />
                            }
                            label="Remember me"
                        />
                        <Button
                            fullWidth
                            variant="contained"
                            color="primary"
                            onClick={handleClick}
                            className={classes.submit}
                        >
                            Sign In
                        </Button>
                        <Grid container>
                            <Grid item xs>
                                <Link to="/forgot">Forgot password?</Link>
                            </Grid>
                            <Grid item>
                                <Link to="/register">
                                    {"Don't have an account? Sign Up"}
                                </Link>
                            </Grid>
                        </Grid>
                    </div>
                </Container>
            </Grid>
        </Grid>
    );
}
