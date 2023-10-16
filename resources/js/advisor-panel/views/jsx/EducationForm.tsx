import {
    Autocomplete,
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
    Typography, createFilterOptions, Alert, Snackbar,
} from "@mui/material";
import * as React from "react";
import ContactDetailInputLabel from "./ContactDetailInputLabel";
// import ContactDetailAutocomplete from "./ContactDetailAutocomplete";
import {SubmitHandler, useForm} from "react-hook-form";
import {useMutation, useQuery} from "react-query";
import axios from "./../../../axiosConfig.js";
import {route} from './../../helpers.js'

export default function EducationForm() {
    const years = [
        { label: "1994"},
        { label: "1995"},
        { label: "1996"},
        { label: "1997"},
        { label: "1998"},
        { label: "1999"},
        { label: "2000"},
        { label: "2001"},
        { label: "2002"},
        { label: "2003"},
        { label: "2004"},
        { label: "2005"},
        { label: "2006"},
        { label: "2007"},
        { label: "2008"},
        { label: "2009"},
        { label: "2010"},
        { label: "2011"},
        { label: "2012"},
        { label: "2013"},
        { label: "2014"},
        { label: "2015"},
        { label: "2016"},
        { label: "2017"},
        { label: "2018"},
        { label: "2019"},
        { label: "2020"},
        { label: "2021"},
        { label: "2022"},
        { label: "2023"},
    ];

    const degree = [
        { label : "Diploma" },
        { label : "Assistant" },
        { label : "Bachelor" },
        { label : "Master" },
        { label : "PHD" },
    ]

    const fields = [
        {
            label: 'Engineering',
            value: 'engineering'
        },
        {
            label: 'Business',
            value: 'business'
        },
        {
            label: 'Computer Science',
            value: 'computer_science'
        },
        {
            label: 'Liberal Arts',
            value: 'liberal_arts'
        },
        {
            label: 'Nursing',
            value: 'nursing'
        },
        {
            label: 'Education',
            value: 'education'
        },
        {
            label: 'Math',
            value: 'math'
        },
        {
            label: 'Science',
            value: 'science'
        },
        {
            label: 'Art/Design',
            value: 'art_design'
        },
        {
            label: 'Architecture',
            value: 'architecture'
        }
    ]

    interface CountryType {
        code: string;
        label: string;
        phone: string;
        suggested?: boolean;
    }

    const [data , setData] = React.useState()
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");
    const filter = createFilterOptions();

    const year = new Date().getFullYear()

    const countryList = useQuery("countryList", async () => {
        const {data} = await axios.get(route("api.web.v1.advisor-panel.country.index"));
        countryList.data = data.data;
        return countryList;
    });
    const { register, handleSubmit, control, setValue, getValues,reset ,formState:{errors} } = useForm({
        defaultValues: {},
    });
    const postEducation = useMutation((data) => {
        return axios.post(route("api.web.v1.advisor-panel.education.store"),data);
    }, {
        onSuccess: data => {
            reset();
            setOpen(true);
            setStatus("success");
            setMessage("Your data Saved successfully");
            window.setTimeout(() => {

            }, 1200);
        },
        onError: data => {
            setOpen(true);
            setStatus("error");
            setMessage("Error! Please try later");
        },
    });

    const onSubmit: SubmitHandler = (data) => postEducation.mutate(data);

    if (countryList.isLoading){
        return <div>loading....</div>
    }
    return (
        <Box>
            <Snackbar open={open} autoHideDuration={6000} onClose={() => {
                setOpen(false);
            }} anchorOrigin={{vertical: "top", horizontal: "right"}}>
                <Alert onClose={() => {
                    setOpen(false);
                }} severity={status} sx={{width: "100%"}}>
                    {message}
                </Alert>
            </Snackbar>
            <Box sx={{mt: 10}}>
                <Box>
                    <form onSubmit={handleSubmit(onSubmit)}>
                        <Box>
                            <Grid container spacing={4}>
                                <Grid xs={12} sm item>
                                    <TextField
                                        sx={{mt: 2}}
                                        fullWidth
                                        id="school-name"
                                        label="Enter your School Name"
                                        variant="outlined"
                                        {...register("university",{required:true,minLength:1})}
                                    />
                                    {errors?.university?.type==="required" && <p className="errors">This field is required</p>}
                                </Grid>
                                <Grid xs={12} sm item>
                                    <Autocomplete
                                        value={data}
                                        onChange={(event, newValue) => {
                                            if (typeof newValue === 'string') {
                                                setData({label: newValue,});
                                            } else if (newValue && newValue.inputValue) {
                                                setData({label: newValue.inputValue,});
                                            } else {setData(newValue);}
                                        }} filterOptions={(options, params) => {
                                        const filtered = filter(options, params);
                                        const { inputValue } = params;
                                        const isExisting = options.some((option) => inputValue === option.label);
                                        if (inputValue !== '' && !isExisting) {
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
                                        options={degree}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === 'string') {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => <li {...props}>{option.label}</li>}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Enter your Degree"
                                                {...register("degree",{required:true,minLength:2})}
                                            />
                                        )}
                                    />
                                    {errors?.degree?.type==="required" && <p className="errors">This field is required</p>}
                                </Grid>
                            </Grid>
                            <Grid sx={{mt: 2}} container spacing={4}>
                                <Grid xs={12} sm item>

                                    <Autocomplete
                                        value={data}
                                        onChange={(event, newValue) => {
                                            if (typeof newValue === 'string') {
                                                setData({label: newValue,});
                                            } else if (newValue && newValue.inputValue) {
                                                setData({label: newValue.inputValue,});
                                            } else {setData(newValue);}
                                        }} filterOptions={(options, params) => {
                                        const filtered = filter(options, params);
                                        const { inputValue } = params;
                                        const isExisting = options.some((option) => inputValue === option.label);
                                        if (inputValue !== '' && !isExisting) {
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
                                        options={years}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === 'string') {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => <li {...props}>{option.label}</li>}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Start Year"
                                                {...register("from",{required:true,minLength:1,maxLength:4,max:year})}
                                            />
                                        )}
                                    />
                                    {errors?.from?.type==="required" && <p className="errors">This field is required</p>}
                                    {errors?.from?.type==="maxLength" && <p className="errors">Enter correct date</p>}
                                    {errors?.from?.type==="max" && <p className="errors">Year must be lower than {year}</p>}
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
                                {/*                {...params}*/}
                                {/*                label="Start Month"*/}
                                {/*                {...register("start_month",{required:true,minLength:1,maxLength:2})}*/}
                                {/*            />*/}
                                {/*        )}*/}
                                {/*    />*/}
                                {/*    {errors?.start_month?.type==="required" && <p className="errors">This field is required</p>}*/}
                                {/*    {errors?.start_month?.type==="maxLength" && <p className="errors">Enter correct date</p>}*/}
                                {/*</Grid>*/}
                                <Grid xs={12} sm item>
                                    <Autocomplete
                                        value={data}
                                        onChange={(event, newValue) => {
                                            if (typeof newValue === 'string') {
                                                setData({label: newValue,});
                                            } else if (newValue && newValue.inputValue) {
                                                setData({label: newValue.inputValue,});
                                            } else {setData(newValue);}
                                        }} filterOptions={(options, params) => {
                                        const filtered = filter(options, params);
                                        const { inputValue } = params;
                                        const isExisting = options.some((option) => inputValue === option.label);
                                        if (inputValue !== '' && !isExisting) {
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
                                        options={years}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === 'string') {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => <li {...props}>{option.label}</li>}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="End Year"
                                                {...register("to",{required:true,minLength:1,maxLength:4,max:year})}
                                            />
                                        )}
                                    />
                                    {errors?.to?.type==="required" && <p className="errors">This field is required</p>}
                                    {errors?.to?.type==="maxLength" && <p className="errors">Enter correct date</p>}
                                    {errors?.to?.type==="max" && <p className="errors">Year must be lower than {year}</p>}
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
                                {/*                {...params}*/}
                                {/*                label="End Month"*/}
                                {/*                {...register("end_month",{required:true,minLength:1,maxLength:2})}*/}
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
                                <Grid xs={12} md={6} sm item>
                                    <Autocomplete
                                        sx={{mt: 2}}
                                        id="location"
                                        fullWidth
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
                                                {option.label} ({option.code}) +
                                                {option.phone}
                                            </Box>
                                        )}
                                        renderInput={(params) => (
                                            <TextField
                                                {...register("location",{required:true,minLength:2})}
                                                {...params}
                                                label="Location"
                                                inputProps={{
                                                    ...params.inputProps,
                                                    autoComplete:
                                                        "new-password",
                                                }}
                                            />
                                        )}
                                    />
                                </Grid>
                                <Grid xs={12} sm item>
                                    <Autocomplete
                                        value={data}
                                        onChange={(event, newValue) => {
                                            if (typeof newValue === 'string') {
                                                setData({label: newValue,});
                                            } else if (newValue && newValue.inputValue) {
                                                setData({label: newValue.inputValue,});
                                            } else {setData(newValue);}
                                        }} filterOptions={(options, params) => {
                                        const filtered = filter(options, params);
                                        const { inputValue } = params;
                                        const isExisting = options.some((option) => inputValue === option.label);
                                        if (inputValue !== '' && !isExisting) {
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
                                        options={fields}
                                        getOptionLabel={(option) => {
                                            // Value selected with enter, right from the input
                                            if (typeof option === 'string') {
                                                return option;
                                            }
                                            // Add "xxx" option created dynamically
                                            if (option.inputValue) {
                                                return option.inputValue;
                                            }
                                            // Regular option
                                            return option.label;
                                        }}
                                        renderOption={(props, option) => <li {...props}>{option.label}</li>}
                                        renderInput={(params) => (
                                            <TextField
                                                {...params}
                                                label="Enter your Field"
                                                {...register("title",{required:true,minLength:1})}
                                            />
                                        )}
                                    />
                                    {errors?.title?.type==="required" && <p className="errors">This field is required</p>}
                                </Grid>
                            </Grid>
                            <Box sx={{marginTop: 3, width: "100%"}}>
                                <ContactDetailInputLabel
                                    id="description"
                                />
                                <TextField
                                    {...register("description")}
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
                                    multiline
                                    rows={5}
                                    label="write a short description about your hobby, interested, and yourself"
                                    variant="outlined"
                                />
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
                                            my: 4,textTransform:"capitalize"
                                        }}
                                        variant="contained"
                                    >
                                        Add Education
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
