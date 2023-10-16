// import * as React from 'react';
// import {createRoot} from "react-dom/client";
// import AppStyle from "./App.js";
// import customTheme from '../custom-theme.js';
// import {ThemeProvider} from '@mui/material/styles';
//
// import {styled, useTheme, Theme, CSSObject} from '@mui/material/styles';
// import Box from '@mui/material/Box';
// import MuiDrawer from '@mui/material/Drawer';
// import MuiAppBar, {AppBarProps as MuiAppBarProps} from '@mui/material/AppBar';
// import Toolbar from '@mui/material/Toolbar';
// import List from '@mui/material/List';
// import CssBaseline from '@mui/material/CssBaseline';
// import Typography from '@mui/material/Typography';
// import IconButton from '@mui/material/IconButton';
// import MenuIcon from '@mui/icons-material/Menu';
// import ChevronLeftIcon from '@mui/icons-material/ChevronLeft';
// import ChevronRightIcon from '@mui/icons-material/ChevronRight';
// import ListItem from '@mui/material/ListItem';
// import ListItemButton from '@mui/material/ListItemButton';
// import ListItemIcon from '@mui/material/ListItemIcon';
// import ListItemText from '@mui/material/ListItemText';
// import DashboardIcon from '@mui/icons-material/Dashboard';
// import PersonIcon from '@mui/icons-material/Person';
// import ContentPasteIcon from '@mui/icons-material/ContentPaste';
// import WalletRoundedIcon from '@mui/icons-material/WalletRounded';
// import QuestionAnswerRoundedIcon from '@mui/icons-material/QuestionAnswerRounded';
// import SupportAgentRoundedIcon from '@mui/icons-material/SupportAgentRounded';
// import ExitToAppRoundedIcon from '@mui/icons-material/ExitToAppRounded';
// import MinimizeIcon from '@mui/icons-material/Minimize';
//
// import Accordion from '@mui/material/Accordion';
// import AccordionSummary from '@mui/material/AccordionSummary';
// import AccordionDetails from '@mui/material/AccordionDetails';
// import ExpandMoreIcon from '@mui/icons-material/ExpandMore';
// //profile card
// import Card from '@mui/material/Card';
// import CardContent from '@mui/material/CardContent';
// import CardMedia from '@mui/material/CardMedia';
// //progress bar
// import LinearProgress, {linearProgressClasses} from '@mui/material/LinearProgress';
// //images
// import profile from "../technology-provider-panel/components/assets/arshia-nasiri.png";
// import logo from "../technology-provider-panel/components/assets/logo-navbar.png";
//
// //navbar
// import Badge from '@mui/material/Badge';
// import NotificationsActiveIcon from '@mui/icons-material/NotificationsActive';
//
// //language
// import {Button, CardActionArea, CardActions, FormControl, InputLabel, MenuItem, Select} from '@mui/material';
// import USA from "../technology-provider-panel/components/assets/usa.png";
// import France from "../technology-provider-panel/components/assets/france.png";
// import Iran from "../technology-provider-panel/components/assets/iran.png";
// // import Content from "../technology-provider-panel/components/Content";
// import ExploreIcon from '@mui/icons-material/Explore';
// import HandshakeIcon from '@mui/icons-material/Handshake';
// import SettingsIcon from '@mui/icons-material/Settings';
//
// import {BrowserRouter} from 'react-router-dom';
// import {Link} from 'react-router-dom';
//
//
// //menu itemes
// const menuItem = [
//     {
//         path: "/technology-provider-panel/dashboard",
//         name: "Dashboard",
//         icon: DashboardIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/account-info",
//         name: "Account info",
//         icon: PersonIcon,
//         hasChildren: true,
//         children: [
//             {
//                 name: 'Contact Details',
//                 path: '/technology-provider-panel/account-info/contact-detail',
//
//             },
//             {
//                 name: 'Social Address',
//                 path: '/technology-provider-panel/account-info/social-address',
//
//             },
//
//             {
//                 name: 'My Documents',
//                 path: '/technology-provider-panel/account-info/documents',
//
//             },
//             {
//                 name: 'Education',
//                 path: '/technology-provider-panel/account-info/education',
//
//             },
//             {
//                 name: 'Experience',
//                 path: '/technology-provider-panel/account-info/experience',
//
//             },
//         ]
//     },
//     {
//         path: "/technology-provider-panel/project",
//         name: "Project",
//         icon: ContentPasteIcon,
//         hasChildren: true,
//         children: [
//             {
//                 name: 'Applied',
//                 path: '/technology-provider-panel/project/applied/',
//
//             },
//             {
//                 name: 'Accepted',
//                 path: '/technology-provider-panel/project/accepted/',
//
//             },
//             {
//                 name: 'Completed',
//                 path: '/technology-provider-panel/project/completed/',
//
//             },
//         ]
//     },
//     {
//         path: "/technology-provider-panel/discover",
//         name: "Discover",
//         icon: ExploreIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/agreement",
//         name: "Agreement",
//         icon: HandshakeIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/wallet",
//         name: "Wallet",
//         icon: WalletRoundedIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/communications",
//         name: "Communications",
//         icon: QuestionAnswerRoundedIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/help-support",
//         name: "Help and Support",
//         icon: SupportAgentRoundedIcon,
//         hasChildren: false,
//     },
//     {
//         path: "/technology-provider-panel/setting",
//         name: "Setting",
//         icon: SettingsIcon,
//         hasChildren: false,
//         // children: [
//         //     {
//         //         name: 'Privacy Policy',
//         //         path: '/technology-provider-panel/setting/privacy-policy',
//         //     },
//         //     {
//         //         name: 'Change Password',
//         //         path: '/technology-provider-panel/setting/change-password',
//         //     },
//         //
//         //     {
//         //         name: 'Activities',
//         //         path: '/technology-provider-panel/setting/activities',
//         //     },
//         //     {
//         //         name: 'Delete Account',
//         //         path: '/technology-provider-panel/setting/delete-account',
//         //     },
//         // ]
//     },
//     {
//         path: "/technology-provider-panel/logout",
//         name: "Logout",
//         icon: ExitToAppRoundedIcon,
//         hasChildren: false
//     }
// ]
//
//
// const drawerWidth = 250;
//
// const openedMixin = (theme: Theme): CSSObject => ({
//     width: drawerWidth,
//     backgroundColor: customTheme.palette.primary.dark,
//     color: customTheme.palette.primary.light,
//     transition: theme.transitions.create('width', {
//         easing: theme.transitions.easing.sharp,
//         duration: theme.transitions.duration.enteringScreen,
//     }),
//     overflowX: 'hidden',
// });
//
// const closedMixin = (theme: Theme): CSSObject => ({
//     transition: theme.transitions.create('width', {
//         easing: theme.transitions.easing.sharp,
//         duration: theme.transitions.duration.leavingScreen,
//     }),
//     overflowX: 'hidden',
//     width: `calc(${theme.spacing(0)})`,
//     [theme.breakpoints.up('md')]: {
//         width: `calc(${theme.spacing(5)})`,
//     },
//     [theme.breakpoints.up('sm')]: {
//         width: `calc(${theme.spacing(10)})`,
//     },
// });
//
// const DrawerHeader = styled('div')(({theme}) => ({
//     display: 'flex',
//     alignItems: 'center',
//     justifyContent: 'flex-end',
//     padding: theme.spacing(0, 1),
//     // necessary for content to be below app bar
//     ...theme.mixins.toolbar,
// }));
//
// interface AppBarProps extends MuiAppBarProps {
//     open?: boolean;
// }
//
// const AppBar = styled(MuiAppBar, {
//     shouldForwardProp: (prop) => prop !== 'open',
// })<AppBarProps>(({theme, open}) => ({
//     zIndex: theme.zIndex.drawer + 1,
//     transition: theme.transitions.create(['width', 'margin'], {
//         easing: theme.transitions.easing.sharp,
//         duration: theme.transitions.duration.leavingScreen,
//     }),
//     ...(open && {
//         marginLeft: drawerWidth,
//         width: `calc(100% - ${drawerWidth}px)`,
//         transition: theme.transitions.create(['width', 'margin'], {
//             easing: theme.transitions.easing.sharp,
//             duration: theme.transitions.duration.enteringScreen,
//         }),
//     }),
// }));
//
// const Drawer = styled(MuiDrawer, {shouldForwardProp: (prop) => prop !== 'open'})(
//     ({theme, open}) => ({
//         width: drawerWidth,
//         flexShrink: 0,
//         whiteSpace: 'nowrap',
//         boxSizing: 'border-box',
//         backgroundColor: '#001F3F',
//         ...(open && {
//             ...openedMixin(theme),
//             '& .MuiDrawer-paper': openedMixin(theme),
//
//         }),
//         ...(!open && {
//             ...closedMixin(theme),
//             '& .MuiDrawer-paper': closedMixin(theme),
//         }),
//     }),
// );
// //progress bar
// const BorderLinearProgress = styled(LinearProgress)(({theme}) => ({
//     height: 10,
//     borderRadius: 5,
//     marginTop: 10,
//     [`&.${linearProgressClasses.colorPrimary}`]: {
//         backgroundColor: theme.palette.grey[theme.palette.mode === 'light' ? 200 : 800],
//     },
//     [`& .${linearProgressClasses.bar}`]: {
//         borderRadius: 5,
//         backgroundColor: customTheme.palette.primary.light,
//     },
// }));
// //language
// const countries = [
//     {
//         label: "France",
//         src: France,
//         link: " ",
//         value: "FR"
//     },
//     {
//         label: "Iran",
//         src: Iran,
//         link: " ",
//         value: "IR"
//     },
//     {
//         label: "USA",
//         src: USA,
//         link: " ",
//         value: "US"
//     }
// ];
// // const useStyles = makeStyles(theme => ({
// //     button: {
// //         display: "block",
// //         marginTop: theme.spacing(2)
// //     },
// //     formControl: {
// //         margin: theme.spacing(5),
// //         minWidth: 120,
// //         backgroundColor: "transparent"
// //     },
// //     select: {
// //         textAlign: "center",
// //         textDecoration: "none"
// //     }
// // }));
// export default function App() {
//     const classes = AppStyle();
//     const theme = useTheme();
//     const [open, setOpen] = React.useState(true);
//     const handleDrawerOpen = () => {
//         setOpen(true);
//     };
//
//     const handleDrawerClose = () => {
//         setOpen(false);
//     };
//     //language
//     const [country, setCountry] = React.useState(USA);
//     // const [openLang, setOpenLang] = React.useState(false);
//     //
//     // const handleChangeLang = event => {
//     //     setCountry(event.target.value);
//     // };
//     //
//     // const handleCloseLang = () => {
//     //     setOpenLang(false);
//     // };
//     //
//     // const handleOpenLang = () => {
//     //     setOpenLang(true);
//     // };
//
//
//     const [OpenAccordion, setOpenAccordion] = React.useState(false);
//     const handleOpenAccordion = (index) => {
//         console.log(menuItem[index], " handle Open Accordion");
//         if (menuItem[index].hasChildren === true) {
//             setOpenAccordion(!OpenAccordion);
//             console.log(OpenAccordion)
//         }
//     };
//
//     const [project, setOpenProject] = React.useState(false);
//     const projectClick = () => {
//         setOpenProject(!project);
//     };
//
//
//     return (
//         <ThemeProvider theme={customTheme}>
//             <BrowserRouter>
//                 <Box sx={{display: 'flex',}}>
//                     <CssBaseline/>
//                     <AppBar position="fixed" open={open} sx={{backgroundColor: customTheme.palette.primary.dark}}>
//                         <Toolbar>
//                             <IconButton
//                                 color="inherit"
//                                 aria-label="open drawer"
//                                 onClick={handleDrawerOpen}
//                                 edge="start"
//                                 sx={{
//                                     marginRight: 5,
//                                     ...(open && {display: 'none'}),
//                                     color: customTheme.palette.primary.light,
//                                 }}
//                             >
//                                 <MenuIcon/>
//                             </IconButton>
//                             <Box sx={{
//                                 display: 'flex',
//                                 justifyContent: 'space-between',
//                                 width: '100%',
//                                 alignItems: 'center'
//                             }}>
//                                 <img src={logo} alt="logo"/>
//                                 <Box sx={{
//                                     display: 'flex',
//                                     justifyContent: 'space-between',
//                                     alignItems: 'center'
//                                 }}>
//                                     <Badge badgeContent={4} color="primary" sx={{mx: 2}}>
//                                         <NotificationsActiveIcon sx={{color: customTheme.palette.primary.light}}/>
//                                     </Badge>
//                                 </Box>
//                             </Box>
//                         </Toolbar>
//                     </AppBar>
//                     <Drawer variant="permanent" open={open}>
//                         <DrawerHeader>
//                             <IconButton onClick={handleDrawerClose} sx={{color: customTheme.palette.primary.light,}}>
//                                 {theme.direction === 'rtl' ? <ChevronRightIcon/> : <ChevronLeftIcon/>}
//                             </IconButton>
//                         </DrawerHeader>
//                         <List sx={{paddingY: 0}}>
//                             {open ? (<Card sx={{
//                                     mx: 2,
//                                     marginBottom: 2,
//                                     padding: 2,
//                                     borderRadius: 0,
//                                     backgroundColor: customTheme.palette.primary.dark,
//                                     border: '1px white solid'
//                                 }}>
//                                     <CardActionArea>
//                                         <Box sx={{position: 'relative'}}>
//                                             <CardMedia
//                                                 component="img"
//                                                 height="170"
//                                                 width="170"
//                                                 image={profile}
//                                                 alt="profile"
//                                                 sx={{position: 'relative'}}
//                                             />
//                                             <Typography
//                                                 sx={{
//                                                     fontSize: '20px',
//                                                     color: customTheme.palette.primary.light,
//                                                     textAlign: 'center',
//                                                     position: 'absolute',
//                                                     bottom: 0,
//                                                     width: '100%'
//                                                 }}
//                                             >Marshian03</Typography>
//                                         </Box>
//                                         <CardContent sx={{p: 0, marginTop: 1}}>
//                                             <Typography gutterBottom component="div" sx={{
//                                                 fontSize: '12px',
//                                                 borderBottom: '1px white solid',
//                                                 color: customTheme.palette.primary.light,
//                                                 textAlign: 'center',
//                                                 paddingY: 0.5
//                                             }}>
//                                                 Technology Provider
//                                             </Typography>
//                                             <Typography sx={{
//                                                 fontSize: '12px',
//                                                 color: customTheme.palette.primary.light,
//                                                 textAlign: 'center',
//                                                 paddingY: 0.5
//                                             }}>
//                                                 Profile Completion
//                                             </Typography>
//                                             <BorderLinearProgress variant="determinate" value={75}/>
//                                         </CardContent>
//                                     </CardActionArea>
//                                 </Card>
//                             ) : null}
//                             {menuItem.map((item, index) => {
//                                 return item.hasChildren ? (
//                                     <ListItem disablePadding sx={{display: 'block'}} key={index}>
//                                         <ListItemButton
//                                             sx={{
//                                                 minHeight: 48,
//                                                 justifyContent: open ? 'initial' : 'center',
//                                                 px: 0
//                                             }}
//                                         >
//                                             {!open ? (<ListItemIcon
//                                                 sx={{
//                                                     px: 2.5,
//                                                     minWidth: 0,
//                                                     mr: open ? 2 : 'auto',
//                                                     justifyContent: 'center',
//                                                     color: customTheme.palette.primary.light,
//                                                 }}
//                                             >
//                                                 <item.icon/>
//                                             </ListItemIcon>) : null}
//                                             <ListItemText
//                                                 sx={{
//                                                     opacity: open ? 1 : 0,
//                                                 }}>
//                                                 <Accordion
//                                                     // className={classes.accardion}
//                                                     sx={{
//                                                         boxShadow: 'none',
//                                                         backgroundColor: customTheme.palette.primary.dark,
//                                                         color: customTheme.palette.primary.light,
//                                                         // '&:expended':{
//                                                         //     backgroundColor: customTheme.palette.primary.light,
//                                                         // }
//                                                     }}>
//                                                     <AccordionSummary
//                                                         expandIcon={<ExpandMoreIcon sx={{color: '#99C9FF'}}/>}
//                                                         aria-controls="panel1a-content"
//                                                         id="panel1a-header"
//                                                     >
//                                                         <item.icon
//                                                             sx={{
//                                                                 minWidth: 0,
//                                                                 mr: open ? 3 : 'auto',
//                                                                 justifyContent: 'center',
//                                                                 color: customTheme.palette.primary.light,
//                                                                 // px:1
//                                                             }}/>
//                                                         <Typography>{item.name}</Typography>
//                                                     </AccordionSummary>
//                                                     <AccordionDetails>
//                                                         <List>
//                                                             {"children" in item ? item.children.map((childIteme, index) => (
//                                                                 <ListItem disablePadding sx={{display: 'block'}}
//                                                                           key={index}>
//                                                                     <ListItemButton
//                                                                         component={Link}
//                                                                         to={childIteme.path}
//                                                                     >
//                                                                         <ListItemIcon
//                                                                             sx={{
//                                                                                 minWidth: 0,
//                                                                                 mr: open ? 2 : 'auto',
//                                                                                 justifyContent: 'center',
//                                                                                 color: customTheme.palette.primary.light,
//                                                                             }}
//                                                                         >
//                                                                             <MinimizeIcon/>
//                                                                         </ListItemIcon>
//                                                                         <ListItemText
//                                                                             sx={{opacity: open ? 1 : 0}}>{childIteme.name}</ListItemText>
//                                                                     </ListItemButton>
//                                                                 </ListItem>
//                                                             )) : ""}
//                                                         </List>
//                                                     </AccordionDetails>
//                                                 </Accordion>
//                                             </ListItemText>
//                                         </ListItemButton>
//                                     </ListItem>
//                                 ) : (
//                                     <ListItem disablePadding sx={{display: 'block'}} key={index}>
//                                         <ListItemButton
//                                             component={Link}
//                                             to={item.path}
//                                             sx={{
//                                                 minHeight: 48,
//                                                 justifyContent: open ? 'initial' : 'center',
//                                                 px: 2.5,
//                                             }}
//                                         >
//                                             <ListItemIcon
//                                                 sx={{
//                                                     minWidth: 0,
//                                                     mr: open ? 3 : 'auto',
//                                                     justifyContent: 'center',
//                                                     color: customTheme.palette.primary.light,
//                                                 }}
//                                             >
//                                                 <item.icon/>
//                                             </ListItemIcon>
//                                             <ListItemText sx={{opacity: open ? 1 : 0}}>{item.name}</ListItemText>
//                                         </ListItemButton>
//                                     </ListItem>
//                                 )
//                             })}
//                         </List>
//                     </Drawer>
//                     <Box component="main" sx={{flexGrow: 1}}>
//                         <DrawerHeader/>
//                         <Content/>
//                     </Box>
//                 </Box>
//             </BrowserRouter>
//         </ThemeProvider>
//     )
//         ;
// }
//
// if (document.getElementById('app')) {
//     const lang = document.getElementById('app').getAttribute("lang");
//     const currentLang = document.getElementById('app').getAttribute("current-lang");
//     createRoot(document.getElementById('app')).render(<App lang={lang} currentLang={currentLang}/>);
// }