import {
    Badge,
    BadgeProps,
    Box,
    Divider,
    IconButton,
    InputBase,
    List,
    Paper,
    Tab,
    Tabs,
    Typography,
    styled,
    tabsClasses,
} from "@mui/material";
import SupportAgentOutlinedIcon from "@mui/icons-material/SupportAgentOutlined";
import AddOutlinedIcon from "@mui/icons-material/AddOutlined";
import * as React from "react";
import CommunicationSidebarProfile, {
    Profile,
} from "./CommunicationSidebarProfile";
import SearchIcon from '@mui/icons-material/Search';
import avatarPic from "../../components/assets/avatar.png";
import avatarPic2 from "../../components/assets/avatar2.png";
import customTheme from '../../custom-theme.js'

export default function CommunicationSidebar() {
    const [value, setValue] = React.useState(0);

    const handleChange = (event: React.SyntheticEvent, newValue: number) => {
        setValue(newValue);
    };

    const StyledBadge = styled(Badge)<BadgeProps>(({ theme }) => ({
        "& .MuiBadge-badge": {
            left: "90%",
            top: "50%",
        },
    }));

    const dynamicProfiles: Profile[] = [
        {
            id: 1,
            avatar: avatarPic,
            username: "John Doe",
            role: "Provider",
            date: "Yesterday",
            isUnseen: true,
        },
        {
            id: 2,
            avatar: avatarPic2,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: false,
        },
        {
            id: 3,
            avatar: avatarPic2,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: true,
        },
        {
            id: 4,
            avatar: avatarPic,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: true,
        },
        {
            id: 5,
            avatar: avatarPic,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: false,
        },
        {
            id: 6,
            avatar: avatarPic2,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: true,
        },
        {
            id: 7,
            avatar: avatarPic,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: false,
        },
        {
            id: 8,
            avatar: avatarPic2,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: true,
        },
        {
            id: 9,
            avatar: avatarPic,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: false,
        },
        {
            id: 10,
            avatar: avatarPic2,
            username: "Jane Smith",
            role: "Admin",
            date: "Wednesday",
            isUnseen: true,
        },
    ];

    return (

        <Box sx={{ bgcolor: customTheme.palette.primary.main, px: 1, height: "100%" }}>
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
                <Tabs
                    textColor="white"
                    indicatorColor="white"
                    value={value}
                    onChange={handleChange}
                    variant="scrollable"
                    scrollButtons
                    aria-label="visible arrows tabs example"
                    sx={{
                        [`& .${tabsClasses.scrollButtons}`]: {
                            "&.Mui-disabled": { opacity: 0.3 },
                            color: { color: customTheme.palette.primary.light },
                        },
                        pt: 1,
                    }}
                >
                    <Tab

                        sx={{ color: "#ffffff", px: 4 }}
                        label={
                            <StyledBadge badgeContent={4} color="gray">
                                <Typography
                                    variant="body2"
                                    sx={{ textTransform: "capitalize" }}
                                >
                                    All
                                </Typography>
                            </StyledBadge>
                        }
                        value={0}
                        index={0}
                    />
                    <Tab
                        sx={{ color: "#ffffff", px: 4 }}
                        label={
                            <StyledBadge badgeContent={4} color="gray">
                                <Typography
                                    variant="body2"
                                    sx={{ textTransform: "capitalize" }}
                                >
                                    Seeker
                                </Typography>
                            </StyledBadge>
                        }
                        value={1}
                        index={1}
                    />
                    <Tab
                        sx={{ color: "#ffffff", px: 4 }}
                        label={
                            <StyledBadge badgeContent={4} color="gray">
                                <Typography
                                    variant="body2"
                                    sx={{ textTransform: "capitalize" }}
                                >
                                    Provider
                                </Typography>
                            </StyledBadge>
                        }
                        value={2}
                        index={2}
                    />
                    <Tab
                        sx={{ color: "#ffffff", px: 4 }}
                        label={
                            <StyledBadge badgeContent={4} color="gray">
                                <Typography
                                    variant="body2"
                                    sx={{ textTransform: "capitalize" }}
                                >
                                    Archived
                                </Typography>
                            </StyledBadge>
                        }
                        value={3}
                        index={3}
                    />
                </Tabs>
                <Box
                    component="form"
                    sx={{
                        display: "flex",
                        alignItems: "center",
                        border: 1,
                        borderColor: customTheme.palette.primary.light,
                        mt: 2,
                        mx: 2.1,
                    }}
                >
                    <IconButton sx={{ py:0 }} aria-label="menu">
                        <SearchIcon sx={{ color: customTheme.palette.primary.light }} />
                    </IconButton>
                    <InputBase sx={{ ml: 1, flex: 1, color: customTheme.palette.primary.light }} />
                    <Divider
                        sx={{ height: 28, m: 0, borderColor: customTheme.palette.primary.light }}
                        orientation="vertical"
                    />
                    <IconButton sx={{ py:0 }} color="primary" aria-label="directions">
                        <SupportAgentOutlinedIcon sx={{ color: customTheme.palette.primary.light }} />
                    </IconButton>
                </Box>
                <List className="scrollbar"
                    sx={{
                        flex: "1 1 auto",
                        overflowY: "scroll",
                    }}
                >
                    {dynamicProfiles.map((profile, index) => (
                        <CommunicationSidebarProfile
                            profile={profile}
                            key={profile.id}
                        />
                    ))}
                </List>
            </Box>
        </Box>
    );
}
