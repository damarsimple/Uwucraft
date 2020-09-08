import React, { useContext, useEffect } from "react";
import {
    createStyles,
    makeStyles,
    Theme,
    fade
} from "@material-ui/core/styles";
import AppBar from "@material-ui/core/AppBar";
import Toolbar from "@material-ui/core/Toolbar";
import Button from "@material-ui/core/Button";
import IconButton from "@material-ui/core/IconButton";
import SearchIcon from "@material-ui/icons/Search";
import TextField from "@material-ui/core/TextField";
import {
    Badge,
    Grid,
    InputBase,
    List,
    ListItem,
    Divider,
    Box,
    ListItemIcon,
    ListItemText,
    ListItemSecondaryAction,
    Typography
} from "@material-ui/core";
import { Link as Go } from "react-router-dom";
import UserContext from "../../context/UserContext";
import { meCart } from "../../api/graphql";
import ShoppingCartIcon from "@material-ui/icons/ShoppingCart";
import Tippy from "@tippyjs/react";
import "tippy.js/themes/translucent.css";
import Image from "material-ui-image";
import Autocomplete from "@material-ui/lab/Autocomplete";

const useStyles = makeStyles((theme: Theme) =>
    createStyles({
        root: {
            flexGrow: 1
        },
        menuButton: {
            marginRight: theme.spacing(2)
        },
        title: {
            flexGrow: 1
        },
        inputInput: {
            padding: theme.spacing(1, 1, 1, 0),
            // vertical padding + font size from searchIcon
            paddingLeft: `calc(1em + ${theme.spacing(4)}px)`,
            transition: theme.transitions.create("width"),
            width: "100%",
            [theme.breakpoints.up("md")]: {
                width: "20ch"
            }
        },
        inputRoot: {
            color: "inherit"
        },
        search: {
            position: "relative",
            borderRadius: theme.shape.borderRadius,
            backgroundColor: fade(theme.palette.common.white, 0.15),
            "&:hover": {
                backgroundColor: fade(theme.palette.common.white, 0.25)
            },
            marginRight: theme.spacing(2),
            marginLeft: 0,
            width: "100%",
            [theme.breakpoints.up("sm")]: {
                marginLeft: theme.spacing(3),
                width: "auto"
            }
        },
        searchIcon: {
            padding: theme.spacing(0, 2),
            height: "100%",
            position: "absolute",
            pointerEvents: "none",
            display: "flex",
            alignItems: "center",
            justifyContent: "center"
        },
        anchor: {
            color: "white",
            textDecoration: "none",
            "&:hover": {
                color: "black"
            }
        },
        anchorCart: {
            color: "black",
            textDecoration: "none",
            "&:hover": {
                color: "grey"
            }
        }
    })
);
const ItemList = props => {
    return (
        <ListItem button>
            <ListItemIcon>
                <img
                    width={30}
                    height={30}
                    src={
                        "/api/image/item/" +
                            props?.data?.item?.minecraft_item_shorthand ??
                        "stone"
                    }
                    alt=""
                />
            </ListItemIcon>
            <ListItemText primary={props?.data?.item?.item_name ?? "stone"} />
            <ListItemSecondaryAction>
                <IconButton edge="end" aria-label="delete">
                    ${props?.data?.item?.price ?? 0}
                </IconButton>
            </ListItemSecondaryAction>
        </ListItem>
    );
};
export default function Navbar() {
    const classes = useStyles();
    //const { cartsData, setCartsData } = useState<Array>([]);
    const { session, destroySession, carts, setCarts } = useContext(
        UserContext
    );
    useEffect(() => {
        const setCartsData = async () => {
            const data = await meCart();
            if (localStorage.getItem("token")) {
                setCarts ? setCarts(data.data.me.usercart) : null;
            }
        };
        setCartsData();
    }, []);
    const handleEvent = async () => {
        const data = await meCart(true);
        setCarts ? setCarts(data.data.me.usercart) : null;
    };

    return (
        <div className={classes.root}>
            <AppBar position="fixed">
                <Toolbar>
                    <Grid
                        container
                        direction="row"
                        justify="space-between"
                        alignItems="center"
                    >
                        <Grid item xs={2} sm={4}>
                            <Grid container justify="flex-start">
                                <Grid item>
                                    <Go className={classes.anchor} to="/home">
                                        <Button color="inherit">Home</Button>
                                    </Go>
                                </Grid>
                                <Grid item>
                                    <Go className={classes.anchor} to="/status">
                                        <Button color="inherit">Status</Button>
                                    </Go>
                                </Grid>
                                <Grid item>
                                    <Go
                                        className={classes.anchor}
                                        to="/dashboard"
                                    >
                                        <Button color="inherit">
                                            Dashboard
                                        </Button>
                                    </Go>
                                </Grid>
                                <Grid item>
                                    <Go className={classes.anchor} to="/shop">
                                        <Button color="inherit">Shop</Button>
                                    </Go>
                                </Grid>
                                <Grid item>
                                    <Go className={classes.anchor} to="/store">
                                        <Button color="inherit">Store</Button>
                                    </Go>
                                </Grid>
                            </Grid>
                        </Grid>
                        <Grid item xs={10} sm={4}>
                            <Autocomplete
                                id="combo-box-demo"
                                options={top100Films}
                                freeSolo
                                getOptionLabel={option => option.title}
                                renderInput={params => (
                                    <div className={classes.search}>
                                        <div className={classes.searchIcon}>
                                            <SearchIcon />
                                        </div>
                                        <TextField
                                            {...params}
                                            variant="standard"
                                        />
                                        {/* <InputBase
                                            {...params}
                                            placeholder="Search…"
                                            classes={{
                                                root: classes.inputRoot,
                                                input: classes.inputInput
                                            }}
                                            inputProps={{
                                                "aria-label": "search"
                                            }}
                                        /> */}
                                    </div>
                                )}
                            />
                        </Grid>
                        <Grid item xs={2} sm={4}>
                            <Grid container justify="center">
                                {// if i dont do this horribleness they wont appear as two instead one
                                session.isLogged ? (
                                    <>
                                        <Tippy
                                            trigger={"mouseenter click"}
                                            onTrigger={handleEvent}
                                            theme="translucent"
                                            interactive
                                            allowHTML
                                            placement="bottom"
                                            content={
                                                <span>
                                                    <Box
                                                        height="80vh"
                                                        width="450px"
                                                        overflow="scroll"
                                                        style={{
                                                            backgroundColor:
                                                                "whitesmoke",
                                                            color: "black"
                                                        }}
                                                    >
                                                        <AppBar position="static">
                                                            <Toolbar>
                                                                <Typography variant="h6">
                                                                    Shopping
                                                                    Cart (
                                                                    {
                                                                        carts.length
                                                                    }
                                                                    )
                                                                </Typography>
                                                                <Go
                                                                    className={
                                                                        classes.anchor
                                                                    }
                                                                    to="/shop/cart"
                                                                >
                                                                    <Button color="inherit">
                                                                        Look Now
                                                                    </Button>
                                                                </Go>
                                                            </Toolbar>
                                                        </AppBar>
                                                        <List>
                                                            {carts.map(
                                                                (
                                                                    data,
                                                                    index
                                                                ) => {
                                                                    return (
                                                                        <Go
                                                                            key={
                                                                                index
                                                                            }
                                                                            className={
                                                                                classes.anchorCart
                                                                            }
                                                                            to={
                                                                                "/shop/item/" +
                                                                                data?.item_id
                                                                            }
                                                                        >
                                                                            <ItemList
                                                                                data={
                                                                                    data
                                                                                }
                                                                            />
                                                                        </Go>
                                                                    );
                                                                }
                                                            )}
                                                        </List>
                                                    </Box>
                                                </span>
                                            }
                                        >
                                            <IconButton>
                                                <Badge
                                                    badgeContent={carts.length}
                                                    color="error"
                                                >
                                                    <ShoppingCartIcon />
                                                </Badge>
                                            </IconButton>
                                        </Tippy>

                                        <Button
                                            onClick={() => {
                                                destroySession
                                                    ? destroySession()
                                                    : console.log("bruh");
                                            }}
                                            color="inherit"
                                        >
                                            logout
                                        </Button>
                                    </>
                                ) : (
                                    <>
                                        <Go
                                            className={classes.anchor}
                                            to="/register"
                                        >
                                            <Button color="inherit">
                                                Register
                                            </Button>
                                        </Go>
                                        <Go
                                            className={classes.anchor}
                                            to="/login"
                                        >
                                            <Button color="inherit">
                                                Login
                                            </Button>
                                        </Go>
                                    </>
                                )}
                                <Grid item></Grid>
                            </Grid>
                        </Grid>
                    </Grid>
                </Toolbar>
            </AppBar>
        </div>
    );
}
const top100Films = [
    { title: "The Shawshank Redemption", year: 1994 },
    { title: "The Godfather", year: 1972 },
    { title: "The Godfather: Part II", year: 1974 },
    { title: "The Dark Knight", year: 2008 },
    { title: "12 Angry Men", year: 1957 },
    { title: "Schindler's List", year: 1993 },
    { title: "Pulp Fiction", year: 1994 },
    { title: "The Lord of the Rings: The Return of the King", year: 2003 },
    { title: "The Good, the Bad and the Ugly", year: 1966 },
    { title: "Fight Club", year: 1999 },
    { title: "The Lord of the Rings: The Fellowship of the Ring", year: 2001 },
    { title: "Star Wars: Episode V - The Empire Strikes Back", year: 1980 },
    { title: "Forrest Gump", year: 1994 },
    { title: "Inception", year: 2010 },
    { title: "The Lord of the Rings: The Two Towers", year: 2002 },
    { title: "One Flew Over the Cuckoo's Nest", year: 1975 },
    { title: "Goodfellas", year: 1990 },
    { title: "The Matrix", year: 1999 },
    { title: "Seven Samurai", year: 1954 },
    { title: "Star Wars: Episode IV - A New Hope", year: 1977 },
    { title: "City of God", year: 2002 },
    { title: "Se7en", year: 1995 },
    { title: "The Silence of the Lambs", year: 1991 },
    { title: "It's a Wonderful Life", year: 1946 },
    { title: "Life Is Beautiful", year: 1997 },
    { title: "The Usual Suspects", year: 1995 },
    { title: "Léon: The Professional", year: 1994 },
    { title: "Spirited Away", year: 2001 },
    { title: "Saving Private Ryan", year: 1998 },
    { title: "Once Upon a Time in the West", year: 1968 },
    { title: "American History X", year: 1998 },
    { title: "Interstellar", year: 2014 },
    { title: "Casablanca", year: 1942 },
    { title: "City Lights", year: 1931 },
    { title: "Psycho", year: 1960 },
    { title: "The Green Mile", year: 1999 },
    { title: "The Intouchables", year: 2011 },
    { title: "Modern Times", year: 1936 },
    { title: "Raiders of the Lost Ark", year: 1981 },
    { title: "Rear Window", year: 1954 },
    { title: "The Pianist", year: 2002 },
    { title: "The Departed", year: 2006 },
    { title: "Terminator 2: Judgment Day", year: 1991 },
    { title: "Back to the Future", year: 1985 },
    { title: "Whiplash", year: 2014 },
    { title: "Gladiator", year: 2000 },
    { title: "Memento", year: 2000 },
    { title: "The Prestige", year: 2006 },
    { title: "The Lion King", year: 1994 },
    { title: "Apocalypse Now", year: 1979 },
    { title: "Alien", year: 1979 },
    { title: "Sunset Boulevard", year: 1950 },
    {
        title:
            "Dr. Strangelove or: How I Learned to Stop Worrying and Love the Bomb",
        year: 1964
    },
    { title: "The Great Dictator", year: 1940 },
    { title: "Cinema Paradiso", year: 1988 },
    { title: "The Lives of Others", year: 2006 },
    { title: "Grave of the Fireflies", year: 1988 },
    { title: "Paths of Glory", year: 1957 },
    { title: "Django Unchained", year: 2012 },
    { title: "The Shining", year: 1980 },
    { title: "WALL·E", year: 2008 },
    { title: "American Beauty", year: 1999 },
    { title: "The Dark Knight Rises", year: 2012 },
    { title: "Princess Mononoke", year: 1997 },
    { title: "Aliens", year: 1986 },
    { title: "Oldboy", year: 2003 },
    { title: "Once Upon a Time in America", year: 1984 },
    { title: "Witness for the Prosecution", year: 1957 },
    { title: "Das Boot", year: 1981 },
    { title: "Citizen Kane", year: 1941 },
    { title: "North by Northwest", year: 1959 },
    { title: "Vertigo", year: 1958 },
    { title: "Star Wars: Episode VI - Return of the Jedi", year: 1983 },
    { title: "Reservoir Dogs", year: 1992 },
    { title: "Braveheart", year: 1995 },
    { title: "M", year: 1931 },
    { title: "Requiem for a Dream", year: 2000 },
    { title: "Amélie", year: 2001 },
    { title: "A Clockwork Orange", year: 1971 },
    { title: "Like Stars on Earth", year: 2007 },
    { title: "Taxi Driver", year: 1976 },
    { title: "Lawrence of Arabia", year: 1962 },
    { title: "Double Indemnity", year: 1944 },
    { title: "Eternal Sunshine of the Spotless Mind", year: 2004 },
    { title: "Amadeus", year: 1984 },
    { title: "To Kill a Mockingbird", year: 1962 },
    { title: "Toy Story 3", year: 2010 },
    { title: "Logan", year: 2017 },
    { title: "Full Metal Jacket", year: 1987 },
    { title: "Dangal", year: 2016 },
    { title: "The Sting", year: 1973 },
    { title: "2001: A Space Odyssey", year: 1968 },
    { title: "Singin' in the Rain", year: 1952 },
    { title: "Toy Story", year: 1995 },
    { title: "Bicycle Thieves", year: 1948 },
    { title: "The Kid", year: 1921 },
    { title: "Inglourious Basterds", year: 2009 },
    { title: "Snatch", year: 2000 },
    { title: "3 Idiots", year: 2009 },
    { title: "Monty Python and the Holy Grail", year: 1975 }
];
// const { session, setSession, destroySession } = useContext(UserContext);
// const [carts, setCarts] = useState<Array<Usercart | null>>([]);
// useEffect(() => {
//     const setCartsData = async () => {
//         const data = await meCart();
//         if (data.data.me.usercart != null) {
//             setCarts(data.data.me.usercart);
//         }
//     };
//     setCartsData();
// }, []);
//  anchor: { color: "white", textDecoration: "none" },
{
    /* <Grid item>
<Box>
    <Go className={classes.anchor} to="/home">
        <Button color="inherit">Home</Button>
    </Go>
    <Go className={classes.anchor} to="/status">
        <Button color="inherit">Status</Button>
    </Go>
    <Go className={classes.anchor} to="/dashboard">
        <Button color="inherit">Dashboard</Button>
    </Go>
    <Go className={classes.anchor} to="/shop">
        <Button color="inherit">Shop</Button>
    </Go>
    <Go className={classes.anchor} to="/store">
        <Button color="inherit">Store</Button>
    </Go>
    {//Turns out i forget to install prettier on vscode server lmao
    session.isLogged ? (
        <>
            <Button
                onClick={() => {
                    destroySession
                        ? destroySession()
                        : console.log("bruh");
                }}
                color="inherit"
            >
                logout
            </Button>
            <IconButton>
                <Badge
                    badgeContent={carts.length}
                    color="error"
                >
                    <ShoppingCartIcon />
                </Badge>
            </IconButton>
        </>
    ) : (
        (
            <Go
                className={classes.anchor}
                to="/register"
            >
                <Button color="inherit">
                    Register
                </Button>
            </Go>
        ) && (
            <Go
                className={classes.anchor}
                to="/login"
            >
                <Button color="inherit">
                    Login
                </Button>
            </Go>
        )
    )}
</Box>
</Grid> */
}
