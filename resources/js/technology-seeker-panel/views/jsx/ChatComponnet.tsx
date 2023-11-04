import React from 'react'
import {Box, Divider, IconButton, InputAdornment, List, Menu, MenuItem, TextField} from "@mui/material";
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
import {Simulate} from "react-dom/test-utils";
import reset = Simulate.reset;
import EmojiPicker, {EmojiClickData} from "emoji-picker-react";
import KeyboardBackspaceIcon from "@mui/icons-material/KeyboardBackspace";




export default function ChatComponent(props){
    const [anchorEl, setAnchorEl] = React.useState<null | HTMLElement>(null);
    const openE = Boolean(anchorEl);

    const {register, handleSubmit, control, setValue, getValues,reset} = useForm({
        defaultValues: {}
    })
    const onSubmit: SubmitHandler = data => {
        ChatComponent.mutate({"message":data.message,"assign":props.userid});
        reset()
    };

    const ChatComponent = useMutation(async (data) => {
        if(props.id) {
            return await axios.put(route("api.web.v1.technology-seeker-panel.communication.update",{communication:props.id}), data);
        }else {
            return await axios.post(route("api.web.v1.technology-seeker-panel.communication.store"), data);
        }
    }, {
        onSuccess: data => {
        }, onError: () => {
        }, onSettled: () => {
        }
    });

    const handleClose = ({back}) => {
        setAnchorEl(null);
    };

    const scrollToBottom = () => {
        setTimeout(() => {
                const element = document.getElementById('section');
                function scrollBottom(element) {
                    element.scroll({top: element.scrollHeight, behavior: "smooth"})
                }            scrollBottom(element);
            }        ,
            300);};

    function onClickShowEmoji(emojiData: EmojiClickData, event: MouseEvent) {
        setMessage(
            (message) =>
                message + (emojiData.isCustom ? emojiData.unified : emojiData.emoji)
        );
    }
    const openEmoji = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl(event.currentTarget);
    };
    // if (!props?.information){
    //     return <div>loading....</div>
    // }
    return(
        <>
            <Box  className="scrollbar"  sx={{ flexGrow: 0, mx:1 ,height:"91vh" }}>
                <Box sx={{display:"flex",flexDirection:"row"}}>
                    <IconButton >
                        <KeyboardBackspaceIcon onClick={(e)=>props.back()}/>
                    </IconButton>
                    <Box sx={{marginTop: 0, display: "flex", justifyContent: "space-between", alignItems: "center",}}>
                        <Avatar alt="Roy Sharp" src={props.image} sx={{width: 70, height: 70, borderRadius: 0,}} variant="square"/>
                        <List>
                            <ListItem>
                                <ListItemText sx={{ textAlign: "center" }} primary={props.name} primaryTypographyProps={{fontSize: "20px", mb: 0.5,}} secondary={props.role} secondaryTypographyProps={{ fontSize: "12px" }}/>
                            </ListItem>
                        </List>
                    </Box>
                </Box>
                <Divider sx={{ mt: 0, mb: 0, borderColor: "#000000" }} />
                <Box  className="scrollbar"
                      sx={{
                          display: "flex",
                          flexDirection: "column",
                          flexGrow: 1,
                          overflowY: "scroll",
                          mx:1,
                          px: 3
                      }}
                >
                    {props.information?.map((message, index) => (
                        <React.Fragment key={index}>
                            {/*{index > 0 &&*/}
                            {/*    message[index - 1].date !== message.date && (*/}
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
                                <IconButton id="basic-button" sx={{backgroundColor: "inputs", mx: 1}}
                                            aria-controls={openE ? 'basic-menu' : undefined}
                                            aria-haspopup="true"
                                            aria-expanded={openE ? 'true' : undefined}
                                            onClick={openEmoji}
                                >
                                    <SentimentSatisfiedOutlinedIcon />
                                </IconButton>
                                <Menu
                                    sx={{position: "absolute", bottom: 100,padding:0}}
                                    id="basic-menu"
                                    anchorEl={anchorEl}
                                    open={openE}
                                    onClose={handleClose}
                                    MenuListProps={{
                                        'aria-labelledby': 'basic-button',
                                    }}
                                >
                                    <MenuItem sx={{padding:0}}>
                                        <EmojiPicker height={500}
                                                     onEmojiClick={onClickShowEmoji}/>
                                    </MenuItem>
                                </Menu>
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
