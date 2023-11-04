import * as React from "react";
import Box from "@mui/material/Box";
import Typography from "@mui/material/Typography";
import IconButton from "@mui/material/IconButton";
import {
    Button,
    Stack, Popover, Modal,
} from "@mui/material";
import {useMutation, useQuery} from "react-query";
import axios from "axios";
import {route} from './../../helpers.js'
import Select,{components } from 'react-select';
import CloseIcon from '@mui/icons-material/Close';
import LoupeIcon from '@mui/icons-material/Loupe';
import {useState} from "react";
import AsyncSelect from "react-select/async";
const style = {
    position: 'absolute' as 'absolute',
    top: '50%',
    left: '50%',
    transform: 'translate(-50%, -50%)',
    width: 400,
    bgcolor: 'background.paper',
    borderRadius:"10px",
    boxShadow: 24,
    p: 4,
};
const {  Option } = components;
const IconOption = (props) =>(
    <Option {...props}>
        <img src={props.data.profile}  style={{ height: '30px', width: '30px', borderRadius: '50%', marginRight: '10px' }}/>
        {props.data.short_label}
    </Option>
);
export default function EmptyChat({check}) {
    const [open, setOpen] = React.useState(false);
    const [listPost, setListPost] = useState([]);
    const [loading, setLoading] = useState(false);
    const [preview , setPreview] = useState([])
    const [inputValue, setInputValue] = useState('');

    const handleOpen = () => setOpen(true);
    const handleClose = () => setOpen(false);
    const Control = ({ children, ...props }) => {
        const style = { cursor: 'pointer' };
        return (
            <components.Control {...props} className="border-0 p-0 "  >
                {children}
            </components.Control>
        );
    };
    const searchingKeyword = useMutation(async (data) => {
        const response = await axios.post(route('api.web.v1.technology-provider-panel.search'), data);
        return response.data;
    }, {
        onSuccess: (res) => {
            setListPost(res.data);
            setLoading(false);
        }, onError: () => {
            console.log("error in searching");
            setLoading(false);
        }, onSettled: () => {
        }
    });

    const loadOptions = inputValue => {
        return new Promise((resolve, reject) => {
            const filteredOptions = listPost.filter(option => option.label.includes(inputValue));
            resolve(filteredOptions);
        });
    };

    const handleChange =  (e)=> {
        setInputValue(e)
         searchingKeyword.mutate({keyword: e})
    }
    const handleSelected =  (e)=> {
        setPreview(e)
    }

    const handledelete = () => {
        setPreview([]);
        setListPost([]);
    }
    console.log(listPost)
    return (
        <>
            <Box
                sx={{
                    height:"100%",
                    backgroundColor:"#ecf0f1"
                }}
            >
                <Typography sx={{
                    width:"100%",
                    height:"100%",
                    display:"flex",
                    justifyContent:"center",
                    alignItems:"center",
                    opacity:"0.5"
                }}>
                    <IconButton onClick={handleOpen}>Start A chat...<LoupeIcon /></IconButton>
                </Typography>
                <Modal
                    open={open}
                    onClose={handleClose}
                    aria-labelledby="modal-modal-title"
                    aria-describedby="modal-modal-description"
                >
                    <Box sx={style}>
                        <Typography id="modal-modal-title" variant="h6" component="h2">
                            Users
                        </Typography>
                        <Typography id="modal-modal-description" sx={{ mt: 2 }}>
                            <AsyncSelect name="users" loadOptions={loadOptions}  inputValue={inputValue} onChange={ (e) => {handleSelected(e)}}
                                         onInputChange={(e) => {handleChange(e)}} className="form-control border-0" defaultOptions cacheOptions clear
                                         theme={(theme) => ({
                                             ...theme,
                                             borderRadius: 4,
                                             colors: {
                                                 ...theme.colors,
                                                 primary25: '#D5D5D5',
                                             },
                                         })}
                            />
                            {preview.length===0?"":
                                <Box sx={{display:"flex",flexDirection:"row"}}>
                                    <img style={{ height: '30px', width: '30px', borderRadius: '50%', marginRight: '10px',marginTop:7 }}  src={preview.profile}/>
                                    <Typography sx={{marginTop:1}}>{preview.label}</Typography>
                                    <IconButton>
                                        <CloseIcon onClick={handledelete}/>
                                    </IconButton>
                                </Box>
                            }
                            <Button
                                disabled={preview.length===0?true:false}
                                onClick={()=>check({
                                    id : preview.id,
                                    image : preview.profile,
                                    name : preview.label,
                                    role : preview.role,
                                })}
                                type={"submit"}
                                sx={{
                                    borderColor: "orange.main",
                                    backgroundColor: "orange.main",
                                    px: 7.5,
                                    mt:1,
                                    mx:0
                                }}>
                                Add
                            </Button>
                        </Typography>
                    </Box>
                </Modal>
            </Box>
        </>
    );
}
