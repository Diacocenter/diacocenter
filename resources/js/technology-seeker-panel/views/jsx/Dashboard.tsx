import React from "react";
import {
    Avatar,
    Box,
    Container,
    Divider,
    Grid,
    LinearProgress,
    List,
    ListItem,
    ListItemAvatar,
    ListItemText,
    Tab,
    Tabs,
    Typography,
} from "@mui/material";
import ArrowForwardIosIcon from "@mui/icons-material/ArrowForwardIos";
import MoreHorizIcon from "@mui/icons-material/MoreHoriz";
import ErrorIcon from "@mui/icons-material/Error";
import CircleIcon from "@mui/icons-material/Circle";
import AddIcon from "@mui/icons-material/Add";
import IconRightArrow from "./IconRightArrow";
import {useQuery} from "react-query";
import axios from "./../../../axiosConfig.js";
import {route} from "./../../helpers.js"
import {useSelector} from "react-redux";
import {AspectRatio} from "@mui/icons-material";
import aspectRatio from "../../components/AspectRatio";
import {Link} from "react-router-dom";

const DashboardSeeker = () => {
    const [value, setValue] = React.useState("one");
    const Data = useSelector(state => state.information);

    const handleChange = (event: React.SyntheticEvent, newValue: string) => {
        setValue(newValue);
    };

    const [secondary, setSecondary] = React.useState(false);


    const DashbordDetail = useQuery('DashbordDetail', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-seeker-panel.Dashboard.index"));
        DashbordDetail.data = data.data;
        return DashbordDetail;
    },{refetchInterval:3000});


    if (DashbordDetail.isLoading){
        return <div>loading...</div>
    }
    if (Data.isLoading){
        return <div>adoooooooo</div>
    }
    console.log(Data.data)
    return (
        <>
            <Container>
                <Typography mt="50px" variant="h4">
                    Dashboard
                </Typography>
                <Divider sx={{ mt: "20px", mb: "40px" }} />
                <Grid container spacing="20px" alignItems="stretch" sx={{mb : "50px"}}>

                    {/* -----------------------------------------26------------------------------------------ */}

                    <Grid item  order={{sm: 1 , lg: 1}} xs={12} sm={6} lg={4}>
                        <Box
                            p={2}
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                            }}
                            display="flex"
                            justifyContent="space-between"
                        >
                            <Box>
                                <Typography variant="h6">
                                    Applied Projects
                                </Typography>
                                <Box
                                    display="flex"
                                    justifyContent="space-between"
                                >
                                    <Box>
                                        <Typography variant="h2">26</Typography>
                                    </Box>
                                    <Box>
                                        <Typography
                                            marginLeft={7}
                                            color="#00DF74"
                                            variant="h6"
                                        >
                                            +15%
                                        </Typography>
                                        <Typography
                                            ml={1}
                                            color="#757575"
                                            variant="h6"
                                        >
                                            In Last 30D
                                        </Typography>
                                    </Box>
                                </Box>
                            </Box>
                            <Box display="flex" alignItems="center">
                                <IconRightArrow/>
                            </Box>
                        </Box>
                    </Grid>
                    {/* -----------------------------------------end 26------------------------------------------ */}


                    {/* -------------------------------------59-------------------------------- */}
                    <Grid item  order={{sm: 2 , lg: 2}} xs={12} sm={6} lg={4}>
                        <Box
                            p={2}
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                            }}
                            display="flex"
                            justifyContent="space-between"
                        >
                            <Box>
                                <Typography variant="h6">
                                    Project Views
                                </Typography>
                                <Box
                                    display="flex"
                                    justifyContent="space-between"
                                >
                                    <Box>
                                        <Typography variant="h2">59</Typography>
                                    </Box>
                                    <Box>
                                        <Typography
                                            marginLeft={7}
                                            color="#00DF74"
                                            variant="h6"
                                        >
                                            +30%
                                        </Typography>
                                        <Typography
                                            ml={1}
                                            color="#757575"
                                            variant="h6"
                                        >
                                            In Last 30D
                                        </Typography>
                                    </Box>
                                </Box>
                            </Box>
                            <Box display="flex" alignItems="center">
                                <IconRightArrow />
                            </Box>
                        </Box>
                    </Grid>
                    {/* -------------------------------------end 59-------------------------------- */}


                    {/* ----------------------------------------45010---------------------------- */}
                    <Grid item order={{sm: 3 , lg: 3}} xs={12}  sm={12} lg={4}>
                        <Box
                            p={2}
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                            }}
                            display="flex"
                            justifyContent="space-between"
                        >
                            <Box>
                                <Typography variant="h6">
                                    Total Assets value
                                </Typography>
                                <Box
                                    display="flex"
                                    justifyContent="space-between"
                                >
                                    <Box>
                                        <Typography variant="h2">
                                            45010
                                        </Typography>
                                    </Box>
                                    <Box mt={4}>
                                        <Typography
                                            ml={1}
                                            color="#757575"
                                            variant="h6"
                                        >
                                            USD
                                        </Typography>
                                    </Box>
                                </Box>
                            </Box>
                            <Box display="flex" alignItems="center">
                                <IconRightArrow/>
                            </Box>
                        </Box>
                    </Grid>
                    {/* ----------------------------------------end 45010---------------------------- */}





                    {/* ----------------------------------------your profile---------------------------- */}


                    <Grid item order={{sm: 6 , lg: 5}} xs={12} sm={8} lg={4.75}>
                        <Box
                            p="15px"
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                                height: "100%",
                            }}
                        >
                            <Typography variant="h5">your Profile</Typography>
                            <Box display="flex" alignItems="center" mt="20px">
                                <Box
                                    display="flex"
                                    justifyContent="center"
                                    alignItems="center"
                                    flexDirection="column"
                                >
                                    <img
                                        src={(Data.data.profile_picture)}
                                        alt=""
                                        width="50%"
                                    />
                                    <Typography component="label">
                                        {Data.data.name}
                                    </Typography>
                                    <Typography component="sub">
                                        {Data.data.role}
                                    </Typography>
                                </Box>
                                <Divider
                                    sx={{ ml: "10px", borderColor: "#757575" }}
                                    orientation="vertical"
                                    flexItem
                                />
                                <Box ml="20px" width="100%">
                                    <Typography
                                        component="label"
                                        fontSize="15px"
                                    >
                                        Complete your profile
                                    </Typography>
                                    <LinearProgress
                                        sx={{
                                            my: "10px",
                                            borderRadius: "5px",
                                            height: "7px",
                                            backgroundColor: "white",
                                            border: "1px solid #616161",
                                            ".MuiLinearProgress-bar": {
                                                backgroundColor: "#00DF74",
                                            },
                                        }}
                                        variant="determinate"
                                        value={70}
                                    />

                                    <List>
                                        <ListItem
                                            sx={{ padding: 0, mb: "10px" }}
                                        >
                                            <ErrorIcon
                                                sx={{
                                                    mr: "15px",
                                                    color: "red",
                                                    fontSize: "9px",
                                                }}
                                            />
                                            <Typography
                                                variant="subtitle"
                                                fontSize="9px"
                                            >
                                                Upload your first profile
                                            </Typography>
                                        </ListItem>
                                        <ListItem
                                            sx={{ padding: 0, mb: "10px" }}
                                        >
                                            <ErrorIcon
                                                sx={{
                                                    mr: "15px",
                                                    color: "#00DF74",
                                                    fontSize: "9px",
                                                }}
                                            />
                                            <Typography
                                                variant="subtitle"
                                                fontSize="9px"
                                            >
                                                Upload your first profile
                                            </Typography>
                                        </ListItem>
                                        <ListItem
                                            sx={{ padding: 0, mb: "10px" }}
                                        >
                                            <ErrorIcon
                                                sx={{
                                                    mr: "15px",
                                                    color: "#99C9FF",
                                                    fontSize: "9px",
                                                }}
                                            />
                                            <Typography
                                                variant="subtitle"
                                                fontSize="9px"
                                            >
                                                Upload your first profile
                                            </Typography>
                                        </ListItem>
                                        <ListItem
                                            sx={{
                                                padding: 0,
                                                mb: "10px",
                                                fontSize: "9px",
                                            }}
                                        >
                                            <ErrorIcon
                                                sx={{
                                                    mr: "15px",
                                                    color: "#99C9FF",
                                                    fontSize: "9px",
                                                }}
                                            />
                                            <Typography
                                                variant="subtitle"
                                                fontSize="9px"
                                            >
                                                Upload your first profile
                                            </Typography>
                                        </ListItem>
                                    </List>
                                </Box>
                            </Box>
                        </Box>
                    </Grid>
                    {/* ----------------------------------------end your profile---------------------------- */}




                    {/* --------------------------------------New Message------------------------------------------ */}
                    <Grid item order={{sm: 8 , lg: 6}} xs={12} sm={8} lg={4.75}>
                        <Box
                            p="15px"
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                                height: "100%",
                            }}
                        >
                            <Typography variant="h5">New Message</Typography>
                            <List sx={{ mt: "20px" }}>
                                {Data.data.communication.map((item,index)=>
                                    <ListItem
                                        sx={{
                                            padding: 0,
                                            mb: "10px",
                                            display: "flex",
                                            justifyContent: "space-between",
                                            p: "0px 5px 10px 5px",
                                            borderBottom: "1px solid #616161",
                                        }}
                                    >
                                        <Box
                                            display="flex"
                                            justifyContent="space-between"
                                            width="40%"
                                            alignItems="center"
                                        >
                                            <img
                                                src={item.profile_image}
                                                alt=""
                                                width="33px"
                                                height="33px"
                                                style={{ borderRadius: "50%" }}
                                            />
                                        </Box>
                                        <Typography fontSize="15px">
                                            {item.name}
                                        </Typography>
                                        <Box
                                            display="flex"
                                            justifyContent="end"
                                            width="40%"
                                            alignItems="center"
                                        >
                                            <Typography
                                                variant="subtitle"
                                                fontSize="15px"
                                            >
                                                {item.date}
                                            </Typography>
                                            <CircleIcon
                                                sx={{
                                                    ml: "10px",
                                                    fontSize: "10px",
                                                    color: "#616161",
                                                }}
                                            />
                                        </Box>
                                    </ListItem>
                                )}
                            </List>
                        </Box>
                    </Grid>
                    {/* --------------------------------------end New Message------------------------------------------ */}









                    {/* --------------------------------------New Published Projects------------------------------------------ */}

                    <Grid item order={{sm: 9 , lg: 8}} xs={12} sm={12} lg={9.5}>
                        <Box
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                                height: "100%",
                                p: "15px",
                            }}
                        >
                            <Typography variant="h5" sx={{ mb: "30px" }}>
                                New Published Projects
                            </Typography>
                            <Grid container >

                                {DashbordDetail.data.data.map((item,index)=>
                                    <>
                                        <Grid p="10px" item xs={12} sm={3} sx={{borderRight : "1px solid #757575"}}>
                                            <img src={item.project_image} alt="" width="100%" height="auto" />
                                            <Box mt="10px" display="flex" justifyContent="space-between">
                                                {/*<Typography variant="h6">*/}
                                                {/*Name*/}
                                                {/*</Typography>*/}
                                                <Typography variant="h6">
                                                    {item.title}
                                                </Typography>
                                            </Box>
                                            <Typography component="P" sx={{ textAlign: "justify" }} variant="subtitle ">
                                                {item.short_summary}
                                            </Typography>
                                            <Box mt="10px" display="flex" justifyContent="space-between">
                                                <Typography fontSize="13px">
                                                    {item.company_name}
                                                </Typography>
                                                <Typography fontSize="13px" sx={{color : "#757575"}}>
                                                    date
                                                </Typography>
                                            </Box>
                                        </Grid>
                                    </>
                                )}

                            </Grid>
                        </Box>
                    </Grid>
                    {/* --------------------------------------end New Published Projects------------------------------------------ */}


                    {/* ----------------------------------------project 1---------------------------- */}

                    <Grid item order={{sm: 5 , lg: 4}} xs={12} sm={4} lg={2.5}>
                        <Box
                            p="15px"
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                                height: "100%",
                            }}
                        >
                            <Box
                                display="flex"
                                justifyContent="space-between"
                                alignItems="center"
                            >
                                <Typography variant="h5">Project 1</Typography>
                                <MoreHorizIcon sx={{ color: "#616161" }} />
                            </Box>
                            <Box p={1}>
                                <Box
                                    sx={{
                                        boxShadow: "0px 0px 15px 0.1px #00DF74",aspectRatio:4/4
                                    }}
                                    mt="15px"
                                    p={4}
                                    borderRadius="50%"
                                    display="flex"
                                    justifyContent="center"
                                    alignItems="center"
                                    flexDirection="column"
                                >
                                    <Typography component="label">
                                        Progress
                                    </Typography>
                                    <Typography variant="h3" color="#00DF74">
                                        90%
                                    </Typography>
                                    <Typography component="label" sx={{textWrap: 'nowrap'}}>
                                        Total Score
                                    </Typography>
                                </Box>
                            </Box>
                        </Box>
                    </Grid>

                    {/* ----------------------------------------end project 1---------------------------- */}


                    {/* --------------------------------------project 2------------------------------------------ */}

                    <Grid item order={{sm: 7 , lg: 7}} xs={12} sm={4} lg={2.5}>
                        <Box
                            p="15px"
                            sx={{
                                boxShadow:
                                    "2px 2px 10px 2px rgba(0, 0, 0, 0.10)",
                                height:"100%"
                            }}
                        >
                            <Box
                                display="flex"
                                justifyContent="space-between"
                                alignItems="center"
                            >
                                <Typography variant="h5">
                                    Project 2
                                </Typography>
                                <MoreHorizIcon
                                    sx={{ color: "#616161" }}
                                />
                            </Box>
                            <Box p={1}>
                                <Box
                                    sx={{
                                        boxShadow:
                                            "0px 0px 15px 0.1px #00DF74",aspectRatio:4/4
                                    }}
                                    mt="15px"
                                    p={4}
                                    borderRadius="50%"
                                    display="flex"
                                    justifyContent="center"
                                    alignItems="center"
                                    flexDirection="column"
                                    width="100%"
                                    height="100%"
                                >
                                    <Typography component="label">
                                        Progress
                                    </Typography>
                                    <Typography
                                        variant="h3"
                                        color="#00DF74"
                                    >
                                        90%
                                    </Typography>
                                    <Typography component="label" sx={{textWrap: 'nowrap'}}>
                                        Total Score
                                    </Typography>
                                </Box>
                            </Box>
                        </Box>
                    </Grid>
                    {/* --------------------------------------project 2------------------------------------------ */}




                </Grid>
            </Container>
        </>
    );
};

export default DashboardSeeker;
