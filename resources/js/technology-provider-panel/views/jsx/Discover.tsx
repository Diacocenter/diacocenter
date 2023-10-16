import React from "react";
import { styled } from "@mui/material/styles";
import {
    InputAdornment,
    Input,
    Button,
    Box,
    Container,
    Typography,
    Tab,
    Tabs,
    Card,
    CardContent,
    CardMedia,
    Grid,
    TextField,
    FormControl,
    OutlinedInput,
    Divider,
} from "@mui/material";
import discoverItem from "../../components/assets/discover.png";
import SearchIcon from "@mui/icons-material/Search";
import DiscoverElement from "./DiscoverElement";

interface TabPanelProps {
    children?: React.ReactNode;
    index: number;
    tabValue: number;
}

function CustomTabPanel(props: TabPanelProps) {
    const { children, tabValue: tabValue, index, ...other } = props;

    return (
        <Box
            role="tabpanel"
            hidden={tabValue !== index}
            id={`simple-tabpanel-${index}`}
            aria-labelledby={`simple-tab-${index}`}
            {...other}
        >
            {tabValue === index && (
                <Box sx={{ paddingTop: 3 }}>
                    <Box>{children}</Box>
                </Box>
            )}
        </Box>
    );
}

function a11yProps(index: number) {
    return {
        id: `simple-tab-${index}`,
        "aria-controls": `simple-tabpanel-${index}`,
    };
}

export default function Discover() {
    const [tabValue, settabValue] = React.useState(0);

    const handleChange = (event: React.SyntheticEvent, newtabValue: number) => {
        settabValue(newtabValue);
    };

    const SearchInput = styled("input")({
        width: "90%",
        border: "0",
        fontSize: "1.25rem",
    });
    const MaterialUIButton = styled(Button)({
        marginLeft: "-1rem",
    });
    return (
        <Container>
            <Box
                sx={{
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography component="p" variant="h4">
                    Discover
                </Typography>
                <Divider sx={{ mt: 2, mb: 4 }} />
            </Box>
            <Box
                sx={{
                    display: "flex",
                    justifyContent: "space-between",
                    alignItems: "center",
                    flexDirection:{xs:"column",lg:"row"}
                }}
            >
                <FormControl sx={{ width: {xs:"100%",lg:"40%"} }} variant="outlined">
                    <OutlinedInput
                        size="small"
                        id="outlined-adornment-weight"
                        endAdornment={<SearchIcon position="end" />}
                        aria-describedby="outlined-weight-helper-text"
                        inputProps={{
                            "aria-label": "search",
                        }}
                        placeholder="Search / services / projects / members / ... "
                    />
                </FormControl>
                <Box sx={{ maxWidth: { xs: 340, sm: 650,lg:800 } }} >
                    <Tabs
                        allowScrollButtonsMobile
                        scrollButtons
                        variant="scrollable"
                        value={tabValue}
                        onChange={handleChange}
                        aria-label="basic tabs example"
                        sx={{
                            display: "flex",
                            alignItems: "center",
                        }}
                    >
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="For You"
                            {...a11yProps(0)}
                        />
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="AI driven"
                            {...a11yProps(1)}
                        />
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="Popular"
                            {...a11yProps(2)}
                        />
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="Oil"
                            {...a11yProps(3)}
                        />
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="Electrical"
                            {...a11yProps(4)}
                        />
                        <Tab
                            sx={{
                                boxShadow: "3px 3px 10px rgba(0, 0, 0, 0.15)",
                                margin: "15px 4px",
                                minHeight: "40px",
                            }}
                            label="Mechanical"
                            {...a11yProps(5)}
                        />
                    </Tabs>
                </Box>
            </Box>

            <CustomTabPanel tabValue={tabValue} index={0}>
                <DiscoverElement />
            </CustomTabPanel>
            <CustomTabPanel tabValue={tabValue} index={1}>
                <DiscoverElement />
            </CustomTabPanel>
            <CustomTabPanel tabValue={tabValue} index={2}>
                <DiscoverElement />
            </CustomTabPanel>
            <CustomTabPanel tabValue={tabValue} index={3}>
                <DiscoverElement />
            </CustomTabPanel>
            <CustomTabPanel tabValue={tabValue} index={4}>
                <DiscoverElement />
            </CustomTabPanel>
            <CustomTabPanel tabValue={tabValue} index={5}>
                <DiscoverElement />
            </CustomTabPanel>
        </Container>
    );
}
