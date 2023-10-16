import React, { useState } from "react";
import { Box, InputAdornment, TextField, IconButton } from "@mui/material";
import SentimentSatisfiedOutlinedIcon from "@mui/icons-material/SentimentSatisfiedOutlined";
import SendOutlinedIcon from "@mui/icons-material/SendOutlined";
import AttachFileOutlinedIcon from "@mui/icons-material/AttachFileOutlined";

interface CommunicationChatInputProps {
    onSendMessage: (message: string) => void;
}

const CommunicationChatInput: React.FC<CommunicationChatInputProps> = ({
    onSendMessage,
}) => {
    const [message, setMessage] = useState<string>("");

    const handleSendMessage = () => {
        if (message.trim() !== "") {
            onSendMessage(message);
            setMessage("");
        }
    };

    const handleKeyDown = (event: React.KeyboardEvent) => {
        if (event.key === "Enter") {
            handleSendMessage();
        }
    };

    return (
        <Box
            sx={{
                display: "flex",
                flexGrow: 0,
                alignItems: "center",
                pt: 2,
                px: 2,
            }}
        >
            <TextField
                size="small"
                value={message}
                onChange={(e) => setMessage(e.target.value)}
                onKeyDown={handleKeyDown}
                fullWidth
                placeholder="Type your message"
                variant="outlined"
                InputProps={{
                    endAdornment: (
                        <InputAdornment position="end">
                            <IconButton sx={{ ml: 0.5 }} edge="end">
                                <SentimentSatisfiedOutlinedIcon />
                            </IconButton>
                            <IconButton sx={{ ml: 0.5 }} edge="end">
                                <AttachFileOutlinedIcon />
                            </IconButton>
                            <IconButton
                                sx={{ ml: 0.5 }}
                                edge="end"
                                onClick={handleSendMessage}
                            >
                                <SendOutlinedIcon />
                            </IconButton>
                        </InputAdornment>
                    ),
                }}
            />
        </Box>
    );
};

export default CommunicationChatInput;
