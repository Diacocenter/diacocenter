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
    tabsClasses, ListItemButton,
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
import ListItem from "@mui/material/ListItem";
import ListItemAvatar from "@mui/material/ListItemAvatar";
import Avatar from "@mui/material/Avatar";
import ListItemText from "@mui/material/ListItemText";

export default function CommunicationSidebar(props) {

    return (
        <Box sx={{bgcolor: "#013265", px: 1, height: "100%"}}>
            <Box sx={{mt: 0, flexGrow: 1, display: "flex", flexDirection: "column", maxWidth: {xs: 320, sm: 480}, height: "100%",}}>
                {/*<Tabs  value={value} onChange={handleChange} variant="scrollable" scrollButtons aria-label="visible arrows tabs example" sx={{[`& .${tabsClasses.scrollButtons}`]: {"&.Mui-disabled": {opacity: 0.3}, color: {color: "#99c9ff"},}, pt: 1,}}>*/}
                {/*    <Tab sx={{color: "#ffffff", px: 4}} label={<StyledBadge badgeContent={props.data.length} color="primary">*/}
                {/*                <Typography variant="body2" sx={{textTransform: "capitalize"}}>*/}
                {/*                    All*/}
                {/*                </Typography>*/}
                {/*            </StyledBadge>} value={0} index={0}/>*/}
                {/*    <Tab sx={{color: "#ffffff", px: 4}} label={*/}
                {/*            <StyledBadge badgeContent={2} color="primary">*/}
                {/*                <Typography variant="body2" sx={{textTransform: "capitalize"}}>*/}
                {/*                    Seeker*/}
                {/*                </Typography>*/}
                {/*            </StyledBadge>} value={1} index={1}/>*/}
                {/*    <Tab sx={{color: "#ffffff", px: 4}} label={*/}
                {/*            <StyledBadge badgeContent={4} color="primary">*/}
                {/*                <Typography variant="body2" sx={{textTransform: "capitalize"}}>*/}
                {/*                    Provider*/}
                {/*                </Typography>*/}
                {/*            </StyledBadge>} value={2} index={2}/>*/}
                {/*    <Tab*/}
                {/*        sx={{color: "#ffffff", px: 4}}*/}
                {/*        label={*/}
                {/*            <StyledBadge badgeContent={4} color="primary">*/}
                {/*                <Typography variant="body2" sx={{textTransform: "capitalize"}}>*/}
                {/*                    Archived*/}
                {/*                </Typography>*/}
                {/*            </StyledBadge>} value={3} index={3}/>*/}
                {/*</Tabs>*/}
                <Box component="form" sx={{display: {xs:"none", }, alignItems: "center", border: 1, borderColor: "#99c9ff", mt: 2, mx: 2.1,}}>
                    <IconButton sx={{py: 0}} aria-label="menu">
                        <SearchIcon sx={{color: "#99c9ff"}}/>
                    </IconButton>
                    <InputBase sx={{ml: 1, flex: 1, color: "#99c9ff"}}/>
                    <Divider sx={{height: 28, m: 0, borderColor: "#99c9ff"}} orientation="vertical"/>
                    <IconButton sx={{py: 0}} color="primary" aria-label="directions">
                        <SupportAgentOutlinedIcon sx={{color: "#99c9ff"}}/>
                    </IconButton>
                </Box>
                <List className="scrollbarThin" sx={{flex: "1 1 auto", overflowY: "scroll",}}>
                </List>
            </Box>
        </Box>
    );
}
