import {
    Badge,
    BadgeProps,
    Box,
    Divider,
    Grid,
    IconButton,
    InputBase,
    List,
    ListItemButton,
    styled,
    Tab,
    Tabs,
    tabsClasses,
    Typography,
} from "@mui/material";
import * as React from "react";
import { useMutation, useQuery } from "react-query";
import axios from "./../../../axiosConfig.js";
import { route } from "./../../helpers.js";
import ListItem from "@mui/material/ListItem";
import ListItemAvatar from "@mui/material/ListItemAvatar";
import Avatar from "@mui/material/Avatar";
import ListItemText from "@mui/material/ListItemText";
import SearchIcon from "@mui/icons-material/Search";
import SupportAgentOutlinedIcon from "@mui/icons-material/SupportAgentOutlined";
import avatarPic from "../../components/assets/avatar.png";
import ChatComponent from "./ChatComponent";
import { useLocation } from "react-router-dom";
import { useEffect } from "react";

export default function Communication() {
    const [chat, setChat] = React.useState({});
    const code = new URLSearchParams(window.location.search).get("q");
    // console.log(code, " href");

    const [messages, setMessages] = React.useState([]);
    const Communication = useQuery(
        "Communication",
        async () => {
            const { data } = await axios.get(
                route(
                    "api.web.v1.technology-provider-panel.communication.index"
                )
            );
            Communication.data = data.data;
            console.log(Communication.data);
            return Communication;
        },
        { refetchInterval: 3000 }
    );

    const CommunicationMessage = useMutation(
        async (data) => {
            const response = await axios.get(
                route(
                    "api.web.v1.technology-provider-panel.communication.show",
                    { communication: data }
                )
            );
            return response.data;
        },
        {
            onSuccess: (data) => {
                setChat(data);
            },
            onError: () => {},
            onSettled: () => {},
        }
    );
    useEffect(() => {
        if (code) {
            CommunicationMessage.mutate(code);
        }
    }, []);

    const handleSendMessage = (message: string) => {
        const newMessage = {
            role: "sender",
            message: message,
            timestamp: "Date",
        };
        setMessages((prevMessages) => [...prevMessages, newMessage]);
    };
    const StyledBadge = styled(Badge)<BadgeProps>(({ theme }) => ({
        "& .MuiBadge-badge": {
            left: "90%",
            top: "50%",
        },
    }));
    const [value, setValue] = React.useState(0);

    const handleChange = (event: React.SyntheticEvent, newValue: number) => {
        setValue(newValue);
    };
    if (Communication.isLoading) {
        return <div>loading.....</div>;
    }

    return (
        <Box sx={{ m: 0, p: 0, height: "100%", display: "flex", flexGrow: 1 }}>
            <Grid container sx={{ height: "100%" }}>
                <Grid item xs={2} md={3.5} sx={{ height: "100%" }}>
                    <Box sx={{ bgcolor: "#013265", px: 1, height: "100%" }}>
                        <Box
                            sx={{
                                mt: 0,
                                flexGrow: 1,
                                display: "flex",
                                flexDirection: "column",
                                maxWidth: { xs: 320, sm: 480 },
                                height: "100%",
                            }}
                        >
                            <Box sx={{ display: { xs: "none", md: "block" } }}>
                                <Tabs
                                    value={value}
                                    onChange={handleChange}
                                    variant="scrollable"
                                    scrollButtons
                                    aria-label="visible arrows tabs example"
                                    sx={{
                                        [`& .${tabsClasses.scrollButtons}`]: {
                                            "&.Mui-disabled": { opacity: 0.3 },
                                            color: { color: "#99c9ff" },
                                        },
                                        pt: 1,
                                    }}
                                >
                                    <Tab
                                        sx={{
                                            color: "#ffffff",
                                            px: 4,
                                            display: {
                                                xs: "none",
                                                lg: "block",
                                            },
                                        }}
                                        label={
                                            <StyledBadge
                                                badgeContent={
                                                    Communication.data.data
                                                        .length
                                                }
                                                color="primary"
                                            >
                                                <Typography
                                                    variant="body2"
                                                    sx={{
                                                        textTransform:
                                                            "capitalize",
                                                    }}
                                                >
                                                    All
                                                </Typography>
                                            </StyledBadge>
                                        }
                                        value={0}
                                        index={0}
                                    />
                                    <Tab
                                        sx={{
                                            color: "#ffffff",
                                            px: 4,
                                            display: {
                                                xs: "none",
                                                lg: "block",
                                            },
                                        }}
                                        label={
                                            <StyledBadge
                                                badgeContent={2}
                                                color="primary"
                                            >
                                                <Typography
                                                    variant="body2"
                                                    sx={{
                                                        textTransform:
                                                            "capitalize",
                                                    }}
                                                >
                                                    Seeker
                                                </Typography>
                                            </StyledBadge>
                                        }
                                        value={1}
                                        index={1}
                                    />
                                    <Tab
                                        sx={{
                                            color: "#ffffff",
                                            px: 4,
                                            display: {
                                                xs: "none",
                                                lg: "block",
                                            },
                                        }}
                                        label={
                                            <StyledBadge
                                                badgeContent={4}
                                                color="primary"
                                            >
                                                <Typography
                                                    variant="body2"
                                                    sx={{
                                                        textTransform:
                                                            "capitalize",
                                                    }}
                                                >
                                                    Provider
                                                </Typography>
                                            </StyledBadge>
                                        }
                                        value={2}
                                        index={2}
                                    />
                                    <Tab
                                        sx={{
                                            color: "#ffffff",
                                            px: 4,
                                            display: {
                                                xs: "none",
                                                lg: "block",
                                            },
                                        }}
                                        label={
                                            <StyledBadge
                                                badgeContent={4}
                                                color="primary"
                                            >
                                                <Typography
                                                    variant="body2"
                                                    sx={{
                                                        textTransform:
                                                            "capitalize",
                                                    }}
                                                >
                                                    Archived
                                                </Typography>
                                            </StyledBadge>
                                        }
                                        value={3}
                                        index={3}
                                    />
                                </Tabs>
                            </Box>
                            <Box
                                component="form"
                                sx={{
                                    display: { xs: "none", lg: "flex" },
                                    alignItems: "center",
                                    border: 1,
                                    borderColor: "#99c9ff",
                                    mt: 2,
                                    mx: 2.1,
                                }}
                            >
                                <IconButton sx={{ py: 0 }} aria-label="menu">
                                    <SearchIcon sx={{ color: "#99c9ff" }} />
                                </IconButton>
                                <InputBase
                                    sx={{ ml: 1, flex: 1, color: "#99c9ff" }}
                                />
                                <Divider
                                    sx={{
                                        height: 28,
                                        m: 0,
                                        borderColor: "#99c9ff",
                                    }}
                                    orientation="vertical"
                                />
                                <IconButton
                                    sx={{ py: 0 }}
                                    color="primary"
                                    aria-label="directions"
                                >
                                    <SupportAgentOutlinedIcon
                                        sx={{ color: "#99c9ff" }}
                                    />
                                </IconButton>
                            </Box>
                            <List
                                className="scrollbarThin"
                                sx={{ flex: "1 1 auto", overflowY: "scroll" }}
                            >
                                {Communication.data.data.map(
                                    (profile, index) => (
                                        <ListItem
                                            sx={{
                                                my: 1,
                                                py: 0,
                                                px: 1,
                                                bgcolor: { md: "#001f3f" },
                                            }}
                                            onClick={() => {
                                                CommunicationMessage.mutate(
                                                    profile.communication_id
                                                );
                                            }}
                                        >
                                            <ListItemButton sx={{ m: 0, p: 0 }}>
                                                <ListItemAvatar>
                                                    <Avatar
                                                        src={
                                                            profile.assigned_picture
                                                        }
                                                        sx={{
                                                            borderRadius: 0,
                                                            width: "45px",
                                                            height: "45px",
                                                        }}
                                                    ></Avatar>
                                                </ListItemAvatar>
                                                <ListItemText
                                                    sx={{
                                                        color: "#ffffff",
                                                        display: {
                                                            xs: "none",
                                                            md: "block",
                                                        },
                                                    }}
                                                    primary={
                                                        profile.assigned_fname +
                                                            " " +
                                                            profile.assigned_lname ||
                                                        "Username"
                                                    }
                                                    primaryTypographyProps={{
                                                        variant: "body2",
                                                    }}
                                                    secondary={
                                                        profile.assigned_role ||
                                                        "Role"
                                                    }
                                                    secondaryTypographyProps={{
                                                        color: "#cccccc",
                                                        variant: "subtitle1",
                                                    }}
                                                />
                                                <ListItemText
                                                    sx={{
                                                        textAlign: "right",
                                                        color: "#ffffff",
                                                        display: {
                                                            xs: "none",
                                                            md: "block",
                                                        },
                                                    }}
                                                    primary={
                                                        profile.date || "Date"
                                                    }
                                                    primaryTypographyProps={{
                                                        variant: "subtitle1",
                                                    }}
                                                />
                                                {profile.has_unread && (
                                                    <StyledBadge
                                                        variant="dot"
                                                        color="primary"
                                                        sx={{mr:1,
                                                            display: {
                                                                xs: "none",
                                                                md: "block",
                                                            },
                                                        }}
                                                    />
                                                )}
                                            </ListItemButton>
                                        </ListItem>
                                    )
                                )}
                            </List>
                        </Box>
                    </Box>
                </Grid>
                <Grid
                    item
                    xs={10}
                    md={8.5}
                    sx={{
                        height: "100%",
                        display: "flex",
                        flexDirection: "column",
                        px: 1,
                        py: 2,
                    }}
                >
                    {/*{(Object.keys(Chat.information).length)?(""):(<CommunicationChat messages={messages} />)}*/}
                    {Object.keys(chat).length ? (
                        <ChatComponent
                            information={chat.data}
                            image={chat.image}
                            role={chat.role}
                            name={chat.name}
                            id={Communication.data.data.map(
                                (profile, index) => profile.communication_id
                            )}
                        />
                    ) : (
                        "Please Select A Chat"
                    )}
                    {/*<CommunicationChatInput onSendMessage={handleSendMessage} />*/}
                </Grid>
            </Grid>
        </Box>
    );
}
