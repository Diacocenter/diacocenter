import {
    Avatar,
    Box,
    Divider,
    List,
    ListItem,
    ListItemText,
    Typography,
} from "@mui/material";
import * as React from "react";
import avatarPic from "../../components/assets/avatar.png";
export default function CommunicationChat() {
    return (
        <Box sx={{ flexGrow: 0, mx:1 }}>
            <Box
                sx={{
                    marginTop: 0,
                    display: "flex",
                    justifyContent: "space-between",
                    alignItems: "center",
                }}
            >
                <Avatar
                    alt="Roy Sharp"
                    src={avatarPic}
                    sx={{
                        width: 70,
                        height: 70,
                        borderRadius: 0,
                    }}
                    variant="square"
                />
                <List>
                    <ListItem>
                        <ListItemText
                            sx={{ textAlign: "center" }}
                            primary="Username"
                            primaryTypographyProps={{
                                fontSize: "20px",
                                mb: 0.5,
                            }}
                            secondary="Role"
                            secondaryTypographyProps={{ fontSize: "12px" }}
                        />
                    </ListItem>
                </List>
            </Box>
            <Divider sx={{ mt: 0, mb: 0, borderColor: "#000000" }} />
        </Box>
    );
}
