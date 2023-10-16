import React from 'react'
import {Box, Divider, IconButton, InputAdornment, List, TextField} from "@mui/material";
import Avatar from "@mui/material/Avatar";
import ListItem from "@mui/material/ListItem";
import ListItemText from "@mui/material/ListItemText";
import SentimentSatisfiedOutlinedIcon from "@mui/icons-material/SentimentSatisfiedOutlined";
import AttachFileOutlinedIcon from "@mui/icons-material/AttachFileOutlined";
import SendOutlinedIcon from "@mui/icons-material/SendOutlined";
import CommunicationChatTextBox from "./CommunicationChatTextBox";
import {SubmitHandler, useForm} from "react-hook-form";
import {useMutation} from "react-query";
import axios from "./../../../axiosConfig.js";
import {route} from './../../helpers.js'




export default function ChatComponent(props){
    const {register, handleSubmit, control, setValue, getValues} = useForm({
        defaultValues: {}
    })

    const onSubmit: SubmitHandler = data => ChatComponent.mutate(data);

    const ChatComponent = useMutation(async (data) => {
        const response = await axios.put(route("api.web.v1.technology-provider-panel.communication.update",{communication:props.id}), data);
        return response.data;
    }, {
        onSuccess: data => {
        }, onError: () => {
        }, onSettled: () => {
        }
    });
    const scrollToBottom = () => {
        setTimeout(() => {
                const element = document.getElementById('section');
                function scrollBottom(element) {
                    element.scroll({top: element.scrollHeight, behavior: "smooth"})
                }            scrollBottom(element);
            }        ,
            300);};

    if (!props.information){
        return <div>loading....</div>
    }
    return(
        <>
    <Box  className="scrollbarThin"  sx={{ flexGrow: 0, mx:1 }}>
        <Box sx={{marginTop: 0, display: "flex", justifyContent: "space-between", alignItems: "center",}}>
            <Avatar alt="Roy Sharp" src={props.image.url} sx={{width: 70, height: 70, borderRadius: 0,}} variant="square"/>
            <List>
                <ListItem>
                    <ListItemText sx={{ textAlign: "center" }} primary={props.name} primaryTypographyProps={{fontSize: "20px", mb: 0.5,}} secondary={props.role} secondaryTypographyProps={{ fontSize: "12px" }}/>
                </ListItem>
            </List>
        </Box>
        <Divider sx={{ mt: 0, mb: 0, borderColor: "#000000" }} />
        <Box  className="scrollbar section"
              sx={{
                 display: "flex",
                 flexDirection: "column",
                 flexGrow: 1,
                 overflowY: "scroll",
                 mx:1,
                 px: 3
             }}
        >
            {props.information.map((message, index) => (
                <React.Fragment key={index}>
                    {/*{index > 0 &&*/}
                    {/*    message[index - 1].date !== message.date && (*/}
                    {/*        <Divider sx={{ fontSize: "small", my: 3 }}>*/}
                    {/*            Date*/}
                    {/*        </Divider>*/}
                        {/*)}*/}
                    <CommunicationChatTextBox message={message}/>
                </React.Fragment>
            ))}
        </Box>
    </Box>
      <form onSubmit={handleSubmit(onSubmit)}>
    <Box
        sx={{display: "flex", flexGrow: 0, alignItems: "center", pt: 2, px: 2,}}>
        <TextField size="small" id="message" {...register("message")} fullWidth placeholder="Type your message" variant="outlined" InputProps={{
            endAdornment: (<InputAdornment position="end">
                    <IconButton sx={{ ml: 0.5 }} edge="end">
                        <SentimentSatisfiedOutlinedIcon />
                    </IconButton>
                    <IconButton sx={{ ml: 0.5 }} edge="end">
                        <AttachFileOutlinedIcon />
                    </IconButton>
                    <IconButton sx={{ ml: 0.5 }} edge="end" type="submit">
                        <SendOutlinedIcon/>
                    </IconButton>
                </InputAdornment>
            ),
        }}
        />
    </Box>
      </form>
        </>
    )
}
