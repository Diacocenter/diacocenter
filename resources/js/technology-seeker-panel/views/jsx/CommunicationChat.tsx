import * as React from "react";
import { Box, Divider } from "@mui/material";
import CommunicationChatTitle from "./CommunicationChatTitle";
import CommunicationChatTextBox from "./CommunicationChatTextBox";

interface Message {
    role: string;
    message: string;
    timestamp: string;
}

interface CommunicationChatProps {
    messages: Message[];
}

const CommunicationChat: React.FC<CommunicationChatProps> = ({ messages }) => {
    return (
        <Box className="scrollbar"
            sx={{
                display: "flex",
                flexDirection: "column",
                flexGrow: 1,
                overflowY: "scroll",
                mx:1,
                px: 3
            }}
        >
            {messages.map((message, index) => (
                <React.Fragment key={index}>
                    {index > 0 &&
                        messages[index - 1].timestamp !== message.timestamp && (
                            <Divider sx={{ fontSize: "small", my: 3 }}>
                                Date
                            </Divider>
                        )}
                    <CommunicationChatTextBox message={message} />
                </React.Fragment>
            ))}
        </Box>
    );
};

export default CommunicationChat;
