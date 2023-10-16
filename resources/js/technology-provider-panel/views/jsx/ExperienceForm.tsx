import {
    Autocomplete,
    createFilterOptions,
    Box,
    Button,
    FormControl,
    FormControlLabel,
    Grid,
    InputLabel,
    Radio,
    RadioGroup,
    TextField,
    TextareaAutosize,
    Typography,
    Snackbar,
    Alert,
    Chip,
} from "@mui/material";
import * as React from "react";
import ContactDetailInputLabel from "./ContactDetailInputLabel";
import ContactDetailAutocomplete from "./ContactDetailAutocomplete";
import { useMutation, useQuery } from "react-query";
import axios from "./../../../axiosConfig.js";
import { route } from "./../../helpers.js";
import { SubmitHandler, useForm } from "react-hook-form";
import CloseIcon from "@mui/icons-material/Close";

export default function ExperienceForm() {
    const years = [
        { label: "1994" },
        { label: "1995" },
        { label: "1996" },
        { label: "1997" },
        { label: "1998" },
        { label: "1999" },
        { label: "2000" },
        { label: "2001" },
        { label: "2002" },
        { label: "2003" },
        { label: "2004" },
        { label: "2005" },
        { label: "2006" },
        { label: "2007" },
        { label: "2008" },
        { label: "2009" },
        { label: "2010" },
        { label: "2011" },
        { label: "2012" },
        { label: "2013" },
        { label: "2014" },
        { label: "2015" },
        { label: "2016" },
        { label: "2017" },
        { label: "2018" },
        { label: "2019" },
        { label: "2020" },
        { label: "2021" },
        { label: "2022" },
        { label: "2023" },
    ];

    interface CountryType {
        code: string;
        label: string;
        phone: string;
        suggested?: boolean;
    }

    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");
    const [data, setData] = React.useState();

    const filter = createFilterOptions();

    const year = new Date().getFullYear();

    const countryList = useQuery("countryList", async () => {
        const { data } = await axios.get(
            route("api.web.v1.technology-provider-panel.country.index")
        );
        countryList.data = data.data;
        return countryList;
    });
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

    const skills = [
        { label: "UI Designer" },
        { label: "UX Designer" },
        { label: "Designer" },
        { label: "Full Stack" },
        { label: "Frontend Developer" },
        { label: "Backend Developer" },
        { label: "UI Designer" },
    ];

    const onSubmit: SubmitHandler = (data) => postExperience.mutate(data);
    const handleCountry = (e, values) => {
        setValue("country", values.name);
    };

    const postExperience = useMutation(
        (data) => {
            return axios.post(
                route("api.web.v1.technology-provider-panel.experience.store"),
                data
            );
        },
        {
            onSuccess: (data) => {
                setOpen(true);
                setStatus("success");
                setMessage("Your Data Saved successfully");
                window.setTimeout(() => {}, 1200);
                reset();
            },
            onError: (data) => {
                setOpen(true);
                setStatus("error");
                setMessage("Error! Please try later");
            },
        }
    );
    if (countryList.isLoading) {
        return <div>loading....</div>;
    }
    return (
        <Box>
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
            <Box sx={{ mt: 10 }}>
                <Box>
                    <form onSubmit={handleSubmit(onSubmit)}>
                        <Box>
                            <Grid container spacing={4}>
                                <Grid xs={12} sm item>
                                    <Autocomplete
                                        value={data}
                                        onChange={(event, newValue) => {
                                            if (typeof newValue === "string") {
                                                setData({ label: newValue });
                                            } else if (
                                                newValue &&
                                                newValue.inputValue
                                            ) {
                                                setData({
                                                    label: newValue.inputValue,
                                                });
                                            } else {
                                                setData(newValue);
                                            }
                                        }}
                                        filterOptions={(options, params) => {
                                            const filtered = filter(
                                                options,
                                                params
                                            );
                                            const { inputValue } = params;
                                            const isExisting = options.some(
                                                (option) =>
                                                    inputValue === option.label
                                            );
                                            if (
                                                inputValue !== "" &&
                                                !isExisting
                                            ) {
                                                filtered.push({
                                                    inputValue,
                                                    label: `Add "${inputValue}"`,
                                                });
                                            }
                                            return filtered;
                                        }}
                                        selectOnFocus
                                        clearOnBlur
                                        handleHomeEndKeys
                                        sx={{
                                            mt: 2,
                                        }}
                                        fullWidth
                                        id="start-year"
                                        options={skills}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === "string") {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => (
                                            <li {...props}>{option.label}</li>
                                        )}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Enter your Job Title"
                                                {...register("title", {
                                                    required: true,
                                                    min: 2,
                                                })}
                                            />
                                        )}
                                    />
                                    {errors?.title?.type === "required" && (
                                        <p className="errors">
                                            This field is required
                                        </p>
                                    )}
                                </Grid>
                                <Grid xs={12} sm item>
                                    <TextField
                                        sx={{ mt: 2 }}
                                        fullWidth
                                        id="company-name"
                                        label="Enter your Company Name"
                                        variant="outlined"
                                        {...register("company_name", {
                                            required: true,
                                            min: 2,
                                        })}
                                    />
                                    {errors?.company_name?.type ===
                                        "required" && (
                                            <p className="errors">
                                                This field is required
                                            </p>
                                        )}
                                </Grid>
                            </Grid>
                            <Grid sx={{ mt: 2 }} container spacing={4}>
                                <Grid xs={6} sm item>
                                    <Autocomplete
                                        value={data}
                                        //     onChange={(event, newValue) => {
                                        //         if (typeof newValue === 'string') {
                                        //             setData({label: newValue,});
                                        //         } else if (newValue && newValue.inputValue) {
                                        //             setData({label: newValue.inputValue,});
                                        //         } else {setData(newValue);}
                                        //     }} filterOptions={(options, params) => {
                                        //     const filtered = filter(options, params);
                                        //     const { inputValue } = params;
                                        //     const isExisting = options.some((option) => inputValue === option.label);
                                        //     if (inputValue !== '' && !isExisting) {
                                        //         filtered.push({
                                        //             inputValue,
                                        //             label: `Add "${inputValue}"`,
                                        //         });
                                        //     }
                                        //     return filtered;
                                        // }}
                                        selectOnFocus
                                        clearOnBlur
                                        handleHomeEndKeys
                                        sx={{
                                            mt: 2,
                                        }}
                                        fullWidth
                                        id="start-year"
                                        options={years}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === "string") {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => (
                                            <li {...props}>{option.label}</li>
                                        )}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Start Year"
                                                {...register("from", {
                                                    required: true,
                                                    minLength: 2,
                                                    maxLength: 4,
                                                    max: year,
                                                })}
                                            />
                                        )}
                                    />
                                    {errors?.from?.type === "required" && (
                                        <p className="errors">
                                            This field is required
                                        </p>
                                    )}
                                    {errors?.from?.type === "maxLength" && (
                                        <p className="errors">
                                            Enter correct date
                                        </p>
                                    )}
                                    {errors?.from?.type === "max" && (
                                        <p className="errors">
                                            Year must be lower than {year}
                                        </p>
                                    )}
                                </Grid>
                                {/*<Grid xs={12} sm item>*/}
                                {/*    <Autocomplete*/}
                                {/*        value={data}*/}
                                {/*        onChange={(event, newValue) => {*/}
                                {/*            if (typeof newValue === 'string') {*/}
                                {/*                setData({label: newValue,});*/}
                                {/*            } else if (newValue && newValue.inputValue) {*/}
                                {/*                setData({label: newValue.inputValue,});*/}
                                {/*            } else {setData(newValue);}*/}
                                {/*        }} filterOptions={(options, params) => {*/}
                                {/*        const filtered = filter(options, params);*/}
                                {/*        const { inputValue } = params;*/}
                                {/*        const isExisting = options.some((option) => inputValue === option.label);*/}
                                {/*        if (inputValue !== '' && !isExisting) {*/}
                                {/*            filtered.push({*/}
                                {/*                inputValue,*/}
                                {/*                label: `Add "${inputValue}"`,*/}
                                {/*            });*/}
                                {/*        }*/}
                                {/*        return filtered;*/}
                                {/*    }}*/}
                                {/*        selectOnFocus*/}
                                {/*        clearOnBlur*/}
                                {/*        handleHomeEndKeys*/}
                                {/*        sx={{*/}
                                {/*            mt: 2,*/}
                                {/*        }}*/}
                                {/*        fullWidth*/}
                                {/*        id="start-year"*/}
                                {/*        options={top100Films}*/}
                                {/*        getOptionLabel={(option) => {*/}
                                {/*            // Value selected with enter, right from the input*/}
                                {/*            if (typeof option === 'string') {*/}
                                {/*                return option;*/}
                                {/*            }*/}
                                {/*            // Add "xxx" option created dynamically*/}
                                {/*            if (option.inputValue) {*/}
                                {/*                return option.inputValue;*/}
                                {/*            }*/}
                                {/*            // Regular option*/}
                                {/*            return option.label;*/}
                                {/*        }}*/}
                                {/*        renderOption={(props, option) => <li {...props}>{option.label}</li>}*/}
                                {/*        renderInput={(params) => (*/}
                                {/*            <TextField*/}
                                {/*                type="number"*/}
                                {/*                {...params}*/}
                                {/*                label="Start Month"*/}
                                {/*                {...register("start_month",{required:true,min:2,maxLength:2})}*/}
                                {/*            />*/}
                                {/*        )}*/}
                                {/*    />*/}
                                {/*    {errors?.start_month?.type==="required" && <p className="errors">This field is required</p>}*/}
                                {/*    {errors?.start_month?.type==="maxLength" && <p className="errors">Enter correct date</p>}*/}
                                {/*</Grid>*/}
                                <Grid xs={6} sm item>
                                    <Autocomplete
                                        value={data}
                                        // onChange={(event, newValue) => {
                                        //     if (typeof newValue === 'string') {
                                        //         setData({label: newValue,});
                                        //     } else if (newValue && newValue.inputValue) {
                                        //         setData({label: newValue.inputValue,});
                                        //     } else {setData(newValue);}
                                        // }}
                                        //     filterOptions={(options, params) => {
                                        //     const filtered = filter(options, params);
                                        //     const { inputValue } = params;
                                        //     const isExisting = options.some((option) => inputValue === option.label);
                                        //     if (inputValue !== '' && !isExisting) {
                                        //         filtered.push({
                                        //             inputValue,
                                        //             label: `Add "${inputValue}"`,
                                        //         });
                                        //     }
                                        //     return filtered;
                                        // }}
                                        selectOnFocus
                                        clearOnBlur
                                        handleHomeEndKeys
                                        sx={{
                                            mt: 2,
                                        }}
                                        fullWidth
                                        id="end-year"
                                        options={years}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === "string") {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => (
                                            <li {...props}>{option.label}</li>
                                        )}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="End Year"
                                                {...register("to", {
                                                    required: true,
                                                    min: 2,
                                                    maxLength: 4,
                                                    max: year,
                                                })}
                                            />
                                        )}
                                    />
                                    {errors?.to?.type === "required" && (
                                        <p className="errors">
                                            This field is required
                                        </p>
                                    )}
                                    {errors?.to?.type === "maxLength" && (
                                        <p className="errors">
                                            Enter correct date
                                        </p>
                                    )}
                                    {errors?.to?.type === "max" && (
                                        <p className="errors">
                                            Year must be lower than {year}
                                        </p>
                                    )}
                                </Grid>
                                {/*<Grid xs={12} sm item>*/}
                                {/*    <Autocomplete*/}
                                {/*        value={data}*/}
                                {/*        onChange={(event, newValue) => {*/}
                                {/*            if (typeof newValue === 'string') {*/}
                                {/*                setData({label: newValue,});*/}
                                {/*            } else if (newValue && newValue.inputValue) {*/}
                                {/*                setData({label: newValue.inputValue,});*/}
                                {/*            } else {setData(newValue);}*/}
                                {/*        }} filterOptions={(options, params) => {*/}
                                {/*        const filtered = filter(options, params);*/}
                                {/*        const { inputValue } = params;*/}
                                {/*        const isExisting = options.some((option) => inputValue === option.label);*/}
                                {/*        if (inputValue !== '' && !isExisting) {*/}
                                {/*            filtered.push({*/}
                                {/*                inputValue,*/}
                                {/*                label: `Add "${inputValue}"`,*/}
                                {/*            });*/}
                                {/*        }*/}
                                {/*        return filtered;*/}
                                {/*    }}*/}
                                {/*        selectOnFocus*/}
                                {/*        clearOnBlur*/}
                                {/*        handleHomeEndKeys*/}
                                {/*        sx={{*/}
                                {/*            mt: 2,*/}
                                {/*        }}*/}
                                {/*        fullWidth*/}
                                {/*        id="start-year"*/}
                                {/*        options={top100Films}*/}
                                {/*        getOptionLabel={(option) => {*/}
                                {/*            // Value selected with enter, right from the input*/}
                                {/*            if (typeof option === 'string') {*/}
                                {/*                return option;*/}
                                {/*            }*/}
                                {/*            // Add "xxx" option created dynamically*/}
                                {/*            if (option.inputValue) {*/}
                                {/*                return option.inputValue;*/}
                                {/*            }*/}
                                {/*            // Regular option*/}
                                {/*            return option.label;*/}
                                {/*        }}*/}
                                {/*        renderOption={(props, option) => <li {...props}>{option.label}</li>}*/}
                                {/*        renderInput={(params) => (*/}
                                {/*            <TextField*/}
                                {/*                type="number"*/}
                                {/*                {...params}*/}
                                {/*                label="End Month"*/}
                                {/*                {...register("end_month",{required:true,min:2,maxLength:2})}*/}
                                {/*            />*/}
                                {/*        )}*/}
                                {/*    />*/}
                                {/*    {errors?.end_month?.type==="required" && <p className="errors">This field is required</p>}*/}
                                {/*    {errors?.end_month?.type==="maxLength" && <p className="errors">Enter correct date</p>}*/}
                                {/*</Grid>*/}
                            </Grid>
                            <Grid
                                container
                                spacing={4}
                                sx={{
                                    mt: 2,
                                }}
                            >
                                <Grid xs={12} sm item>
                                    <Autocomplete
                                        size="small"
                                        id="country"
                                        fullWidth
                                        onChange={(event, values) =>
                                            handleCountry(event, values)
                                        }
                                        options={countryList.data.data}
                                        getOptionLabel={(option) =>
                                            option.label
                                        }
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
                                                {option.label} ({option.code})
                                            </Box>
                                        )}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Location"
                                                inputProps={{
                                                    ...params.inputProps,
                                                    autoComplete:
                                                        "new-password",
                                                }}
                                                {...register("location", {
                                                    required: true,
                                                    min: 2,
                                                })}
                                            />
                                        )}
                                    />
                                    {errors?.location?.type === "required" && (
                                        <p className="errors">
                                            This field is required
                                        </p>
                                    )}
                                </Grid>
                                <Grid item xs={12} sm>
                                    <InputLabel
                                        sx={{
                                            color: "black",
                                        }}
                                    >
                                        Job Type
                                    </InputLabel>
                                    <FormControl sx={{ mt: 3 }} fullWidth>
                                        <RadioGroup>
                                            <Grid container>
                                                <Grid
                                                    item
                                                    md={4}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        {...register("job_type")}
                                                        value="0"
                                                        control={<Radio />}
                                                        label="On-Site"
                                                    />
                                                </Grid>
                                                <Grid
                                                    item
                                                    md={4}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        {...register("job_type")}
                                                        value="1"
                                                        control={<Radio />}
                                                        label="Remote"
                                                    />
                                                </Grid>
                                                <Grid
                                                    item
                                                    md={4}
                                                    sm={12}
                                                    xs={12}
                                                >
                                                    <FormControlLabel
                                                        {...register("job_type")}
                                                        sx={{
                                                            whiteSpace:
                                                                "nowrap",
                                                        }}
                                                        value="2"
                                                        control={<Radio />}
                                                        label="Hybrid"
                                                    />
                                                </Grid>
                                            </Grid>
                                        </RadioGroup>
                                    </FormControl>
                                </Grid>
                            </Grid>
                            <Box sx={{ marginTop: 3, width: "100%" }}>
                                <ContactDetailInputLabel id="description" label={""} />
                                <TextField
                                    sx={{
                                        width: "100%",
                                        mt: "15px",
                                        "& .MuiInputLabel-asterisk": {
                                            display: "none",
                                        },
                                        "& .MuiInput-root": {
                                            height: "45px",
                                        },
                                    }}
                                    {...register("description")}
                                    multiline
                                    rows={5}
                                    label="write a short description about your hobby, interested, and yourself"
                                    variant="outlined"
                                />
                            </Box>
                            <Box sx={{ marginTop: 5, width: "100%" }}>
                                {/*<ContactDetailInputLabel*/}
                                {/*    id="skills"*/}
                                {/*/>*/}
                                {/*<Autocomplete*/}
                                {/*    sx={{*/}
                                {/*        '& .MuiInputLabel-asterisk': {*/}
                                {/*            display: 'none',*/}
                                {/*        },*/}
                                {/*    }}*/}
                                {/*    multiple*/}
                                {/*    id="skills"*/}
                                {/*    options={skills}*/}
                                {/*    getOptionLabel={(option: Skill) => option.title}*/}
                                {/*    filterSelectedOptions*/}
                                {/*    renderTags={(value, getTagProps) =>*/}
                                {/*        value.map((option, index) => (*/}
                                {/*            <Chip*/}
                                {/*                deleteIcon={<CloseIcon />}*/}
                                {/*                sx={{*/}
                                {/*                    '& .MuiChip-deleteIcon': { color: 'red' },*/}
                                {/*                    '&:hover .MuiChip-deleteIcon': { color: 'red' },*/}
                                {/*                }}*/}
                                {/*                variant="outlined"*/}
                                {/*                label={option.title}*/}
                                {/*                {...getTagProps({ index })}*/}
                                {/*            />*/}
                                {/*        ))*/}
                                {/*    }*/}
                                {/*    renderInput={(params) => (*/}
                                {/*        <TextField*/}
                                {/*            {...params}*/}
                                {/*            sx={{*/}
                                {/*                '& .MuiAutocomplete-inputRoot': {*/}
                                {/*                    borderRadius: '0px',*/}
                                {/*                    padding: '20px',*/}
                                {/*                },*/}
                                {/*                '& .MuiAutocomplete-tag': {*/}
                                {/*                    borderRadius: '0px',*/}
                                {/*                    backgroundColor: '#CEEAFF',*/}
                                {/*                    marginLeft: '10px',*/}
                                {/*                    borderStyle: 'none',*/}
                                {/*                    padding: '10px',*/}
                                {/*                    fontSize: '14px',*/}
                                {/*                },*/}
                                {/*            }}*/}
                                {/*            label="Skills"*/}
                                {/*            required*/}
                                {/*        />*/}
                                {/*    )}*/}
                                {/*/>*/}
                            </Box>
                            <Grid container justifyContent={"center"}>
                                <Grid
                                    item
                                    xs={12}
                                    md={4}
                                    lg={3}
                                    textAlign={"center"}
                                >
                                    <Button
                                        type="submit"
                                        fullWidth
                                        sx={{
                                            my: 4,
                                            textTransform: "capitalize",
                                        }}
                                        variant="contained"
                                    >
                                        Add Experience
                                    </Button>
                                </Grid>
                            </Grid>
                        </Box>
                    </form>
                </Box>
            </Box>
        </Box>
    );
}
