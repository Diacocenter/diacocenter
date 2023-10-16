import * as React from "react";
import List from "@mui/material/List";
import ListItem from "@mui/material/ListItem";
import ListItemText from "@mui/material/ListItemText";
import ListItemAvatar from "@mui/material/ListItemAvatar";
import Avatar from "@mui/material/Avatar";
import styled from "@emotion/styled";
import { Badge, BadgeProps, ListItemButton } from "@mui/material";
import customTheme from '../../custom-theme.js'


export interface Profile {
    id: number;
    avatar: string;
    username: string;
    role: string;
    date: string;
    isUnseen: boolean;
}

interface CommunicationSidebarProfileInterface {
    profile: Profile;
}

const CommunicationSidebarProfile: React.FC<CommunicationSidebarProfileInterface> = (
    props
) => {
    const StyledBadge = styled(Badge)<BadgeProps>(({ theme }) => ({
        "& .MuiBadge-badge": {
            right: 5,
            top: 0,
        },
    }));

    return (
        <ListItem sx={{ my: 1,py:0,px:1, bgcolor: customTheme.palette.primary.dark }}>
            <ListItemButton sx={{ m: 0, p: 0 }}>
                <ListItemAvatar>
                    <Avatar
                        src={props.profile.avatar}
                        sx={{
                            borderRadius: 0,
                            width: "45px",
                            height: "45px",
                        }}
                    ></Avatar>
                </ListItemAvatar>
                <ListItemText
                    sx={{ color: "#ffffff" }}
                    primary={props.profile.username || "Username"}
                    primaryTypographyProps={{variant:"body2"}}
                    secondary={props.profile.role || "Role"}
                    secondaryTypographyProps={{ color: "#cccccc" , variant:"subtitle1"}}
                />
                <ListItemText
                    sx={{ textAlign: "center", color: "#ffffff" }}
                    primary={props.profile.date || "Date"}
                    primaryTypographyProps={{variant:"subtitle1"}}
                />
                {props.profile.isUnseen && (
                    <StyledBadge variant="dot" color="primary" />
                )}
            </ListItemButton>
        </ListItem>
    );
};

export default CommunicationSidebarProfile;
