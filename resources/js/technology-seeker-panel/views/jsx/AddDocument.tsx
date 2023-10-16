import {
    Alert,
    Box,
    Button,
    Divider,
    Fab,
    Grid, Snackbar,
    Stack,
    TextField,
    Typography,
} from "@mui/material";
import * as React from "react";
import {FilePond} from "react-filepond";
import {useState} from "react";
import {route} from './../../helpers.js';
import 'filepond/dist/filepond.css';
import {useMutation} from "react-query";
import axios from "axios";
import {SubmitHandler, useForm} from "react-hook-form";
import Dropzone from "react-dropzone-uploader";
import FileUploadIcon from "@mui/icons-material/FileUpload";
import {Simulate} from "react-dom/test-utils";
import reset = Simulate.reset;

interface IFormInput {
    firstName: string;
    lastName: string;
}

export default function AddDocument() {
    const [files,setFiles] = useState([])
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");

    const {register, handleSubmit, control, setValue, getValues} = useForm<IFormInput>({
        defaultValues: {}
    })

    const onSubmit: SubmitHandler<IFormInput> = data => postDocument.mutate(data);

    const postDocument = useMutation(async (data) => {
        const response = await axios.post(route("api.web.v1.technology-seeker-panel.document.store"), data);
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

    const Preview = ({ meta }) => {
        const { name, percent, status } = meta;
        return (
            <span
                style={{
                    alignSelf: "flex-start",
                    margin: "10px 3%",
                    fontFamily: "Helvetica",
                }}
            >
            {name} , {Math.round(percent)}% , {status}
        </span>
        );
    };

    const headers = {
        "X-CSRF-TOKEN": document.head
            .querySelector('meta[name="csrf-token"]')
            .getAttribute("content"),
    };
    const getUploadParams = ({ meta, response }) => {
        return { url: route("api.web.v1.technology-seeker-panel.temporary-file.store"), headers };
    };
    const handleChangeStatus = ({ xhr }, status, file) => {
        if (status === "done") {
            setValue("file", xhr.response);
        }
    };

    return (
        <>
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
                        marginTop: 8,
                        display: "flex",
                        flexDirection: "column",
                    }}
                >
                    <Typography component="h1" variant="h4">
                        Add Documents
                    </Typography>
                    <Divider sx={{mt: 2, mb: 4}}/>
                </Box>
                <form onSubmit={handleSubmit(onSubmit)}>
                    <Box
                        component="form"
                        sx={{
                            my: 3,
                            display: "flex",
                            alignItems: 'center',
                            flexDirection: {xs: "column", md: "row"},
                        }}
                        autoComplete="off"
                    >
                        <Grid container>
                            <Grid item xs={12} md={11}>
                                <TextField
                                    fullWidth
                                    sx={{
                                        my: 2,
                                    }}
                                    {...register("title")}
                                    required
                                    id="title"
                                    label="Title"
                                />
                            </Grid>
                        </Grid>
                        <Grid container>
                            <Grid item xs={12} md={11}>
                                <Stack
                                    direction="row"
                                    alignItems="center"
                                    spacing={2}
                                >
                                    <Dropzone
                                        getUploadParams={
                                            getUploadParams
                                        }
                                        PreviewComponent={Preview}
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
                                </Stack>
                            </Grid>
                        </Grid>
                    </Box>
                    <Grid container justifyContent={"center"}>
                        <Grid item xs={12} md={4} lg={3} textAlign={"center"}>
                            <Button
                                type="submit"
                                fullWidth
                                sx={{
                                    mb: 4,textTransform:"capitalize"
                                }}
                                variant="contained"
                            >
                                Add Document
                            </Button>
                        </Grid>
                    </Grid>
                </form>
            </Box>
        </>
    );
}
