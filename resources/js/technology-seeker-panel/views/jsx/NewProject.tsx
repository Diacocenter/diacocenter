import {
    Accordion,
    AccordionDetails,
    AccordionSummary,
    Autocomplete,
    Box,
    Button,
    Chip,
    Container,
    Dialog,
    DialogActions,
    DialogContent,
    DialogContentText,
    DialogTitle,
    Divider,
    FormControl,
    Grid,
    IconButton,
    ImageList,
    ImageListItem,
    InputAdornment,
    InputLabel,
    List,
    ListItem,
    Menu,
    MenuItem,
    OutlinedInput,
    Select,
    Table,
    TableBody,
    TableCell,
    TableContainer,
    TableHead,
    TableRow,
    TextField,
    Typography,
    tableCellClasses,
    Snackbar,
    Alert,
} from "@mui/material";
import CloseIcon from "@mui/icons-material/Close";
import React, { useEffect, useState } from "react";
import AddIcon from "@mui/icons-material/Add";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import PersonOutlineOutlinedIcon from "@mui/icons-material/PersonOutlineOutlined";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import FormatListBulletedOutlinedIcon from "@mui/icons-material/FormatListBulletedOutlined";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import BusinessCenterOutlinedIcon from "@mui/icons-material/BusinessCenterOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import WorkOutlineOutlinedIcon from "@mui/icons-material/WorkOutlineOutlined";
import DriveFileRenameOutlineOutlinedIcon from "@mui/icons-material/DriveFileRenameOutlineOutlined";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import styled from "@emotion/styled";
import FormatAlignLeftIcon from "@mui/icons-material/FormatAlignLeft";
import FormatListBulletedIcon from "@mui/icons-material/FormatListBulleted";
import AddCircleOutlineIcon from "@mui/icons-material/AddCircleOutline";
import { useFormik } from "formik";
import { set, SubmitHandler, useForm } from "react-hook-form";
import { useMutation, useQuery } from "react-query";
import axios from "./../../../axiosConfig.js";
import { route } from "./../../helpers.js";
import "react-dropzone-uploader/dist/styles.css";
import Dropzone from "react-dropzone-uploader";
import customTheme from "../../custom-theme.js";

interface Skill {
    title: string;
}

const NewProjects = () => {
    const skills: Skill[] = [
        { title: "UI Designer" },
        { title: "UX Designer" },
        { title: "Designer" },
        { title: "Full Stack" },
        { title: "Frontend Developer" },
        { title: "Backend Developer" },
    ];

    const backgroundColors = (status) => {
        let backgroundColor = null;
        if (status === "Confirmed") backgroundColor = "#e9fff2";
        else if (status === "Pending") backgroundColor = "#e6e6e6";
        else backgroundColor = "#ffe9e9";
        return backgroundColor;
    };

    const itemData = [
        {
            img: "https://images.unsplash.com/photo-1551963831-b3b1ca40c98e",
            title: "Breakfast",
        },
        {
            img: "https://images.unsplash.com/photo-1551782450-a2132b4ba21d",
            title: "Burger",
        },
        {
            img: "https://images.unsplash.com/photo-1522770179533-24471fcdba45",
            title: "Camera",
        },
    ];

    const [expanded, setExpanded] = React.useState<string | false>(false);

    const handleChange =
        (panel: string) =>
            (event: React.SyntheticEvent, isExpanded: boolean) => {
                setExpanded(isExpanded ? panel : false);
            };

    const [anchorEl, setAnchorEl] = React.useState<null | HTMLElement>(null);
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");
    const open1 = Boolean(anchorEl);
    const handleClick = (event: React.MouseEvent<HTMLButtonElement>) => {
        setAnchorEl(event.currentTarget);
    };
    const handleClose = () => {
        setAnchorEl(null);
    };

    const selectItem = [
        { title: "UI Designer", value: "UI Designer" },
        { title: "UX Designer", value: "UX Designer" },
        { title: "Designer", value: "Designer" },
        { title: "Full Stack", value: "Full Stack" },
        { title: "Frontend Developer", value: "Frontend Developer" },
        { title: "Backend Developer", value: "Backend Developer" },
    ];

    // ----------------------phases----------------------------

    const formik = useFormik({
        initialValues: {
            title: "",
            location: "",
            startDate: "",
            endDate: "",
            description: "",
            category: [],
            gallery: [],
            phases: [],
            dropDownAgreements: [],
            dropDownDocuments: [],
            inputValuePrerequisite: "",
            open: false,
            dialogState: "",
            dialogStateFile: "",
            openDocuments: false,
            dialogStateDocument: "",
            context: "",
            dialogStateFileDocument: "",
        },
        onSubmit: (values) => {
            console.log("God", values);
        },
    });

    const handleAddClick = (event) => {
        const newPhase = {
            id: formik.values.phases.length + 1,
            title: `Phases ${formik.values.phases.length + 1}`,
            agreements: [],
            documents: [],
            prerequisite: [],
            dropDownMenu: [],
            category: [],
            topic: "",
            proposedPrice: "",
            startTenderDate: "",
            endTenderDate: "",
            startDate: "",
            endDate: "",
            description: "",
        };
        formik.setFieldValue("phases", [...formik.values.phases, newPhase]);
        setInputValuesArray([...inputValuesArray, {}]);
    };

    const [inputValuesArray, setInputValuesArray] = useState([]);

    const handleInputChange = (e, id) => {
        const { name, value } = e.target;

        const updatedInputValuesArray = inputValuesArray.map(
            (inputValues, index) => {
                if (index === id - 1) {
                    return {
                        ...inputValues,
                        [name]: value,
                    };
                }
                return inputValues;
            }
        );

        setInputValuesArray(updatedInputValuesArray);

        const updatedPhases = formik.values.phases.map((phase) => {
            if (phase.id === id) {
                return {
                    ...phase,
                    [name]: value,
                };
            }
            return phase;
        });

        formik.setFieldValue("phases", updatedPhases);
    };

    // ----------------------end phases----------------------------

    // ----------------------agreements----------------------------

    const removeAgreements = (phaseId, value) => {
        const updatedPhases = formik.values.phases.map((phase) => {
            if (phase.id === phaseId) {
                const updatedAgreements = phase.agreements.filter(
                    (agreements) => agreements.title !== value
                );

                return {
                    ...phase,
                    agreements: updatedAgreements,
                };
            }
            return phase;
        });
        formik.setFieldValue("phases", updatedPhases);
    };

    const countryList = useQuery("countryList", async () => {
        const { data } = await axios.get(
            route("api.web.v1.technology-seeker-panel.country.index")
        );
        countryList.data = data.data;
        return countryList;
    });

    const addAgreements = (phaseId, e) => {
        const updatedPhases = formik.values.phases.map((phase) => {
            if (e.target.value !== undefined) {
                if (phase.id === phaseId) {
                    const newAgreements = {
                        id: phaseId,
                        title: e.target.value,
                        status: "Pending",
                        // edit: <EditOutlinedIcon />,
                        // remove: <DeleteOutlineOutlinedIcon />,
                    };
                    setValue(
                        `phase.[${phaseId - 1}.agreements.[${
                            phase.agreements.length
                        }]`,
                        newAgreements
                    );
                    return {
                        ...phase,
                        agreements: [...phase.agreements, newAgreements],
                    };
                }
            }

            return phase;
        });

        formik.setFieldValue("phases", updatedPhases);
    };

    function createData(
        CompanyName: string,
        JobTitle: string,
        StartDate: string,
        JobType: string,
        Edit: React.ReactNode,
        Remove: React.ReactNode
    ) {
        return { CompanyName, JobTitle, StartDate, JobType, Edit, Remove };
    }

    const StyledTableCell = styled(TableCell)(({ theme }) => ({
        [`&.${tableCellClasses.head}`]: {
            backgroundColor: "#e9f6ff",
            color: "#000",
        },
        [`&.${tableCellClasses.body}`]: {
            fontSize: 14,
        },
    }));

    // -----------------------end agreements-------------------------------

    // ----------------------Documents----------------------------

    const removeDocument = (phaseId, value) => {
        const updatedPhases = formik.values.phases.map((phase) => {
            if (phase.id === phaseId) {
                const updatedDocuments = phase.documents.filter(
                    (document) => document.title !== value
                );

                return {
                    ...phase,
                    documents: updatedDocuments,
                };
            }
            return phase;
        });

        formik.setFieldValue("phases", updatedPhases);
    };

    const addDocument = (phaseId, e) => {
        const updatedPhases = formik.values.phases.map((phase) => {
            if (e.target.value !== undefined) {
                if (phase.id === phaseId) {
                    const newDocument = {
                        id: phaseId,
                        title: e.target.value,
                        status: "Pending",
                        // edit: <EditOutlinedIcon />,
                        // remove: <DeleteOutlineOutlinedIcon />,
                    };
                    setValue(
                        `phase.[${phaseId - 1}.documents.[${
                            phase.documents.length
                        }]`,
                        newDocument
                    );
                    return {
                        ...phase,
                        documents: [...phase.documents, newDocument],
                    };
                }
            }

            return phase;
        });

        formik.setFieldValue("phases", updatedPhases);
    };

    // -----------------------end Documents-------------------------------

    // ----------------------------------------------- pop up------------------------------------

    const handleClickOpenPop = () => {
        formik.setFieldValue("open", true);
    };

    const handleClosePop = () => {
        formik.setFieldValue("open", false);
    };

    const handelChange = (e) => {
        const value = e.target.value;

        formik.setFieldValue("dialogState", value);
    };

    const handelClickDialog = () => {
        if (
            formik.values.dialogStateFile !== "" &&
            formik.values.dialogState.trim() !== ""
        ) {
            const dia = [
                ...formik.values.dropDownDocuments,
                {
                    item: formik.values.dialogState,
                    file: formik.values.dialogStateFile,
                },
            ];
            formik.setFieldValue("dropDownDocuments", dia);
            handleClosePopDocuments();
        }
    };

    const handelStateFile = (e) => {
        const value = e.target.value;

        formik.setFieldValue("dialogStateFile", value);
    };

    // -----------------------------------

    const handleClickOpenPopDocuments = () => {
        formik.setFieldValue("openDocuments", true);
    };

    const handleClosePopDocuments = () => {
        formik.setFieldValue("openDocuments", false);
    };

    const handelChangeDocument = (e) => {
        const value = e.target.value;

        formik.setFieldValue("dialogStateDocument", value);
    };

    const handelClickDialogDocument = (id) => {
        formik.values.phases.map((phase) => {
            if (id === phase.id) {
                if (
                    formik.values.context.trim() !== "" &&
                    formik.values.dialogStateDocument.trim() !== ""
                ) {
                    const dia = [
                        ...formik.values.dropDownAgreements,
                        {
                            item: formik.values.dialogStateDocument,
                            Context: formik.values.context,
                        },
                    ];

                    formik.setFieldValue("dropDownAgreements", dia);
                    handleClosePop();
                }
            }
        });
    };

    const handelChangeDocumentContext = (e) => {
        const value = e.target.value;

        formik.setFieldValue("context", value);
    };

    const handelStateFileDocument = (e) => {
        const value = e.target.value;

        formik.setFieldValue("context", value);
    };
    // -----------------------------------------------end pop up------------------------------------

    const {
        register,
        handleSubmit,
        control,
        setValue,
        getValues,
        reset,
        formState: { errors },
    } = useForm({
        defaultValues: {},
    });
    const onSubmit: SubmitHandler = (data) => NewProject.mutate(data);

    const handleAuto = (event, id, values) => {
        const skills = values.map((item, index) => {
            return item.title;
        });
        console.log(skills);
        setValue(`phase.[${id - 1}.skills`, skills);
    };

    // -----------------------------------Prerequisite-------------------------------------------

    const handlePrerequisite = (id) => {
        if (formik.values.inputValuePrerequisite.trim() !== "") {
            const updatedPhases = formik.values.phases.map((phase) => {
                if (phase.id === id) {
                    const updatedPrerequisite = [
                        ...phase.prerequisite,
                        {
                            item: formik.values.inputValuePrerequisite,
                        },
                    ];
                    setValue(
                        `phase.[${id - 1}.prerequisite]`,
                        updatedPrerequisite
                    );
                    return {
                        ...phase,
                        prerequisite: updatedPrerequisite,
                    };
                }
                return phase;
            });
            formik.setFieldValue("phases", updatedPhases);

            formik.setFieldValue("inputValuePrerequisite", "");
        }
    };

    const handleClosePrerequisite = (phaseId, value) => {
        const updatedPhases = formik.values.phases.map((phase) => {
            if (phase.id === phaseId) {
                const updatedPrerequisite = phase.prerequisite.filter(
                    (item) => item.item !== value
                );

                return {
                    ...phase,
                    prerequisite: updatedPrerequisite,
                };
            }
            return phase;
        });
        formik.setFieldValue("phases", updatedPhases);
    };

    const handleMainAuto = (event, value) => {
        const skills = value.map((item, index) => {
            return item.title;
        });
        setValue("skills", skills);
    };

    const NewProject = useMutation(
        async (data) => {
            const response = await axios.post(
                route("api.web.v1.technology-seeker-panel.project.store"),
                data
            );
            return response.data;
        },
        {
            onSuccess: (data) => {
                setOpen(true);
                setStatus("success");
                setMessage("Your Data Saved successfully");
                window.setTimeout(() => {}, 1200);
                reset();
            },
            onError: () => {
                setOpen(true);
                setStatus("error");
                setMessage("Error! Please try later");
            },
            onSettled: () => {},
        }
    );
    // ---------------------------------end Prerequisite--------------------------------------------

    //    dropzone

    const [dropzoneKey, setDropzoneKey] = React.useState(Date.now());
    const [uploadImage, setUploadImage] = React.useState([]);

    const Preview = ({ meta }) => {
        const { name, percent, status } = meta;
        return (
            <AddIcon
                sx={{
                    width: "50px",
                    height: "50px",
                    color: "#5B5B5B",
                }}
            />
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

    const [images , setImages] = useState([])

    useEffect(() => {
        setValue("file", images);
    }, [images]);

    const handleChangeStatus = ({ xhr }, status, files) => {
        if (status === "done") {
            setUploadImage([...uploadImage, files[0]]);
            setDropzoneKey(Date.now());
            setImages([...images , xhr.response])
            // setValue("file", images);
        }
    };

    //   end of  dropzone
    if (countryList.isLoading) {
        return <div>loading....</div>;
    }
    return (
        <Container>
            <Snackbar
                open={open}
                autoHideDuration={6000}
                onClose={() => {
                    setOpen(false);
                }}
                anchorOrigin={{ vertical: "top", horizontal: "right" }}
            >
                <Alert
                    onClose={() => {
                        setOpen(false);
                    }}
                    severity={status}
                    sx={{ width: "100%" }}
                >
                    {message}
                </Alert>
            </Snackbar>
            {/* // -----------------------------------------------Dialog------------------------------------ */}

            {/* // -----------------------------------------------end Dialog------------------------------------ */}
            <Box
                sx={{
                    width: "auto",
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography variant="h4">Add New Project</Typography>
                <Divider sx={{ mt: 2, mb: 4 }} />
            </Box>
            <form onSubmit={handleSubmit(onSubmit)}>
                <Grid container spacing={4}>
                    <Grid item xs={12} md={6}>
                        <TextField
                            sx={{ width: "100%" }}
                            label="Topic"
                            variant="outlined"
                            name="title"
                            value={formik.values.title}
                            {...register("title", {
                                required: true,
                                minLength: 1,
                            })}
                            onChange={formik.handleChange}
                        />
                        {errors?.title?.type === "required" && (
                            <p className="errors">This field is required</p>
                        )}
                    </Grid>
                    <Grid item xs={12} md={6}>
                        <Autocomplete
                            sx={{ width: "100%" }}
                            id="location"
                            fullWidth
                            options={countryList.data.data}
                            getOptionLabel={(option) => option.label}
                            renderOption={(props, option) => (
                                <Box
                                    component="li"
                                    sx={{
                                        "& > img": {
                                            mr: 2,
                                            flexShrink: 0,
                                        },
                                    }}
                                    {...props}
                                >
                                    <img
                                        loading="lazy"
                                        width="20"
                                        src={`https://flagcdn.com/w20/${option.code.toLowerCase()}.png`}
                                        srcSet={`https://flagcdn.com/w40/${option.code.toLowerCase()}.png 2x`}
                                        alt=""
                                    />
                                    {option.label} ({option.code}) +
                                    {option.phone}
                                </Box>
                            )}
                            renderInput={(params) => (
                                <TextField
                                    {...register("location", {
                                        required: true,
                                        minLength: 2,
                                    })}
                                    {...params}
                                    label="Location"
                                    inputProps={{
                                        ...params.inputProps,
                                        autoComplete: "new-password",
                                    }}
                                />
                            )}
                        />
                    </Grid>
                    <Grid item xs={12} md={6}>
                        <TextField
                            type="date"
                            sx={{ width: "100%" }}
                            InputLabelProps={{ shrink: true }}
                            label="Start Date"
                            variant="outlined"
                            name="startDate"
                            {...register("start_date", {
                                required: true,
                                minLength: 1,
                            })}
                            onChange={formik.handleChange}
                        />
                        {errors?.start_date?.type === "required" && (
                            <p className="errors">This field is required</p>
                        )}
                    </Grid>
                    <Grid item xs={12} md={6}>
                        <TextField
                            type="date"
                            sx={{ width: "100%" }}
                            InputLabelProps={{ shrink: true }}
                            label="End Date"
                            variant="outlined"
                            name="endDate"
                            {...register("end_date", {
                                required: true,
                                minLength: 1,
                            })}
                            onChange={formik.handleChange}
                        />
                        {errors?.end_date?.type === "required" && (
                            <p className="errors">This field is required</p>
                        )}
                    </Grid>
                    <Grid item xs={12} md={12}>
                        <TextField
                            sx={{ width: "100%" }}
                            label="Description"
                            multiline
                            rows={7}
                            variant="outlined"
                            name="description"
                            value={formik.values.description}
                            {...register("description", {
                                required: true,
                                minLength: 1,
                            })}
                            onChange={formik.handleChange}
                        />
                        {errors?.description?.type === "required" && (
                            <p className="errors">This field is required</p>
                        )}
                    </Grid>
                </Grid>
                <InputLabel
                    sx={{
                        color: "black",
                        "& .MuiInputLabel-asterisk": {
                            color: "#99C9FF",
                        },
                        marginTop: "40px",
                    }}
                >
                    <Typography variant="h5">Category</Typography>
                </InputLabel>

                <Autocomplete
                    sx={{
                        "& .MuiInputLabel-asterisk": {
                            display: "none",
                        },
                        marginTop: "15px",
                    }}
                    multiple
                    id="category"
                    options={skills}
                    getOptionLabel={(option: Skill) => option.title}
                    filterSelectedOptions
                    onChange={(event, value) => handleMainAuto(event, value)}
                    renderTags={(value, getTagProps) =>
                        value.map((option, index) => (
                            <Chip
                                deleteIcon={<CloseIcon />}
                                sx={{
                                    "& .MuiChip-deleteIcon": { color: "red" },
                                    "&:hover .MuiChip-deleteIcon": {
                                        color: "red",
                                    },
                                }}
                                variant="outlined"
                                label={option.title}
                                {...getTagProps({ index })}
                            />
                        ))
                    }
                    renderInput={(params) => (
                        <TextField
                            {...params}
                            sx={{
                                "& .MuiAutocomplete-inputRoot": {
                                    borderRadius: "0px",
                                    padding: "20px",
                                },
                                "& .MuiAutocomplete-tag": {
                                    borderRadius: "0px",
                                    backgroundColor: "#CEEAFF",
                                    marginLeft: "10px",
                                    borderStyle: "none",
                                    padding: "10px",
                                    fontSize: "14px",
                                },
                            }}
                            label="Skills"
                        />
                    )}
                />
                {errors?.skills?.type === "required" && (
                    <p className="errors">This field is required</p>
                )}
                <InputLabel
                    sx={{
                        color: "black",

                        marginTop: "40px",
                    }}
                >
                    <Typography variant="h5">Gallery</Typography>
                </InputLabel>

                <Box
                    sx={{
                        border: "1px solid black",
                        mt: 2,
                        borderColor: "#757575",
                        borderRadius : "5px"
                    }}
                >
                    {/* <ImageList sx={{ width: "100%", px: "15px" }} cols={5}>
                        <ImageListItem>
                            <Button
                                sx={{
                                    height: "200px",
                                    width: "200px",
                                    bgcolor: "#EEEEEE",
                                }}
                            >
                                <AddIcon
                                    sx={{
                                        width: "50px",
                                        height: "50px",
                                        color: "#5B5B5B",
                                    }}
                                />
                            </Button>
                        </ImageListItem>
                        {itemData.map((item, index) => (
                            <ImageListItem key={index}>
                                <img
                                    src={item.img}
                                    style={{ height: "200px", width: "200px" }}
                                    alt={item.title}
                                    loading="lazy"
                                />
                            </ImageListItem>
                        ))}

                    </ImageList> */}
                    <ImageList
                        sx={{
                            width: "100%",
                            px: "15px",
                            overflowX: "auto",

                        }}
                        cols={uploadImage.length + 6}
                    >
                        <ImageListItem>
                            <Button
                                sx={{
                                    height: "200px",
                                    width: "200px",
                                    bgcolor: customTheme.palette.inputs,
                                    borderRadius: "16px",
                                    display: "flex",
                                    justifyContent: "center",
                                    alignItems: "center",
                                }}
                            >
                                <Dropzone
                                    key={dropzoneKey}
                                    getUploadParams={
                                        getUploadParams
                                    }
                                    onChangeStatus={handleChangeStatus}
                                    canRemove={false}
                                    inputContent={
                                        <AddIcon
                                            sx={{
                                                width: "50px",
                                                height: "50px",
                                                color: "#5B5B5B",
                                            }}
                                        />
                                    }
                                    PreviewComponent={Preview}
                                    styles={{
                                        dropzone: {
                                            overflow: "hidden",
                                            border: "0px",
                                            height: "100%",
                                        },
                                    }}
                                    accept="image/*,audio/*,video/*"
                                />

                                {/* <TextField type="file" id="file-input" style={{ display: "none" }} />
                                <AddIcon
                                    sx={{
                                        width: "50px",
                                        height: "50px",
                                        color: "#5B5B5B",

                                    }}
                                /> */}
                            </Button>

                            {/* <Button
                    sx={{
                        height: "200px",
                        width: "200px",
                        bgcolor: customTheme.palette.inputs,
                        borderRadius: "16px",
                        display: "flex",
                        justifyContent: "center",
                        alignItems: "center",
                    }}
                    >
                    <input type="file" id="file-input" style={{ display: "none" }} onChange={(e) => {
                        // Get the selected file
                        const file = e.target.files[0];

                        // Do something with the selected file
                    }} />
                    <label htmlFor="file-input">
                        <AddIcon
                        sx={{
                            width: "50px",
                            height: "50px",
                            color: "#5B5B5B",
                        }}
                        />
                    </label>
                </Button> */}
                        </ImageListItem>
                        {uploadImage.map((item, index) => (
                            <ImageListItem key={index}>
                                <img
                                    src={item.meta.previewUrl}
                                    style={{
                                        height: "200px",
                                        width: "200px",
                                        borderRadius: "16px",
                                    }}
                                    loading="lazy"
                                />
                            </ImageListItem>
                        ))}
                    </ImageList>
                </Box>
                <Box
                    sx={{
                        display: "flex",
                        justifyContent: "space-between",
                        alignItems: "center",
                        marginTop: "40px",
                    }}
                >
                    <Typography
                        variant="h4"
                        sx={{
                            color: "black",
                        }}
                    >
                        Phases
                    </Typography>
                    <Button onClick={handleAddClick}>
                        <AddIcon
                            sx={{
                                bgcolor: "#99C9FF",
                                color: "white",
                                borderRadius: "50%",
                                width: "32px",
                                height: "32px",
                            }}
                        />
                    </Button>
                </Box>
                <Divider sx={{ mt: 2, mb: 4, borderColor: "#757575" }} />
                {formik.values.phases.map((item, index) => {
                    const god = item.id;

                    return (
                        <Accordion
                            key={index}
                            sx={{ mb: "30px", boxShadow: 0, position: "unset" }}
                        >
                            <AccordionSummary
                                expandIcon={<ExpandMoreIcon />}
                                aria-controls={`bh-content${item.id - 1}`}
                                id={item.id}
                                sx={{
                                    bgcolor: "#E9F6FF",
                                    ".MuiAccordionSummary-contentGutters": {
                                        margin: 0,
                                    },
                                }}
                            >
                                <Typography variant="h4">
                                    {item.title}
                                </Typography>
                            </AccordionSummary>
                            <AccordionDetails sx={{ mt: "20px" }}>
                                <Grid container spacing={4}>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            sx={{ width: "100%" }}
                                            label="Topic"
                                            variant="outlined"
                                            name="topic"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${item.id - 1}.title]`,
                                                { required: true }
                                            )}
                                            value={
                                                inputValuesArray[god - 1].topic
                                            }
                                        />
                                        {errors?.title?.type === "required" && (
                                            <p className="errors">
                                                This field is required
                                            </p>
                                        )}
                                    </Grid>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            sx={{ width: "100%" }}
                                            label="Proposed Price"
                                            variant="outlined"
                                            name="proposedPrice"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.proposed_price]`,
                                                { required: true }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .proposedPrice
                                            }
                                        />
                                        {errors?.proposed_price?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                </Grid>
                                <Typography
                                    sx={{ mt: "20px", mb: "30px" }}
                                    variant="h5"
                                >
                                    Important Dates
                                </Typography>
                                <Grid container spacing={4}>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            type="date"
                                            sx={{ width: "100%" }}
                                            label="Start Tender Date"
                                            variant="outlined"
                                            InputLabelProps={{ shrink: true }}
                                            name="startTenderDate"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.start_tender_date]`,
                                                { required: true, minLength: 1 }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .startTenderDate
                                            }
                                        />
                                        {errors?.start_tender_date?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            type="date"
                                            sx={{ width: "100%" }}
                                            label="End Tender Date"
                                            InputLabelProps={{ shrink: true }}
                                            variant="outlined"
                                            name="endTenderDate"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.end_tender_date]`,
                                                { required: true }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .endTenderDate
                                            }
                                        />
                                        {errors?.end_tender_date?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            type="date"
                                            sx={{ width: "100%" }}
                                            label="Start Date"
                                            InputLabelProps={{ shrink: true }}
                                            variant="outlined"
                                            name="startDate"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.start_date]`,
                                                { required: true, minLength: 1 }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .startDate
                                            }
                                        />
                                        {errors?.start_date?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                    <Grid item xs={12} md={6}>
                                        <TextField
                                            type="date"
                                            sx={{ width: "100%" }}
                                            label="End Date"
                                            InputLabelProps={{ shrink: true }}
                                            variant="outlined"
                                            name="endDate"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.end_date]`,
                                                { required: true, minLength: 1 }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .endDate
                                            }
                                        />
                                        {errors?.end_date?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                    <Grid item xs={12}>
                                        <TextField
                                            sx={{ width: "100%" }}
                                            label="Description"
                                            multiline
                                            rows={10}
                                            variant="outlined"
                                            name="description"
                                            onChange={(e) =>
                                                handleInputChange(e, god)
                                            }
                                            {...register(
                                                `phase.[${
                                                    item.id - 1
                                                }.description]`,
                                                { required: true, minLength: 1 }
                                            )}
                                            value={
                                                inputValuesArray[god - 1]
                                                    .description
                                            }
                                        />
                                        {errors?.description?.type ===
                                            "required" && (
                                                <p className="errors">
                                                    This field is required
                                                </p>
                                            )}
                                    </Grid>
                                </Grid>
                                <Grid item xs={12}>
                                    <Typography
                                        variant="h5"
                                        sx={{
                                            color: "black",

                                            marginTop: "40px",
                                        }}
                                    >
                                        Category
                                    </Typography>
                                    <Autocomplete
                                        sx={{
                                            "& .MuiInputLabel-asterisk": {
                                                display: "none",
                                            },
                                            marginTop: "15px",
                                        }}
                                        multiple
                                        id="category"
                                        options={skills}
                                        getOptionLabel={(option: Skill) =>
                                            option.title
                                        }
                                        onChange={(event, values) =>
                                            handleAuto(event, item.id, values)
                                        }
                                        filterSelectedOptions
                                        renderTags={(value, getTagProps) =>
                                            value.map((option, index) => (
                                                <Chip
                                                    deleteIcon={<CloseIcon />}
                                                    sx={{
                                                        "& .MuiChip-deleteIcon":
                                                            {
                                                                color: "red",
                                                            },
                                                        "&:hover .MuiChip-deleteIcon":
                                                            {
                                                                color: "red",
                                                            },
                                                    }}
                                                    variant="outlined"
                                                    label={option.title}
                                                    {...getTagProps({ index })}
                                                />
                                            ))
                                        }
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                sx={{
                                                    "& .MuiAutocomplete-inputRoot":
                                                        {
                                                            borderRadius: "0px",
                                                            padding: "20px",
                                                        },
                                                    "& .MuiAutocomplete-tag": {
                                                        borderRadius: "0px",
                                                        backgroundColor:
                                                            "#CEEAFF",
                                                        marginLeft: "10px",
                                                        borderStyle: "none",
                                                        padding: "10px",
                                                        fontSize: "14px",
                                                    },
                                                }}
                                                label="Skills"
                                            />
                                        )}
                                    />
                                </Grid>

                                <Dialog
                                    open={formik.values.openDocuments}
                                    onClose={handleClosePopDocuments}
                                >
                                    <DialogTitle>
                                        <Typography variant="h4">
                                            New Documents
                                        </Typography>
                                        <Divider
                                            sx={{
                                                borderBottomWidth: 0,
                                                mt: "20px",
                                            }}
                                        />
                                    </DialogTitle>
                                    <DialogContent sx={{ mt: "11px" }}>
                                        <TextField
                                            onChange={handelChange}
                                            sx={{ width: "50%", mb: "50px" }}
                                            id="outlined-basic"
                                            label="Document Name "
                                            variant="outlined"
                                        />

                                        <FormControl
                                            sx={{ m: 1, width: "100%", m: 0 }}
                                            variant="outlined"
                                        >
                                            <InputLabel htmlFor="outlined-adornment-password">
                                                Select File
                                            </InputLabel>
                                            <OutlinedInput
                                                disabled
                                                endAdornment={
                                                    <InputAdornment position="end">
                                                        <Button
                                                            onChange={
                                                                handelStateFile
                                                            }
                                                            variant="contained"
                                                            component="label"
                                                            sx={{
                                                                borderRadius: 0,
                                                                backgroundColor:
                                                                    "#616161",
                                                                color: "white",
                                                                boxShadow:
                                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                                "&:hover": {
                                                                    boxShadow:
                                                                        "3px 3px 3px 2px #E9F6FF",
                                                                    backgroundColor:
                                                                        "#616161",
                                                                },
                                                                paddingX:
                                                                    "40px",
                                                                textTransform:
                                                                    "capitalize",
                                                            }}
                                                        >
                                                            <Typography
                                                                sx={{
                                                                    textTransform:
                                                                        "capitalize",
                                                                }}
                                                            >
                                                                Submit
                                                            </Typography>
                                                            <input
                                                                type="file"
                                                                hidden
                                                            />
                                                        </Button>
                                                    </InputAdornment>
                                                }
                                                label="Select File "
                                            />
                                        </FormControl>
                                    </DialogContent>
                                    <DialogActions sx={{ mt: "10px" }}>
                                        <Button
                                            variant="outlined"
                                            sx={{
                                                borderRadius: 0,

                                                color: "#616161",
                                                borderColor: "#616161",
                                                boxShadow:
                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                "&:hover": {
                                                    boxShadow:
                                                        "3px 3px 3px 2px #E9F6FF",
                                                    borderColor: "#616161",
                                                },
                                                paddingX: "40px",
                                            }}
                                            onClick={handleClosePopDocuments}
                                        >
                                            Cancel
                                        </Button>
                                        <Button
                                            sx={{
                                                borderRadius: 0,
                                                backgroundColor: "#616161",
                                                color: "white",
                                                boxShadow:
                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                "&:hover": {
                                                    boxShadow:
                                                        "3px 3px 3px 2px #E9F6FF",
                                                    backgroundColor: "#616161",
                                                },
                                                paddingX: "40px",
                                            }}
                                            onClick={handelClickDialog}
                                        >
                                            Add Document
                                        </Button>
                                    </DialogActions>
                                </Dialog>

                                <Dialog
                                    open={formik.values.open}
                                    onClose={handleClosePop}
                                >
                                    <DialogTitle>
                                        <Typography variant="h4">
                                            New Agreement
                                        </Typography>
                                        <Divider
                                            sx={{
                                                borderBottomWidth: 0,
                                                mt: "20px",
                                            }}
                                        />
                                    </DialogTitle>
                                    <DialogContent sx={{ mt: "11px" }}>
                                        <TextField
                                            onChange={handelChangeDocument}
                                            sx={{ width: "100%", mb: "50px" }}
                                            id="outlined-basic"
                                            label="Topic "
                                            variant="outlined"
                                        />

                                        <TextField
                                            onChange={
                                                handelChangeDocumentContext
                                            }
                                            sx={{ width: "100%" }}
                                            id="outlined-basic"
                                            label="Context "
                                            variant="outlined"
                                            multiline
                                            rows={11}
                                        />
                                    </DialogContent>
                                    <DialogActions sx={{ mt: "10px" }}>
                                        <Button
                                            variant="outlined"
                                            sx={{
                                                borderRadius: 0,

                                                color: "#616161",
                                                borderColor: "#616161",
                                                boxShadow:
                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                "&:hover": {
                                                    boxShadow:
                                                        "3px 3px 3px 2px #E9F6FF",
                                                    borderColor: "#616161",
                                                },
                                                paddingX: "40px",
                                            }}
                                            onClick={handleClosePop}
                                        >
                                            Cancel
                                        </Button>
                                        <Button
                                            sx={{
                                                borderRadius: 0,
                                                backgroundColor: "#616161",
                                                color: "white",
                                                boxShadow:
                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                "&:hover": {
                                                    boxShadow:
                                                        "3px 3px 3px 2px #E9F6FF",
                                                    backgroundColor: "#616161",
                                                },
                                                paddingX: "40px",
                                            }}
                                            onClick={() =>
                                                handelClickDialogDocument(god)
                                            }
                                        >
                                            Add Document
                                        </Button>
                                    </DialogActions>
                                </Dialog>
                                {/* -----------------------------------prerequisite------------------------------------------- */}
                                <Grid sx={{ py: 5 }} item xs={12}>
                                    <Typography
                                        variant="h5"
                                        sx={{
                                            color: "black",
                                        }}
                                    >
                                        prerequisite
                                    </Typography>

                                    <Box
                                        border={1}
                                        paddingX={2}
                                        paddingY={3}
                                        mt={2}
                                        sx={{
                                            maxHeight: "300px",
                                            overflow: "auto",
                                        }}
                                    >
                                        <TextField
                                            placeholder="Enter prerequisite"
                                            size="small"
                                            sx={{
                                                width: "100%",
                                                "& .MuiOutlinedInput-root": {
                                                    "& fieldset": {
                                                        border: "none",
                                                    },
                                                    color: "black",
                                                },
                                                ".MuiInputBase-adornedEnd": {
                                                    padding: 0,
                                                    bgcolor: "#EEEEEE",
                                                },
                                            }}
                                            variant="outlined"
                                            onChange={(e) =>
                                                formik.setFieldValue(
                                                    "inputValuePrerequisite",
                                                    e.target.value
                                                )
                                            }
                                            InputProps={{
                                                endAdornment: (
                                                    <Button
                                                        onClick={() =>
                                                            handlePrerequisite(
                                                                item.id
                                                            )
                                                        }
                                                        sx={{ marginRight: 0 }}
                                                    >
                                                        <AddIcon
                                                            sx={{
                                                                color: "#00DF74",
                                                            }}
                                                        />
                                                    </Button>
                                                ),
                                            }}
                                        />

                                        <List sx={{ p: 0 }}>
                                            {formik.values.phases.map(
                                                (items, index) => {
                                                    if (items.id === god) {
                                                        return items.prerequisite.map(
                                                            (
                                                                items1,
                                                                index1
                                                            ) => {
                                                                return (
                                                                    <ListItem
                                                                        key={
                                                                            index1
                                                                        }
                                                                        sx={{
                                                                            mt: "15px",
                                                                            py: "10px",
                                                                            pl: "10px",
                                                                            pr: 0,
                                                                            bgcolor:
                                                                                "#CEEAFF",
                                                                            display:
                                                                                "flex",
                                                                            justifyContent:
                                                                                "space-between",
                                                                            alignItems:
                                                                                "center",
                                                                        }}
                                                                    >
                                                                        {
                                                                            items1.item
                                                                        }
                                                                        <Button
                                                                            key={
                                                                                index
                                                                            }
                                                                            onClick={() =>
                                                                                handleClosePrerequisite(
                                                                                    god,
                                                                                    items1.item
                                                                                )
                                                                            }
                                                                            sx={{
                                                                                p: 0,
                                                                            }}
                                                                        >
                                                                            <CloseIcon color="error" />
                                                                        </Button>
                                                                    </ListItem>
                                                                );
                                                            }
                                                        );
                                                    }
                                                }
                                            )}
                                        </List>
                                    </Box>
                                </Grid>

                                {/* -----------------------------------end prerequisite------------------------------------------- */}
                                <Grid spacing={5} container>
                                    {/* ----------------------------agreements--------------------------- */}
                                    <Grid item xs={12} md={6}>
                                        <Typography
                                            sx={{ mb: "20px" }}
                                            variant="h5"
                                        >
                                            Agreements
                                        </Typography>
                                        <Box
                                            sx={{
                                                border: 1,
                                                py: "20px",
                                                px: "15px",
                                            }}
                                        >
                                            <Select
                                                size="small"
                                                onChange={(e) =>
                                                    addAgreements(god, e)
                                                }
                                                name="agreements"
                                                sx={{
                                                    width: "100%",
                                                }}
                                                defaultValue="userOnly"
                                                displayEmpty
                                                inputProps={{
                                                    "aria-label":
                                                        "Without label",
                                                }}
                                            >
                                                {formik.values.dropDownAgreements.map(
                                                    (item, index) => {
                                                        return (
                                                            <MenuItem
                                                                key={index}
                                                                value={
                                                                    item.item
                                                                }
                                                                sx={{
                                                                    "&.Mui-selected":
                                                                        {
                                                                            backgroundColor:
                                                                                "#99C9FF",
                                                                        },
                                                                    "&:hover.Mui-selected":
                                                                        {
                                                                            backgroundColor:
                                                                                "#99C9FF",
                                                                        },
                                                                    mx: "14px",
                                                                }}
                                                            >
                                                                <Typography>
                                                                    {item.item}
                                                                </Typography>
                                                            </MenuItem>
                                                        );
                                                    }
                                                )}

                                                <em>
                                                    <Button
                                                        sx={{
                                                            p: 0,
                                                            color: "gray",
                                                            mx: "25px",
                                                        }}
                                                        variant="text"
                                                        onClick={
                                                            handleClickOpenPop
                                                        }
                                                    >
                                                        <AddCircleOutlineIcon
                                                            sx={{
                                                                mr: 1,
                                                                color: "gray",
                                                            }}
                                                        />
                                                        Add New
                                                    </Button>
                                                </em>
                                            </Select>

                                            <TableContainer>
                                                <Table
                                                    sx={{ mt: 3 }}
                                                    aria-label="customized table"
                                                >
                                                    <TableHead>
                                                        <TableRow>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <FormatAlignLeftIcon
                                                                        sx={{
                                                                            mr: "5px",
                                                                        }}
                                                                    />
                                                                    Title
                                                                </Typography>
                                                            </StyledTableCell>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <FormatListBulletedIcon
                                                                        sx={{
                                                                            mr: "5px",
                                                                        }}
                                                                    />
                                                                    Status
                                                                </Typography>
                                                            </StyledTableCell>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                    width: "20%",
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <DriveFileRenameOutlineOutlinedIcon
                                                                        sx={{
                                                                            mr: 0.5,
                                                                        }}
                                                                    />
                                                                    Edit/Delete
                                                                </Typography>
                                                            </StyledTableCell>
                                                        </TableRow>
                                                    </TableHead>
                                                    <TableBody>
                                                        {formik.values.phases.map(
                                                            (items, index) => {
                                                                return items.agreements.map(
                                                                    (
                                                                        item,
                                                                        index1
                                                                    ) => {
                                                                        if (
                                                                            god ===
                                                                            item.id
                                                                        ) {
                                                                            return (
                                                                                <TableRow
                                                                                    sx={{
                                                                                        border: 1,
                                                                                        borderColor:
                                                                                            "#e9f6ff",
                                                                                        borderWidth: 3,
                                                                                    }}
                                                                                    key={
                                                                                        index1
                                                                                    }
                                                                                >
                                                                                    <StyledTableCell
                                                                                        key={
                                                                                            index
                                                                                        }
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 4,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        {
                                                                                            item.title
                                                                                        }
                                                                                    </StyledTableCell>
                                                                                    <StyledTableCell
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 4,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        <Typography
                                                                                            sx={{
                                                                                                backgroundColor:
                                                                                                    backgroundColors(
                                                                                                        item.status
                                                                                                    ),
                                                                                            }}
                                                                                        >
                                                                                            {
                                                                                                item.status
                                                                                            }
                                                                                        </Typography>
                                                                                    </StyledTableCell>
                                                                                    <StyledTableCell
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 4,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        <IconButton
                                                                                            sx={{
                                                                                                color: "#000000",
                                                                                            }}
                                                                                        >
                                                                                            {
                                                                                                item.edit
                                                                                            }
                                                                                        </IconButton>
                                                                                        <IconButton
                                                                                            sx={{
                                                                                                color: "#F70000",
                                                                                            }}
                                                                                            onClick={(
                                                                                                e
                                                                                            ) =>
                                                                                                removeAgreements(
                                                                                                    god,
                                                                                                    item.title
                                                                                                )
                                                                                            }
                                                                                        >
                                                                                            {
                                                                                                item.remove
                                                                                            }
                                                                                        </IconButton>
                                                                                    </StyledTableCell>
                                                                                </TableRow>
                                                                            );
                                                                        }
                                                                    }
                                                                );
                                                            }
                                                        )}
                                                    </TableBody>
                                                </Table>
                                            </TableContainer>
                                        </Box>
                                    </Grid>
                                    {/* ----------------------------end agreements-------------------------- */}

                                    {/* --------------------------------Documents------------------------------ */}
                                    <Grid item xs={12} md={6}>
                                        <Typography
                                            sx={{ mb: "20px" }}
                                            variant="h5"
                                        >
                                            Documents
                                        </Typography>
                                        <Box
                                            sx={{
                                                border: 1,
                                                py: "20px",
                                                px: "15px",
                                            }}
                                        >
                                            <Select
                                                size="small"
                                                onChange={(e) =>
                                                    addDocument(god, e)
                                                }
                                                sx={{
                                                    width: "100%",
                                                }}
                                                defaultValue="userOnly"
                                                displayEmpty
                                                inputProps={{
                                                    "aria-label":
                                                        "Without label",
                                                }}
                                            >
                                                {formik.values.dropDownDocuments.map(
                                                    (item, index) => {
                                                        return (
                                                            <MenuItem
                                                                key={index}
                                                                value={
                                                                    item.item
                                                                }
                                                                sx={{
                                                                    "&.Mui-selected":
                                                                        {
                                                                            backgroundColor:
                                                                                "#99C9FF",
                                                                        },
                                                                    "&:hover.Mui-selected":
                                                                        {
                                                                            backgroundColor:
                                                                                "#99C9FF",
                                                                        },
                                                                    mx: "14px",
                                                                }}
                                                            >
                                                                <Typography>
                                                                    {item.item}
                                                                </Typography>
                                                            </MenuItem>
                                                        );
                                                    }
                                                )}
                                                <em>
                                                    <Button
                                                        sx={{
                                                            p: 0,
                                                            color: "gray",
                                                            mx: "25px",
                                                        }}
                                                        variant="text"
                                                        value=""
                                                        onClick={
                                                            handleClickOpenPopDocuments
                                                        }
                                                    >
                                                        <AddCircleOutlineIcon
                                                            sx={{
                                                                mr: 1,
                                                                color: "gray",
                                                            }}
                                                        />
                                                        Add New
                                                    </Button>
                                                </em>
                                            </Select>

                                            <TableContainer>
                                                <Table
                                                    sx={{ mt: 3 }}
                                                    aria-label="customized table"
                                                >
                                                    <TableHead>
                                                        <TableRow>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <FormatAlignLeftIcon
                                                                        sx={{
                                                                            mr: "5px",
                                                                        }}
                                                                    />
                                                                    Title
                                                                </Typography>
                                                            </StyledTableCell>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <FormatListBulletedIcon
                                                                        sx={{
                                                                            mr: "5px",
                                                                        }}
                                                                    />
                                                                    Status
                                                                </Typography>
                                                            </StyledTableCell>
                                                            <StyledTableCell
                                                                sx={{
                                                                    border: 1,
                                                                    borderColor:
                                                                        "#e9f6ff",
                                                                    borderWidth: 3,
                                                                    width: "20%",
                                                                }}
                                                                align="center"
                                                            >
                                                                <Typography
                                                                    variant="h6"
                                                                    sx={{
                                                                        display:
                                                                            "flex",
                                                                        flexDirection:
                                                                            "row",
                                                                        justifyContent:
                                                                            "center",
                                                                        alignItems:
                                                                            "center",
                                                                    }}
                                                                >
                                                                    <DriveFileRenameOutlineOutlinedIcon
                                                                        sx={{
                                                                            mr: 0.5,
                                                                        }}
                                                                    />
                                                                    Edit/Delete
                                                                </Typography>
                                                            </StyledTableCell>
                                                        </TableRow>
                                                    </TableHead>
                                                    <TableBody>
                                                        {formik.values.phases.map(
                                                            (items, index) => {
                                                                return items.documents.map(
                                                                    (
                                                                        item,
                                                                        index1
                                                                    ) => {
                                                                        if (
                                                                            god ===
                                                                            item.id
                                                                        ) {
                                                                            return (
                                                                                <TableRow
                                                                                    sx={{
                                                                                        border: 1,
                                                                                        borderColor:
                                                                                            "#e9f6ff",
                                                                                        borderWidth: 4,
                                                                                    }}
                                                                                    key={
                                                                                        index1
                                                                                    }
                                                                                >
                                                                                    <StyledTableCell
                                                                                        key={
                                                                                            index
                                                                                        }
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 4,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        {
                                                                                            item.title
                                                                                        }
                                                                                    </StyledTableCell>
                                                                                    <StyledTableCell
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 4,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        <Typography
                                                                                            sx={{
                                                                                                backgroundColor:
                                                                                                    backgroundColors(
                                                                                                        item.status
                                                                                                    ),
                                                                                            }}
                                                                                        >
                                                                                            {
                                                                                                item.status
                                                                                            }
                                                                                        </Typography>
                                                                                    </StyledTableCell>
                                                                                    <StyledTableCell
                                                                                        sx={{
                                                                                            border: 1,
                                                                                            borderColor:
                                                                                                "#e9f6ff",
                                                                                            borderWidth: 3,
                                                                                        }}
                                                                                        align="center"
                                                                                    >
                                                                                        <IconButton
                                                                                            sx={{
                                                                                                color: "#000000",
                                                                                            }}
                                                                                        >
                                                                                            {
                                                                                                item.edit
                                                                                            }
                                                                                        </IconButton>
                                                                                        <IconButton
                                                                                            sx={{
                                                                                                color: "#F70000",
                                                                                            }}
                                                                                            onClick={(
                                                                                                e
                                                                                            ) =>
                                                                                                removeDocument(
                                                                                                    god,
                                                                                                    item.title
                                                                                                )
                                                                                            }
                                                                                        >
                                                                                            {
                                                                                                item.remove
                                                                                            }
                                                                                        </IconButton>
                                                                                    </StyledTableCell>
                                                                                </TableRow>
                                                                            );
                                                                        }
                                                                    }
                                                                );
                                                            }
                                                        )}
                                                    </TableBody>
                                                </Table>
                                            </TableContainer>
                                        </Box>
                                    </Grid>
                                    {/* --------------------------------end Documents------------------------------ */}
                                </Grid>
                            </AccordionDetails>
                        </Accordion>
                    );
                })}
                <Box
                    sx={{
                        display: "flex",
                        justifyContent: "center",
                        my: "50px",
                    }}
                >
                    <Button
                        type="submit"
                        variant="contained"
                        sx={{
                            borderRadius: 0,
                            backgroundColor: "#616161",
                            color: "white",
                            boxShadow: "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                            "&:hover": {
                                boxShadow: "3px 3px 3px 2px #E9F6FF",
                                backgroundColor: "#616161",
                            },
                            paddingX: "40px",
                            textTransform: "capitalize",
                        }}
                    >
                        <Typography sx={{ textTransform: "capitalize" }}>
                            Submit
                        </Typography>
                    </Button>
                </Box>
            </form>
        </Container>
    );
};

export default NewProjects;
