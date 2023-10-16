// import * as React from 'react';
import customTheme from "../../custom-theme.js";

import {Link} from 'react-router-dom'
import Box from "@mui/material/Box";
import MuiDrawer from "@mui/material/Drawer";
import MuiAppBar, { AppBarProps as MuiAppBarProps } from "@mui/material/AppBar";
import Toolbar from "@mui/material/Toolbar";
import List from "@mui/material/List";
import CssBaseline from "@mui/material/CssBaseline";
import Typography from "@mui/material/Typography";
import IconButton from "@mui/material/IconButton";
import MenuIcon from "@mui/icons-material/Menu";
import ChevronLeftIcon from "@mui/icons-material/ChevronLeft";
import ChevronRightIcon from "@mui/icons-material/ChevronRight";
import ListItem from "@mui/material/ListItem";
import ListItemButton from "@mui/material/ListItemButton";
import ListItemIcon from "@mui/material/ListItemIcon";
import ListItemText from "@mui/material/ListItemText";
import DashboardIcon from "@mui/icons-material/Dashboard";
import PersonIcon from "@mui/icons-material/Person";
import ContentPasteIcon from "@mui/icons-material/ContentPaste";
import WalletRoundedIcon from "@mui/icons-material/WalletRounded";
import QuestionAnswerRoundedIcon from "@mui/icons-material/QuestionAnswerRounded";
import SupportAgentRoundedIcon from "@mui/icons-material/SupportAgentRounded";
import ExitToAppRoundedIcon from "@mui/icons-material/ExitToAppRounded";
import MinimizeIcon from "@mui/icons-material/Minimize";

import Accordion from "@mui/material/Accordion";
import AccordionSummary from "@mui/material/AccordionSummary";
import AccordionDetails from "@mui/material/AccordionDetails";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
//profile card
import Card from "@mui/material/Card";
import CardContent from "@mui/material/CardContent";
import CardMedia from "@mui/material/CardMedia";
//progress bar
import LinearProgress, {
    linearProgressClasses,
} from "@mui/material/LinearProgress";
//images
import profile from "./assets/arshia-nasiri.png";
import logo from "./assets/logo-navbar.png";

//navbar
import Badge from "@mui/material/Badge";
import NotificationsActiveIcon from "@mui/icons-material/NotificationsActive";

//language
import {
    Avatar,
    Button,
    CardActionArea,
    CardActions,
    CircularProgress,
    Container,
    FormControl,
    InputLabel,
    Menu,
    MenuItem,
    MenuList,
    Paper,
    Select,
} from "@mui/material";
import USA from "./assets/usa.png";
import France from "./assets/france.png";
import Iran from "./assets/iran.png";
import Content from "./Content";
import ExploreIcon from "@mui/icons-material/Explore";
import HandshakeIcon from "@mui/icons-material/Handshake";
import SettingsIcon from "@mui/icons-material/Settings";

import { BrowserRouter } from "react-router-dom";
import AccordionMenu from "../views/jsx/AccordionMenu";

import * as React from "react";
import { styled, useTheme, Theme, CSSObject } from "@mui/material/styles";
import Divider from "@mui/material/Divider";
import InboxIcon from "@mui/icons-material/MoveToInbox";
import MailIcon from "@mui/icons-material/Mail";
import NotificationsIcon from "@mui/icons-material/Notifications";
import LogoutIcon from "@mui/icons-material/Logout";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import ForumIcon from "@mui/icons-material/Forum";
import { route } from "./../helpers.js";
import axios from "./../../axiosConfig.js";
import {useDispatch, useSelector} from "react-redux";
import {useQuery} from "react-query";
import {getInfo} from './../redux/info.js'
import {valueOf} from "axios";
import {set} from "react-hook-form";


//menu itemes
const menuItem = [
    {
        id: 1,
        path: "/technology-provider-panel",
        name: "Dashboard",
        icon: DashboardIcon,
        hasChildren: false,
    },
    {
        id: 2,
        path: "/technology-provider-panel/account-info",
        name: "Account info",
        icon: PersonIcon,
        hasChildren: true,
        children: [
            {
                name: "Contact Details",
                path: "/technology-provider-panel/account-info/contact-detail",
            },
            {
                name: "Social Address",
                path: "/technology-provider-panel/account-info/social-address",
            },

            {
                name: "My Documents",
                path: "/technology-provider-panel/account-info/documents",
            },
            {
                name: "Education",
                path: "/technology-provider-panel/account-info/education",
            },
            {
                name: "Experience",
                path: "/technology-provider-panel/account-info/experience",
            },
        ],
    },
    {
        id: 3,
        path: "/technology-provider-panel/project",
        name: "Projects",
        icon: ContentPasteIcon,
        hasChildren: false,
    },
    {
        id: 4,
        path: "/technology-provider-panel/discover",
        name: "Discover",
        icon: ExploreIcon,
        hasChildren: false,
    },
    {
        id: 5,
        path: "/technology-provider-panel/agreement",
        name: "Agreements",
        icon: HandshakeIcon,
        hasChildren: false,
    },
    {
        id: 6,
        path: "/technology-provider-panel/wallet",
        name: "Wallet",
        icon: WalletRoundedIcon,
        hasChildren: false,
    },
    {
        id: 7,
        path: "/technology-provider-panel/communications",
        name: "Communications",
        icon: QuestionAnswerRoundedIcon,
        hasChildren: false,
    },
    // {
    //     id: 8,
    //     path: "/technology-provider-panel/setting",
    //     name: "Setting",
    //     icon: SettingsIcon,
    //     hasChildren: false,
    // },
];

const drawerWidth = 230;

const openedMixin = (theme: Theme): CSSObject => ({
    width: drawerWidth,
    backgroundColor: customTheme.palette.primary.dark,
    color: customTheme.palette.primary.light,
    transition: theme.transitions.create("width", {
        easing: theme.transitions.easing.sharp,
        duration: theme.transitions.duration.enteringScreen,
    }),
    overflowX: "hidden",
});

const closedMixin = (theme: Theme): CSSObject => ({
    transition: theme.transitions.create("width", {
        easing: theme.transitions.easing.sharp,
        duration: theme.transitions.duration.leavingScreen,
    }),
    overflowX: "hidden",
    width: `calc(${theme.spacing(0)})`,
    [theme.breakpoints.up("md")]: {
        width: `calc(${theme.spacing(5)})`,
    },
    [theme.breakpoints.up("sm")]: {
        width: `calc(${theme.spacing(10)})`,
    },
});

const DrawerHeader = styled("div")(({ theme }) => ({
    display: "flex",
    alignItems: "center",
    justifyContent: "flex-end",
    padding: theme.spacing(0, 1),
    // necessary for content to be below app bar
    ...theme.mixins.toolbar,
}));

interface AppBarProps extends MuiAppBarProps {
    open?: boolean;
}

const AppBar = styled(MuiAppBar, {
    shouldForwardProp: (prop) => prop !== "open",
})<AppBarProps>(({ theme, open }) => ({
    zIndex: theme.zIndex.drawer + 1,
    transition: theme.transitions.create(["width", "margin"], {
        easing: theme.transitions.easing.sharp,
        duration: theme.transitions.duration.leavingScreen,
    }),
    ...(open && {
        marginLeft: drawerWidth,
        width: `calc(100% - ${drawerWidth}px)`,
        transition: theme.transitions.create(["width", "margin"], {
            easing: theme.transitions.easing.sharp,
            duration: theme.transitions.duration.enteringScreen,
        }),
    }),
}));

const Drawer = styled(MuiDrawer, {
    shouldForwardProp: (prop) => prop !== "open",
})(({ theme, open }) => ({
    width: drawerWidth,
    flexShrink: 0,
    whiteSpace: "nowrap",
    boxSizing: "border-box",
    ...(open && {
        ...openedMixin(theme),
        "& .MuiDrawer-paper": openedMixin(theme),
    }),
    ...(!open && {
        ...closedMixin(theme),
        "& .MuiDrawer-paper": closedMixin(theme),
    }),
}));
//progress bar
const BorderLinearProgress = styled(LinearProgress)(({ theme }) => ({
    height: 10,
    borderRadius: 5,
    marginTop: 10,
    [`&.${linearProgressClasses.colorPrimary}`]: {
        backgroundColor: customTheme.palette.primary.light,
    },
    [`& .${linearProgressClasses.bar}`]: {
        borderRadius: 5,
        backgroundColor: customTheme.palette.primary.light,
    },
}));
//language
const countries = [
    {
        label: "France",
        src: France,
        link: " ",
        value: "FR",
    },
    {
        label: "Iran",
        src: Iran,
        link: " ",
        value: "IR",
    },
    {
        label: "USA",
        src: USA,
        link: " ",
        value: "US",
    },
];

const notifications = [
    {
        id: 1,
        avatar: profile,
        title: "Project New Status",
        description: "Project New Status",
    },
    {
        id: 2,
        avatar: profile,
        title: "New Provider Seen Your Project",
        description: "New Provider Seen Your Project",
    },
    {
        id: 3,
        avatar: profile,
        title: "10 People Applied",
        description: "10 People Applied",
    },
    {
        id: 4,
        avatar: profile,
        title: "Project New Status",
        description: "Project New Status",
    },
    {
        id: 5,
        avatar: profile,
        title: "New Provider Seen Your Project",
        description: "New Provider Seen Your Project",
    },
    {
        id: 6,
        avatar: profile,
        title: "Project New Status",
        description: "Project New Status",
    },
];

export default function MainDrawer() {
    const theme = useTheme();
    const [open, setOpen] = React.useState(false);


    const handleClose = ()=>{
        setOpen(false)
    }
    //Redux Config
    const dispatch = useDispatch();
    const Data = useSelector(state => state.info);

    //Get general user info
    const GeneralInfo = useQuery('GeneralInfo', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.general-info"));
        GeneralInfo.data = data.data;
        dispatch(getInfo(GeneralInfo.data));
        console.log(GeneralInfo.data)
        return GeneralInfo;
    },{refetchInterval:3000});

    const handleDrawerOpen = () => {
        setOpen(true);
    };

    const handleDrawerClose = () => {
        setOpen(false);
    };
    //language
    const [country, setCountry] = React.useState(USA);
    const [openLang, setOpenLang] = React.useState(false);

    const handleChangeLang = (event) => {
        setCountry(event.target.value);
    };

    const handleCloseLang = () => {
        setOpenLang(false);
    };

    const handleOpenLang = () => {
        setOpenLang(true);
    };

    const [OpenAccordion, setOpenAccordion] = React.useState(false);
    const handleOpenAccordion = (index) => {
        if (menuItem[index].hasChildren === true) {
            setOpenAccordion(!OpenAccordion);
        }
    };

    const [project, setOpenProject] = React.useState(false);
    const projectClick = () => {
        setOpenProject(!project);
    };

    const handleClick = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl(event.currentTarget);
    };

    const [anchorEl, setAnchorEl] = React.useState<null | HTMLElement>(null);
    const open1 = Boolean(anchorEl);
    const handleClick2 = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl(event.currentTarget);
    };
    const handleClose2 = () => {
        setAnchorEl(null);
    };

    const handleClickLogout = async () => {
        const response = await axios.post(route("logout"));
        document.location.href = import.meta.env.VITE_APP_URL;
    };

    const [anchorEl3, setAnchorEl3] = React.useState<null | HTMLElement>(null);
    const open3 = Boolean(anchorEl3);
    const handleClick3 = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl3(event.currentTarget);
    };
    const handleClose3 = () => {
        setAnchorEl3(null);
    };
    const [anchorEl4, setAnchorEl4] = React.useState<null | HTMLElement>(null);
    const open4 = Boolean(anchorEl4);
    const handleClick4 = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl4(event.currentTarget);
    };
    const handleClose4 = () => {
        setAnchorEl4(null);
    };
    const isMobile = window.matchMedia('(max-width: 600px)').matches;

    if (Data.loading){
        return <div>loading...</div>
    }
    return (
        <Box sx={{ display: "flex", flexGrow: 0, height: "100vh" }} >
            {open && isMobile ?
                <Drawer
                variant="permanent"
                open={open}
                onClose={handleClose}
                sx={{ "& .MuiPaper-root": { overflow: "initial"} , position:"absolute"}}
            >
                <DrawerHeader
                    sx={{
                        backgroundColor: customTheme.palette.primary.dark
                    }}
                >
                    <IconButton
                        sx={{ color: customTheme.palette.primary.light }}
                        onClick={handleDrawerClose}
                    >
                        {open && <ChevronLeftIcon />}
                    </IconButton>
                </DrawerHeader>
                <List
                    className={open && "scrollbar"}
                    sx={{
                        backgroundColor: customTheme.palette.primary.dark,
                        display: "flex",
                        flexDirection: "column",
                        flexGrow: 1,
                        overflowY: open && "scroll",
                        overflowX: open && "hidden",
                        pr: "0 !important",
                    }}
                >
                    {menuItem.map((item, index) => {
                        return item.hasChildren ? (
                            <ListItem
                                disablePadding
                                sx={{ display: "block" }}
                                key={item.id}
                            >
                                <ListItemButton
                                    sx={{
                                        width:"100%",
                                        justifyContent: open
                                            ? "initial"
                                            : "center",
                                        p: 0,
                                    }}
                                >
                                    {!open ? (
                                        <ListItemIcon
                                            sx={{
                                                display: open
                                                    ? "block"
                                                    : "none",
                                                mr: open ? 2 : "auto",
                                                justifyContent: "center",
                                                width: "100%",
                                                py: "1rem",
                                                color: customTheme.palette
                                                    .primary.light,
                                            }}
                                        >
                                            <item.icon />
                                        </ListItemIcon>
                                    ) : null}
                                    <ListItemText
                                        sx={{
                                            p: 0,
                                            opacity: 1,
                                            // position: open ? "static" : "absolute",
                                        }}
                                    >
                                        <AccordionMenu
                                            item={item}
                                            open={open}
                                        />
                                    </ListItemText>
                                </ListItemButton>
                            </ListItem>
                        ) : (
                            <ListItem
                                onClick={handleClose}
                                disablePadding
                                sx={{ display: "block" }}
                                key={item.id}
                            >
                                <ListItemButton
                                    component={Link}
                                    to={item.path}
                                    sx={{
                                        minHeight: 0,
                                        justifyContent: open
                                            ? "initial"
                                            : "center",
                                        // px: 2.5,
                                    }}
                                >
                                    <ListItemIcon
                                        sx={{
                                            minWidth: 0,
                                            width: open ? "auto" : "100%",
                                            mr: open ? 3 : "auto",
                                            justifyContent: "center",
                                            color: customTheme.palette.primary
                                                .light,
                                        }}
                                    >
                                        <item.icon />
                                    </ListItemIcon>
                                    <ListItemText
                                        sx={{ opacity: open ? 1 : 0, p: 0 }}
                                    >
                                        {item.name}
                                    </ListItemText>
                                </ListItemButton>
                            </ListItem>
                        );
                    })}
                </List>
            </Drawer>
            : !isMobile ?
                    <Drawer
                        variant="permanent"
                        open={open}
                        sx={{ "& .MuiPaper-root": { overflow: "initial"}}}
                    >
                        <DrawerHeader
                            sx={{
                                backgroundColor: customTheme.palette.primary.dark,
                            }}
                        >
                            <IconButton
                                sx={{ color: customTheme.palette.primary.light }}
                                onClick={handleDrawerClose}
                            >
                                {open && <ChevronLeftIcon />}
                            </IconButton>
                        </DrawerHeader>
                        <List
                            className={open && "scrollbar"}
                            sx={{
                                backgroundColor: customTheme.palette.primary.dark,
                                display: "flex",
                                flexDirection: "column",
                                flexGrow: 1,
                                overflowY: open && "scroll",
                                overflowX: open && "hidden",
                                pr: "0 !important",
                            }}
                        >
                            {menuItem.map((item, index) => {
                                return item.hasChildren ? (
                                    <ListItem
                                        disablePadding
                                        sx={{ display: "block" }}
                                        key={item.id}
                                    >
                                        <ListItemButton
                                            sx={{
                                                justifyContent: open
                                                    ? "initial"
                                                    : "center",
                                                p: 0,
                                            }}
                                        >
                                            {!open ? (
                                                <ListItemIcon
                                                    sx={{
                                                        display: open
                                                            ? "block"
                                                            : "none",
                                                        mr: open ? 2 : "auto",
                                                        justifyContent: "center",
                                                        width: "100%",
                                                        py: "1rem",
                                                        color: customTheme.palette
                                                            .primary.light,
                                                    }}
                                                >
                                                    <item.icon />
                                                </ListItemIcon>
                                            ) : null}
                                            <ListItemText
                                                sx={{
                                                    p: 0,
                                                    opacity: 1,
                                                    // position: open ? "static" : "absolute",
                                                }}
                                            >
                                                <AccordionMenu
                                                    item={item}
                                                    open={open}
                                                />
                                            </ListItemText>
                                        </ListItemButton>
                                    </ListItem>
                                ) : (
                                    <ListItem
                                        disablePadding
                                        sx={{ display: "block" }}
                                        key={item.id}
                                    >
                                        <ListItemButton
                                            component={Link}
                                            to={item.path}
                                            sx={{
                                                minHeight: 0,
                                                justifyContent: open
                                                    ? "initial"
                                                    : "center",
                                                // px: 2.5,
                                            }}
                                        >
                                            <ListItemIcon
                                                sx={{
                                                    minWidth: 0,
                                                    width: open ? "auto" : "100%",
                                                    mr: open ? 3 : "auto",
                                                    justifyContent: "center",
                                                    color: customTheme.palette.primary
                                                        .light,
                                                }}
                                            >
                                                <item.icon />
                                            </ListItemIcon>
                                            <ListItemText
                                                sx={{ opacity: open ? 1 : 0, p: 0 }}
                                            >
                                                {item.name}
                                            </ListItemText>
                                        </ListItemButton>
                                    </ListItem>
                                );
                            })}
                        </List>
                    </Drawer>:""
            }
            <Box
                sx={{
                    display: "flex",
                    flexDirection: "column",
                    height: "100vh",
                    overflow: "hidden",
                    // "& .main-content": {
                    //     height: "100%",
                    // },
                }}
                width={"100%"}
                component="main"
            >
                <AppBar
                    open={open}
                    sx={{
                        position: "static",
                        marginLeft: "0",
                        width: "100%",
                        flexGrow: 0,
                    }}
                >
                    <Toolbar>
                        <IconButton
                            aria-label="open drawer"
                            onClick={handleDrawerOpen}
                            edge="start"
                            sx={{
                                ...(open && { display: "none" }),
                                marginRight: "15px",
                                color: customTheme.palette.primary.light,
                            }}
                        >
                            <MenuIcon />
                        </IconButton>
                        <Box
                            sx={{
                                display: "flex",
                                justifyContent: "space-between",
                                width: "100%",
                                alignItems: "center",
                            }}
                        >
                            <a href="/">
                                <img src={logo} alt="logo" />
                            </a>

                            <Box display={"flex"} alignItems={"center"}>
                                <Box
                                    sx={{ display: { xs: "none", sm: "flex" } }}
                                >
                                    <IconButton onClick={handleClick4}>
                                        <Badge
                                            badgeContent={Object.values(Data.data.unread).length}
                                            color="error"
                                            sx={{ mr: 1 }}
                                        >
                                            <ForumIcon
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    fontSize: "25px",
                                                }}
                                            />
                                        </Badge>
                                    </IconButton>
                                    <Menu
                                        id="basic-menu"
                                        anchorEl={anchorEl4}
                                        open={open4}
                                        onClose={handleClose4}
                                        MenuListProps={{
                                            "aria-labelledby": "basic-button",
                                        }}
                                        sx={{
                                            "& .MuiPaper-root": {
                                                backgroundColor:
                                                customTheme.palette.primary
                                                    .dark,
                                            },
                                            mt: 2,
                                        }}
                                    >
                                        <Paper sx={{ width: 320 }}>
                                            <MenuList dense>
                                                <MenuItem sx={{ px: 0 }}>
                                                    <ListItemButton>
                                                        <ListItemText>
                                                            <Typography
                                                                color="#99C9FF"
                                                                variant="body2"
                                                            >
                                                                Mark All as Read
                                                            </Typography>
                                                        </ListItemText>
                                                    </ListItemButton>
                                                </MenuItem>
                                                <Divider
                                                    variant="middle"
                                                    sx={{
                                                        borderColor: "#ffffff",
                                                    }}
                                                />
                                                <Box className="scrollbar"
                                                     sx={{ maxHeight: "14rem", overflowY: "scroll" }} >
                                                    {Data.data.unread.map((item) => (
                                                        <Box >
                                                            <Link to={`/technology-provider-panel/communications?q=${item.id}`}>
                                                            <MenuItem>
                                                                <Avatar
                                                                    alt="Avatar Pic"
                                                                    src={
                                                                        item.profile_image
                                                                    }
                                                                />
                                                                <ListItemText
                                                                    sx={{ ml: 1 }}
                                                                >
                                                                    <Typography
                                                                        color="#99C9FF"
                                                                        variant="body2"
                                                                    >
                                                                        {item.title}
                                                                    </Typography>
                                                                    <Typography
                                                                        color="#CEEAFF"
                                                                        variant="subtitle1"
                                                                    >
                                                                        {
                                                                            item.name
                                                                        }
                                                                    </Typography>
                                                                </ListItemText>
                                                                <Typography
                                                                    color="#CEEAFF"
                                                                    variant="subtitle1"
                                                                >
                                                                    {
                                                                        item.date
                                                                    }
                                                                </Typography>
                                                            </MenuItem>
                                                            </Link>
                                                            <Divider
                                                                variant="middle"
                                                                sx={{
                                                                    borderColor: customTheme.palette.primary.main,
                                                                }}
                                                            />
                                                        </Box>
                                                    ))}
                                                </Box>
                                            </MenuList>
                                        </Paper>
                                    </Menu>

                                    <IconButton onClick={handleClick3}>
                                        <Badge
                                            badgeContent={Data.data.notif.length}
                                            color="error"
                                            // sx={{ mx: 2 }}
                                        >
                                            <NotificationsIcon
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    fontSize: "25px",
                                                }}
                                            />
                                        </Badge>
                                    </IconButton>
                                    <Menu
                                        id="basic-menu"
                                        anchorEl={anchorEl3}
                                        open={open3}
                                        onClose={handleClose3}
                                        MenuListProps={{
                                            "aria-labelledby": "basic-button",
                                        }}
                                        sx={{
                                            "& .MuiPaper-root": {
                                                backgroundColor:
                                                    customTheme.palette.primary
                                                        .dark,
                                            },
                                            mt: 2,
                                        }}
                                    >
                                        <Paper sx={{ width: 320 }}>
                                            <MenuList dense>
                                                <MenuItem sx={{ px: 0 }}>
                                                    <ListItemButton>
                                                        <ListItemText>
                                                            <Typography
                                                                color="#99C9FF"
                                                                variant="body2"
                                                            >
                                                                Mark All as Read
                                                            </Typography>
                                                        </ListItemText>
                                                    </ListItemButton>
                                                </MenuItem>
                                                <Divider
                                                    variant="middle"
                                                    sx={{
                                                        borderColor: "#ffffff",
                                                    }}
                                                />
                                                <Box className="scrollbar"
                            sx={{ maxHeight: "14rem", overflowY: "scroll" }} >
                                                {notifications.map((item) => (
                                                    <Box key={item.id}>
                                                        <MenuItem>
                                                            <Avatar
                                                                alt="Avatar Pic"
                                                                src={
                                                                    item.avatar
                                                                }
                                                            />
                                                            <ListItemText
                                                                sx={{ ml: 1 }}
                                                            >
                                                                <Typography
                                                                    color="#99C9FF"
                                                                    variant="body2"
                                                                >
                                                                    {item.title}
                                                                </Typography>
                                                                <Typography
                                                                    color="#CEEAFF"
                                                                    variant="subtitle1"
                                                                >
                                                                    {
                                                                        item.description
                                                                    }
                                                                </Typography>
                                                            </ListItemText>
                                                        </MenuItem>
                                                        <Divider
                                                            variant="middle"
                                                            sx={{
                                                                borderColor: customTheme.palette.primary.main,
                                                            }}
                                                        />
                                                    </Box>
                                                ))}
                                                </Box>
                                            </MenuList>
                                        </Paper>
                                    </Menu>
                                </Box>

                                <Divider
                                    variant="middle"
                                    sx={{
                                        borderBottomWidth: 1,
                                        backgroundColor:
                                            customTheme.palette.primary.main,
                                        height: "45px",
                                        borderColor:
                                        customTheme.palette.primary.main,
                                        mr: "20px",
                                        mt: 0,
                                        display: { xs: "none", sm: "block" },
                                    }}
                                />

                                <Box
                                    sx={{
                                        borderRadius: 0,
                                        display: "flex",
                                        alignItems: "center",
                                    }}
                                    onClick={handleClick}
                                >
                                    <IconButton>
                                        <Box
                                            style={{
                                                width: "45px",
                                                height: "45px",
                                                borderRadius: "50%",
                                                overflow: "hidden",
                                                marginRight: "10px",
                                                display: "flex",
                                                justifyContent: "center",
                                                alignItems: "start",
                                            }}
                                        >
                                            <img
                                                src={Data.data.profile_picture}
                                                alt="user"
                                                style={{
                                                    width: "45px",
                                                    // height: "65px",
                                                }}
                                            />
                                        </Box>

                                        <Typography
                                            sx={{
                                                textTransform: "capitalized",
                                                color: customTheme.palette
                                                    .primary.light,
                                                display: {
                                                    xs: "none",
                                                    sm: "none",
                                                    md: "block",
                                                },
                                            }}
                                            variant="body1"
                                        >
                                            {Data.data.name}
                                        </Typography>
                                        <ExpandMoreIcon
                                            sx={{
                                                color: customTheme.palette
                                                    .primary.light,
                                                display: {
                                                    xs: "none",
                                                    sm: "none",
                                                    md: "block",
                                                },
                                            }}
                                        />
                                    </IconButton>
                                </Box>
                                <Menu
                                    id="basic-menu"
                                    anchorEl={anchorEl}
                                    open={open1}
                                    onClose={handleClose2}
                                    MenuListProps={{
                                        "aria-labelledby": "basic-button",
                                    }}
                                    sx={{
                                        "& .MuiPaper-root": {
                                            backgroundColor:
                                                customTheme.palette.primary
                                                    .dark,
                                        },
                                        mt: "7px",
                                    }}
                                >
                                    <Box
                                        sx={{
                                            width: "229px",
                                            display: "flex",
                                            justifyContent: "start",
                                            alignItems: "center",
                                            p: "5px 16px",
                                        }}
                                    >
                                        <Box sx={{ position: "relative" }}>
                                            <Box
                                                style={{
                                                    width: "50px",
                                                    height: "50px",
                                                    borderRadius: "50%",
                                                    overflow: "hidden",
                                                    display: "flex",
                                                    justifyContent: "center",
                                                    alignItems: "start",
                                                }}
                                            >
                                                <img
                                                    src={Data.data.profile_picture}
                                                    alt="user"
                                                    style={{
                                                        width: "50px",
                                                        // height: "70px",
                                                    }}
                                                />
                                            </Box>
                                            <EditOutlinedIcon
                                                sx={{
                                                    borderRadius: "50%",
                                                    fontSize: "20px",
                                                    padding: "2px",
                                                    backgroundColor:
                                                        customTheme.palette
                                                            .primary.light,
                                                    position: "absolute",
                                                    left: 30,
                                                    bottom: 2,
                                                    color: customTheme.palette
                                                        .primary.light,
                                                }}
                                            />
                                        </Box>
                                        <Typography
                                            variant="body2"
                                            sx={{
                                                color: customTheme.palette
                                                    .primary.light,
                                                ml: 1,
                                            }}
                                        >
                                           {Data.data.role_is}
                                        </Typography>
                                    </Box>

                                    <Divider
                                        variant="middle"
                                        sx={{
                                            borderBottomWidth: "0px",
                                            borderColor:
                                                customTheme.palette.primary
                                                    .main,
                                            width: "90%",
                                        }}
                                    />
                                    <Box
                                        sx={{
                                            display: { sm: "none" },
                                            mt: "6px",
                                            ml: "12px",
                                        }}
                                    >
                                        <Link to={"/technology-provider-panel/communications"}>
                                        <Badge
                                            badgeContent={Object.values(Data.data.unread).length}
                                            color="error"
                                            sx={{ mx: 2 }}
                                        >
                                            <ForumIcon
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    fontSize: "25px",
                                                }}
                                            />
                                        </Badge>
                                            </Link>
                                        <IconButton onClick={handleClick3}>
                                        <Badge
                                            badgeContent={Data.data.notif.length}
                                            color="error"
                                            sx={{
                                                mx: 2,
                                            }}
                                        >
                                            <NotificationsIcon
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    fontSize: "25px",
                                                }}
                                            />
                                        </Badge>
                                        </IconButton>
                                        <Menu
                                        id="basic-menu"
                                        anchorEl={anchorEl3}
                                        open={open3}
                                        onClose={handleClose3}
                                        MenuListProps={{
                                            "aria-labelledby": "basic-button",
                                        }}
                                        sx={{
                                            "& .MuiPaper-root": {
                                                backgroundColor:
                                                customTheme.palette.primary
                                                    .dark,
                                            },
                                            mt: 2,
                                        }}
                                    >
                                        <Paper sx={{ width: 320 }}>
                                            <MenuList dense>
                                                <MenuItem sx={{ px: 0 }}>
                                                    <ListItemButton>
                                                        <ListItemText>
                                                            <Typography
                                                                color="#99C9FF"
                                                                variant="body2"
                                                            >
                                                                Mark All as Read
                                                            </Typography>
                                                        </ListItemText>
                                                    </ListItemButton>
                                                </MenuItem>
                                                <Divider
                                                    variant="middle"
                                                    sx={{
                                                        borderColor: "#ffffff",
                                                    }}
                                                />
                                                <Box className="scrollbar"
                                                     sx={{ maxHeight: "14rem", overflowY: "scroll" }} >
                                                    {notifications.map((item) => (
                                                        <Box key={item.id}>
                                                            <MenuItem>
                                                                <Avatar
                                                                    alt="Avatar Pic"
                                                                    src={
                                                                        item.avatar
                                                                    }
                                                                />
                                                                <ListItemText
                                                                    sx={{ ml: 1 }}
                                                                >
                                                                    <Typography
                                                                        color="#99C9FF"
                                                                        variant="body2"
                                                                    >
                                                                        {item.title}
                                                                    </Typography>
                                                                    <Typography
                                                                        color="#CEEAFF"
                                                                        variant="subtitle1"
                                                                    >
                                                                        {
                                                                            item.description
                                                                        }
                                                                    </Typography>
                                                                </ListItemText>
                                                            </MenuItem>
                                                            <Divider
                                                                variant="middle"
                                                                sx={{
                                                                    borderColor: customTheme.palette.primary.main,
                                                                }}
                                                            />
                                                        </Box>
                                                    ))}
                                                </Box>
                                            </MenuList>
                                        </Paper>
                                    </Menu>
                                    </Box>
                                    <MenuItem sx={{ p: 0 }}>
                                        {/* <Link component={Link} to={"/technology-seeker-panel/setting"}> */}
                                        <ListItemButton
                                            component={Link}
                                            to={
                                                "/technology-provider-panel/setting"
                                            }
                                        >
                                            <Box
                                                sx={{
                                                    width: "200px",
                                                    display: "flex",
                                                    justifyContent: "start",
                                                    alignItems: "center",
                                                }}
                                            >
                                                <SettingsIcon
                                                    sx={{
                                                        color: customTheme
                                                            .palette.primary
                                                            .light,
                                                        ml: "12px",
                                                        fontSize: "17px",
                                                    }}
                                                />
                                                <Typography
                                                    sx={{
                                                        color: customTheme
                                                            .palette.primary
                                                            .light,
                                                        ml: 1,
                                                    }}
                                                >
                                                    Setting
                                                </Typography>
                                            </Box>
                                        </ListItemButton>
                                        {/* </Link> */}
                                    </MenuItem>
                                    <MenuItem>
                                        {/* <Link href={route("logout")} underline="none"> */}
                                        <Box
                                            onClick={handleClickLogout}
                                            sx={{
                                                width: "200px",
                                                display: "flex",
                                                justifyContent: "start",
                                                alignItems: "center",
                                            }}
                                        >
                                            <LogoutIcon
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    ml: "12px",
                                                    fontSize: "17px",
                                                }}
                                            />
                                            <Typography
                                                sx={{
                                                    color: customTheme.palette
                                                        .primary.light,
                                                    ml: 1,
                                                }}
                                            >
                                                Log Out
                                            </Typography>
                                        </Box>
                                        {/* </Link> */}
                                    </MenuItem>
                                </Menu>
                            </Box>
                        </Box>
                    </Toolbar>
                </AppBar>
                {/* <DrawerHeader sx={{ display: "flex", height: "10rem", flexGrow: 0}} /> */}
                {isMobile ?
                    <Box
                        onClick={handleClose}
                        className="scrollbar"
                        sx={{
                            flex: "1 1 auto",
                            overflowY: "scroll",
                            // "&::-webkit-scrollbar": {
                            //     display: "none",
                            // },
                        }}
                    >
                        <Content />
                    </Box>
                :
                    <Box
                        className="scrollbar"
                        sx={{
                            flex: "1 1 auto",
                            overflowY: "scroll",
                            // "&::-webkit-scrollbar": {
                            //     display: "none",
                            // },
                        }}
                    >
                        <Content />
                    </Box>
                }
            </Box>
        </Box>
    );
}
