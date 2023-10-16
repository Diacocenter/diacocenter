import * as React from 'react';
import Tabs from '@mui/material/Tabs';
import Tab from '@mui/material/Tab';
import Typography from '@mui/material/Typography';
import Box from '@mui/material/Box';
import customTheme from '../../custom-theme.js'
import PrivacyPolicy from "./PrivacyPolicy";
import ChangePassword from "./ChangePassword";
import Activities from "./Activities";
import DeleteAccount from "./DeleteAccount";
import VisibilityOffIcon from '@mui/icons-material/VisibilityOff';
import VpnKeyIcon from '@mui/icons-material/VpnKey';
import PersonOffIcon from '@mui/icons-material/PersonOff';
import MonitorHeartIcon from '@mui/icons-material/MonitorHeart';

interface TabPanelProps {
    children?: React.ReactNode;
    index: number;
    value: number;
}

function TabPanel(props: TabPanelProps) {
    const {children, value, index, ...other} = props;

    return (
        <Box
            role="tabpanel"
            hidden={value !== index}
            id={`vertical-tabpanel-${index}`}
            aria-labelledby={`vertical-tab-${index}`}
            {...other}
        >
            {value === index && (
                    <Box sx={{p: 3, width: '100%' , height:"100%"}}>
                    <Box sx={{height:"100%"}}>{children}</Box>
                </Box>
            )}
        </Box>
    );
}

function a11yProps(index: number) {
    return {
        id: `vertical-tab-${index}`,
        'aria-controls': `vertical-tabpanel-${index}`,
    };
}

export default function Setting() {
    const [value, setValue] = React.useState(0);

    const handleChange = (event: React.SyntheticEvent, newValue: number) => {
        setValue(newValue);
    };

    return (
        <Box
            sx={{
                flexGrow: 1,
                backgroundColor: 'background.paper',
                display: 'flex',
                width: '100%',
                height: '100%'
            }}
        >
            <Tabs
                orientation="vertical"
                variant="scrollable"
                value={value}
                onChange={handleChange}
                aria-label="Vertical tabs example"
                sx={{
                    borderRight: 1,
                    borderColor: customTheme.palette.info.main,
                    backgroundColor: customTheme.palette.primary.main,
                    py:1

                }}>
                <Tab sx={{py:0}} label={(
                    <Box sx={{
                        display: 'flex',
                        width: '100%',
                        paddingX: 4,
                        paddingY: 1,
                        color: customTheme.palette.common.white,
                        backgroundColor: customTheme.palette.primary.dark,
                        textAlign: 'left'
                    }}>
                        <VisibilityOffIcon sx={{marginRight: 2}}/>
                        <Typography variant="body2"  sx={{ textTransform: "capitalize" }}>Privacy Policy</Typography>
                    </Box>
                )}{...a11yProps(0)}
                />
                <Tab sx={{py:0}} label={
                    (
                        <Box sx={{
                            display: 'flex',
                            width: '100%',
                            paddingX: 4,
                            paddingY: 1,
                            color: customTheme.palette.common.white,
                            backgroundColor: customTheme.palette.primary.dark
                        }}>
                            <VpnKeyIcon sx={{marginRight: 2}}/>
                            <Typography variant="body2" sx={{ textTransform: "capitalize" }}>Change Password</Typography>
                        </Box>
                    )
                } {...a11yProps(1)} />
                <Tab sx={{py:0}} label={
                    (
                        <Box sx={{
                            display: 'flex',
                            width: '100%',
                            paddingX: 4,
                            paddingY: 1,
                            color: customTheme.palette.common.white,
                            backgroundColor: customTheme.palette.primary.dark
                        }}>
                            <MonitorHeartIcon sx={{marginRight: 2}}/>
                            <Typography variant="body2"  sx={{ textTransform: "capitalize" }}>Activities</Typography>
                        </Box>
                    )
                } {...a11yProps(2)} />
                <Tab sx={{py:0}} label={
                    (
                        <Box sx={{
                            display: 'flex',
                            width: '100%',
                            paddingX: 4,
                            paddingY: 1,
                            color: customTheme.palette.common.white,
                            backgroundColor: customTheme.palette.primary.dark
                        }}>
                            <PersonOffIcon sx={{marginRight: 2}}/>
                            <Typography variant="body2"  sx={{ textTransform: "capitalize" }}>Delete account</Typography>
                        </Box>
                    )
                } {...a11yProps(3)} />
            </Tabs>
            <Box sx={{width:"75%" , height:"100%"}}>
                <TabPanel sx={{ width: '100%' , height:"100%"}} value={value} index={0}>
                    <PrivacyPolicy/>
                </TabPanel>
                <TabPanel sx={{width: '100%', height:"100%"}} value={value} index={1}>
                    <ChangePassword/>
                </TabPanel>
                <TabPanel sx={{width: '100%', height:"100%"}} value={value} index={2}>
                    <Activities/>
                </TabPanel>
                <TabPanel sx={{width: '100%', height:"100%"}} value={value} index={3}>
                    <DeleteAccount/>
                </TabPanel>
            </Box>
        </Box>
    );
}
