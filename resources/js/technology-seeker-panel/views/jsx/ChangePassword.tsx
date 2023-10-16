import * as React from "react";
import {Box, Button, Container, Divider, Typography} from "@mui/material";
import FormControl from "@mui/material/FormControl";
import InputAdornment from "@mui/material/InputAdornment";
import OutlinedInput from "@mui/material/OutlinedInput";
import InputLabel from "@mui/material/InputLabel";
import Visibility from "@mui/icons-material/Visibility";
import VisibilityOff from "@mui/icons-material/VisibilityOff";
import IconButton from "@mui/material/IconButton";
import Grid from "@mui/material/Grid";

export default function ChangePassword() {
    const [showPassword, setShowPassword] = React.useState(false);

    const handleClickShowPassword = () => setShowPassword((show) => !show);

    const handleMouseDownPassword = (
        event: React.MouseEvent<HTMLButtonElement>
    ) => {
        event.preventDefault();
    };

    return (
        <Container>
            <Box>
                <Box
                    sx={{
                        display: "flex",
                        flexDirection: "column",
                    }}
                >
                    <Typography component="h1" variant="h5">
                        Change Password
                    </Typography>
                    <Divider sx={{mt: 1, mb: 0}}/>
                    <Grid container>
                        <Grid item xs={12} md={6}>
                            {/* <Typography variant="h6">Current Password</Typography> */}
                            <FormControl size="small"
                                sx={{my: 2, borderRadius:0}}
                                fullWidth
                                variant="outlined"
                            >
                                <InputLabel htmlFor="outlined-adornment-password">
                                    Current Password
                                </InputLabel>
                                <OutlinedInput sx={{ borderRadius:0}}
                                    id="outlined-adornment-password1"
                                    type={showPassword ? "text" : "password"}
                                    endAdornment={
                                        <InputAdornment position="end">
                                            <IconButton
                                                aria-label="toggle password visibility"
                                                onClick={
                                                    handleClickShowPassword
                                                }
                                                onMouseDown={
                                                    handleMouseDownPassword
                                                }
                                                edge="end"
                                            >
                                                {showPassword ? (
                                                    <VisibilityOff/>
                                                ) : (
                                                    <Visibility/>
                                                )}
                                            </IconButton>
                                        </InputAdornment>
                                    }
                                    label="Current Password"
                                />
                            </FormControl>
                        </Grid>
                    </Grid>
                    <Grid container>
                        <Grid item xs={12} md={6}>
                            {/* <Typography variant="h6">New Password</Typography> */}
                            <FormControl size="small"
                                sx={{my: 2,borderRadius:0}}
                                fullWidth
                                variant="outlined"
                            >
                                <InputLabel htmlFor="outlined-adornment-password">
                                    New Password
                                </InputLabel>
                                <OutlinedInput  sx={{ borderRadius:0}}
                                    id="outlined-adornment-password2"
                                    type={showPassword ? "text" : "password"}
                                    endAdornment={
                                        <InputAdornment position="end">
                                            <IconButton
                                                aria-label="toggle password visibility"
                                                onClick={
                                                    handleClickShowPassword
                                                }
                                                onMouseDown={
                                                    handleMouseDownPassword
                                                }
                                                edge="end"
                                            >
                                                {showPassword ? (
                                                    <VisibilityOff/>
                                                ) : (
                                                    <Visibility/>
                                                )}
                                            </IconButton>
                                        </InputAdornment>
                                    }
                                    label="New Password"
                                />
                            </FormControl>
                        </Grid>
                    </Grid>
                    <Grid container>
                        <Grid item xs={12} md={6}>
                            {/* <Typography variant="h6">Repeat New Password</Typography> */}
                            <FormControl size="small"
                                sx={{my: 2 , borderRadius:0}}
                                fullWidth
                                variant="outlined"
                            >
                                <InputLabel htmlFor="outlined-adornment-password">
                                    Repeat New Password
                                </InputLabel>
                                <OutlinedInput sx={{ borderRadius:0}}
                                    id="outlined-adornment-password3"
                                    type={showPassword ? "text" : "password"}
                                    endAdornment={
                                        <InputAdornment position="end">
                                            <IconButton
                                                aria-label="toggle password visibility"
                                                onClick={
                                                    handleClickShowPassword
                                                }
                                                onMouseDown={
                                                    handleMouseDownPassword
                                                }
                                                edge="end"
                                            >
                                                {showPassword ? (
                                                    <VisibilityOff/>
                                                ) : (
                                                    <Visibility/>
                                                )}
                                            </IconButton>
                                        </InputAdornment>
                                    }
                                    label="Repeat New Password"
                                />
                            </FormControl>
                        </Grid>
                    </Grid>
                    <Grid container justifyContent={"center"}>
                        <Grid item xs={12} md={4} lg={3} textAlign={"center"}>
                            <Button
                                fullWidth
                                sx={{
                                    my: 4,textTransform:"capitalize"
                                }}
                                variant="contained"
                            >
                                Submit
                            </Button>
                        </Grid>
                    </Grid>
                </Box>
            </Box>
        </Container>
    );
}

