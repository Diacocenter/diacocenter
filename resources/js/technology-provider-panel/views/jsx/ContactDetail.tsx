import {
    Box,
    Container,
    FormControl,
    Grid,
    Typography,
    InputLabel,
    TextField,
    RadioGroup,
    Radio,
    FormControlLabel,
    Button,
    Autocomplete,
    Chip,
    useMediaQuery,
    useTheme, Divider, Snackbar, Alert, IconButton,
} from "@mui/material";
import ContactDetailInputLabel from "./ContactDetailInputLabel";
import 'filepond/dist/filepond.css';
import './../scss/filepond.scss'
import React, {FC, useState} from "react";
import axios from "axios";
import {route} from "../../helpers.js";
import {useMutation, useQuery} from "react-query";
import {useForm, SubmitHandler, Controller} from "react-hook-form";
import '@mui/material/styles';
import DoneIcon from '@mui/icons-material/Done';
import "react-dropzone-uploader/dist/styles.css";
import Dropzone from "react-dropzone-uploader";
import FileUploadIcon from "@mui/icons-material/FileUpload";



interface IFormInput {
    firstName: string;
    lastName: string;
}

const ContactDetail: FC = () => {
    //     Get Details Api
    const contactDetail = useQuery('contactDetail', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.details.index"));
        contactDetail.data = data.data;
        return contactDetail;
    });

    const [files, setFiles] = useState([])
    const theme = useTheme();
    const isLg = useMediaQuery(theme.breakpoints.up("lg"));
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");

    const {register, handleSubmit, control, setValue, getValues ,formState:{errors}} = useForm<IFormInput>({
        defaultValues: {}
    })

    const handleSlug =(e)=>{
        getSlug.mutate(e.target.value)
    }

    const onSubmit: SubmitHandler<IFormInput> = data => postContactDetails.mutate(data);

    const postContactDetails = useMutation(async (data) => {
        const response = await axios.put(route("api.web.v1.technology-provider-panel.details.update"), data);
        return response.data;
    }, {
        onSuccess: data => {
            setOpen(true);
            setStatus("success");
            setMessage("Your Data Saved successfully");
            window.setTimeout(() => {

            }, 1200);
        }, onError: () => {
            setOpen(true);
            setStatus("error");
            setMessage("Error! Please try later");
        }, onSettled: () => {
        }
    });
    const getSlug = useMutation(async (data) => {
        const response = await axios.post(route("api.web.v1.technology-provider-panel.getSlug"),{slug:data});
        return response.data;
    }, {
        onSuccess: data => {
        }, onError: () => {
        }, onSettled: () => {
        }
    });
    const headers = {
        "X-CSRF-TOKEN": document.head
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
    };
    const getUploadParams = ({ meta, response }) => {
        return { url: route("api.web.v1.technology-provider-panel.temporary-file.store"), headers };
    };
    const handleChangeStatus = ({ xhr }, status, file) => {
        if (status === "done") {
            setValue("file", xhr.response);
        }
    };

    if (contactDetail.isLoading) {
        return <div>loading...</div>;
    }
    return (
        <Container>
            <Snackbar open={open} autoHideDuration={6000} onClose={() => {
                setOpen(false);
            }} anchorOrigin={{vertical: "top", horizontal: "right"}}>
                <Alert onClose={() => {
                    setOpen(false);
                }} severity={status} sx={{width: "100%"}}>
                    {message}
                </Alert>
            </Snackbar>
            <Box>
                <Box
                    sx={{
                        marginTop: 4,
                        display: "flex",
                        flexDirection: "column",
                    }}
                >
                    <Typography component="h1" variant="h4">
                        Contact Detail
                    </Typography>
                    <Divider sx={{mt: 2, mb: 4, borderColor: "#000000"}}/>
                </Box>
                <Grid
                    container
                    sx={{
                        display: "flex",
                        alignItems: "center",
                        border: "1px solid gray",
                        padding: 2,
                    }}
                >
                    {/*<Grid*/}
                    {/*    item*/}
                    {/*    xs={12}*/}
                    {/*    sm={3}*/}
                    {/*    lg={4}*/}
                    {/*    sx={{*/}
                    {/*        height: "auto",*/}
                    {/*        display: "flex",*/}
                    {/*        alignItems: "center",*/}
                    {/*        justifyContent: "space-between",*/}
                    {/*    }}*/}
                    {/*>*/}
                    {/*    <Box*/}
                    {/*        sx={{*/}
                    {/*            display: "flex",*/}
                    {/*            alignItems: "center",*/}
                    {/*            justifyContent: "center",*/}
                    {/*        }}*/}
                    {/*        id="asghar"*/}
                    {/*    >*/}
                    {/*        /!*<Box*!/*/}
                    {/*        /!*    sx={{*!/*/}
                    {/*        /!*        height: 100,*!/*/}
                    {/*        /!*        width: 30,*!/*/}
                    {/*        /!*        marginLeft: 3,*!/*/}
                    {/*        /!*        display: "flex",*!/*/}
                    {/*        /!*        flexDirection: "column",*!/*/}
                    {/*        /!*        alignItems: "center",*!/*/}
                    {/*        /!*        justifyContent: "space-around",*!/*/}
                    {/*        /!*    }}*!/*/}
                    {/*        /!*>*!/*/}
                    {/*        /!*    <DriveFolderUploadIcon/>*!/*/}
                    {/*        /!*    <EditIcon/>*!/*/}
                    {/*        /!*    <DeleteOutlineIcon/>*!/*/}
                    {/*        /!*</Box>*!/*/}
                    {/*    </Box>*/}
                    {/*</Grid>*/}
                    <Grid
                        item
                        xs={12}

                        sx={{
                            height: "auto",
                            display: "flex",
                            alignItems: "center",
                            justifyContent: "center",
                        }}
                    >
                        <Grid>
                            <Grid
                                xs={12}
                                sm={10}
                                display="flex" justifyContent="space-between" alignItems="center"
                                item
                            >

                                   <Dropzone
                                       getUploadParams={
                                           getUploadParams
                                       }
                                       onChangeStatus={
                                           handleChangeStatus
                                       }
                                       // PreviewComponent={Preview}
                                       canRemove={true}
                                       inputContent={
                                           <>
                                               <Typography
                                                   marginRight={0.5}
                                                   color="gray.60"
                                               >
                                                   Select File
                                               </Typography>
                                               <FileUploadIcon
                                                   color="orange"
                                                   size="large"
                                               />
                                           </>
                                       }
                                       multiple={false}
                                       maxFiles={1}
                                       accept="image/*,audio/*,video/*"
                                   />
                                   <Typography
                                       sx={{
                                           color: "gray",
                                           fontFamily: "Montserrat",
                                       }}
                                       component="p"
                                   >
                                       The recommended size is between 600x600
                                       pixels and 1200x1200 pixels. It may not
                                       exceed 240 KB and must be a high-quality
                                       JPG (JPEG) without blurry or unsharp
                                       areas or visible pixels.
                                   </Typography>

                            </Grid>
                        </Grid>
                    </Grid>
                </Grid>
            </Box>
            <Box sx={{marginTop: "50px"}}>
                <Box>
                    <Box>
                        <Typography
                            sx={{marginBottom: 3}}
                            variant="h4"
                            gutterBottom
                        >
                            Personal Info
                        </Typography>
                    </Box>
                    <form onSubmit={handleSubmit(onSubmit)}>
                        <Box sx={{borderTop: 1, paddingTop: 2}}>
                            <Grid container spacing={4}>
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="first_name"
                                    />
                                    <TextField name="first_name" {...register('first_name')}
                                               InputProps={{sx: {borderRadius: 0,},}} required sx={{
                                        marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                        "& .MuiInputLabel-root": {
                                            "&.Mui-focused": {fontSize: "16.5px",},
                                        },
                                    }} variant="outlined" defaultValue={contactDetail.data.data.fname} id="first_name"
                                    />
                                </Grid>
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="last_name"
                                    />
                                    <TextField name="last_name" {...register('last_name')}
                                               InputProps={{sx: {borderRadius: 0,},}} required sx={{
                                        marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                        "& .MuiInputLabel-root": {"&.Mui-focused": {fontSize: "16.5px",},},
                                    }} id="last_name" label="Enter Your Last Name"
                                               variant="outlined" defaultValue={contactDetail.data.data.lname}
                                    />
                                </Grid>
                            </Grid>

                            <Grid
                                sx={{
                                    marginTop: "5px",
                                    display: "flex",
                                    alignItems: "center",
                                }}
                                container
                                spacing={4}
                            >
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="none"
                                        label="Gender"
                                    />
                                    <FormControl
                                        sx={{width: "100%", mt: 2}}
                                    >
                                        <RadioGroup
                                        defaultValue={contactDetail.data.data.sex}
                                        >
                                            <Grid container>
                                                <Grid
                                                    item
                                                    md={6}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        value="0"
                                                        control={<Radio/>}
                                                        {...register('sex')}
                                                        label="Male"
                                                        sx={{
                                                            "& .MuiFormControlLabel-label":
                                                                {
                                                                    fontSize:
                                                                        "20px",
                                                                },
                                                        }}
                                                    />
                                                </Grid>
                                                <Grid
                                                    item
                                                    md={6}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        value="1"
                                                        control={<Radio/>}
                                                        id="sex"
                                                        name="sex"
                                                        {...register('sex')}
                                                        label="Woman"
                                                        sx={{
                                                            "& .MuiFormControlLabel-label":
                                                                {
                                                                    fontSize:
                                                                        "20px",
                                                                },
                                                        }}
                                                    />
                                                </Grid>
                                                <Grid
                                                    item
                                                    md={6}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        value="2"
                                                        control={<Radio/>}
                                                        id="sex"
                                                        name="sex"
                                                        {...register('sex')}
                                                        label="Prefer Not To Say"
                                                        sx={{
                                                            "& .MuiFormControlLabel-label":
                                                                {
                                                                    fontSize:
                                                                        "20px",
                                                                    whiteSpace:
                                                                        isLg
                                                                            ? "nowrap"
                                                                            : "normal",
                                                                },
                                                        }}
                                                    />
                                                </Grid>
                                            </Grid>
                                        </RadioGroup>
                                    </FormControl>
                                </Grid>
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="email-address"
                                    />
                                    <TextField name="email" {...register('email')}
                                               InputProps={{sx: {borderRadius: 0,},}} required sx={{
                                        marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                        "& .MuiInputLabel-root": {
                                            "&.Mui-focused": {fontSize: "16.5px",},
                                        },
                                    }} id="email" variant="outlined" defaultValue={contactDetail.data.data.email}
                                               label="Enter Your Email Address"
                                    />
                                </Grid>
                            </Grid>
                            <Grid
                                sx={{marginTop: "5px"}}
                                container
                                spacing={4}
                            >
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="title"
                                    />
                                    {getSlug.data === 1 ?
                                        <Box display="flex" alignItems="center">
                                        <TextField onBlurCapture={(e)=>{handleSlug(e)}} name="slug" {...register('slug')} InputProps={{sx: {borderRadius: 0,},}}
                                                   required sx={{
                                            marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                            "& .MuiInputLabel-root": {
                                                "&.Mui-focused": {fontSize: "16.5px",},
                                            },
                                        }} id="slug" variant="outlined" defaultValue={contactDetail.data.data.slug}
                                                   label="Enter Your Slug" {...register("slug")} color="success"
                                        />
                                            <DoneIcon color="success"/>
                                        </Box>
                                    : getSlug.error ?
                                            <>
                                                <TextField onBlurCapture={(e)=>{handleSlug(e)}} name="slug" {...register('slug')} InputProps={{sx: {borderRadius: 0,},}}
                                                           required sx={{
                                                    marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                                    "& .MuiInputLabel-root": {
                                                        "&.Mui-focused": {fontSize: "16.5px",},
                                                    },
                                                }} id="slug" variant="outlined" defaultValue={contactDetail.data.data.slug}
                                                           label="Enter Your Slug" {...register("slug")} error
                                                />
                                                <Typography sx={{color:"red",margin:"0",fontSize:"15px"}}>{getSlug.error?.response.data.message}</Typography>
                                            </>
                                            :
                                            <TextField onBlurCapture={(e)=>{handleSlug(e)}} name="slug" {...register('slug')} InputProps={{sx: {borderRadius: 0,},}}
                                                       required sx={{
                                                marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
                                                "& .MuiInputLabel-root": {
                                                    "&.Mui-focused": {fontSize: "16.5px",},
                                                },
                                            }} id="slug" variant="outlined" defaultValue={contactDetail.data.data.slug}
                                                       label="Enter Your Slug" {...register("slug")}
                                            />
                                    }
                                </Grid>
                                <Grid xs={12} sm item>
                                    <ContactDetailInputLabel
                                        id="profile-slug"
                                    />
                                    {/*<TextField*/}
                                    {/*    InputProps={{*/}
                                    {/*        sx: {*/}
                                    {/*            borderRadius: 0,*/}
                                    {/*        },*/}
                                    {/*    }}*/}
                                    {/*    sx={{*/}
                                    {/*        marginTop: 1,*/}
                                    {/*        width: "100%",*/}
                                    {/*        "& .MuiInputLabel-asterisk": {*/}
                                    {/*            display: "none",*/}
                                    {/*        },*/}
                                    {/*        "& .MuiInputLabel-root": {*/}
                                    {/*            "&.Mui-focused": {*/}
                                    {/*                fontSize: "16.5px",*/}
                                    {/*            },*/}
                                    {/*        },*/}
                                    {/*    }}*/}
                                    {/*    id="profile-slug"*/}
                                    {/*    label="Enter your first nameYour profile add"*/}
                                    {/*    variant="outlined"*/}
                                    {/*/>*/}
                                </Grid>
                            </Grid>
                            <Box sx={{marginTop: 3, width: "100%"}}>
                                <ContactDetailInputLabel
                                    id="about_me"
                                />
                                <TextField
                                    InputProps={{sx: {borderRadius: 0,},}} sx={{
                                    width: "100%",
                                    mt: "15px",
                                    "& .MuiInputLabel-asterisk": {display: "none",},
                                    "& .MuiInputLabel-root": {"&.Mui-focused": {fontSize: "16.5px",},},
                                    "& .MuiInput-root": {height: "45px",},
                                }}
                                    multiline rows={5}
                                    label="write a short description about your hobby, interested, and yourself"
                                    variant="outlined"
                                    name="about_me" {...register("about_me")} id="about_me"
                                    defaultValue={contactDetail.data.data.about_me}
                                />
                            </Box>

                            {/*<Box sx={{marginTop: 3, width: "100%"}}>*/}
                            {/*    <ContactDetailInputLabel*/}
                            {/*        id="skills"*/}
                            {/*    />*/}
                            {/*    <ContactDetailAutocomplete/>*/}
                            {/*</Box>*/}
                            <Grid
                                container
                                sx={{
                                    mt: 6,
                                    display: "flex",
                                    alignItems: "center",
                                    justifyContent: "center",
                                }}
                            >
                                <Grid item xs={10} sm={4} marginY={3}>
                                    <Button fullWidth
                                        type="submit"
                                        variant="contained"
                                        sx={{
                                            backgroundColor: "#99C9FF",
                                            letterSpacing: '2px' ,textTransform:"capitalize"
                                        }}
                                    >
                                        Submit Changes
                                    </Button>
                                </Grid>
                            </Grid>
                        </Box>
                    </form>
                </Box>
            </Box>
        </Container>
    );
};

export default ContactDetail;
