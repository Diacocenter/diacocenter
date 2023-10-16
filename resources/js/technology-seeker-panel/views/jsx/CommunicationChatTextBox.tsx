import React from "react";
import Paper from "@mui/material/Paper";
import Typography from "@mui/material/Typography";
import { Box, Grid } from "@mui/material";

interface Message {
    role: string;
    message: string;
    timestamp: string;
}

interface CommunicationChatTextBoxProps {
    message: Message;
}

const CommunicationChatTextBox: React.FC<CommunicationChatTextBoxProps> = ({
                                                                               message,
                                                                           }) => {
    const isSender = message.is_sender === true;

    return (
        <Grid container justifyContent={isSender ? "flex-end" : "flex-start"}>
            <Grid item xs={12} md={5.5} lg={5.5}>
                <Paper
                    elevation={0}
                    sx={{
                        my: 1,
                        p: 1,
                        backgroundColor: isSender ? "#eeeeee" : "#e9f6ff",
                    }}
                >
                    <Box
                        sx={{
                            display: "flex",
                            flexDirection: "row",
                            justifyContent: "space-between",
                        }}
                    >
                        <Typography sx={{ fontWeight: "bold" }} variant="body1">
                            {isSender?("You"):(message.name)}
                        </Typography>
                        <Typography variant="caption">
                            {message.date}
                        </Typography>
                    </Box>
                    <Box sx={{ }}>
                        <Typography
                            sx={{
                                overflowWrap:"anywhere",
                                display: "flex",
                                flexDirection: "row",
                                justifyContent: "space-between",}} variant="body1" component={"span"}>
                            {message.message}
                        </Typography>
                    </Box>
                </Paper>
            </Grid>
        </Grid>
    );
};

export default CommunicationChatTextBox;
