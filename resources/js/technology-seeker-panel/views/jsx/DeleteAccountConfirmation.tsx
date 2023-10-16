import {
    Box,
    Button,
    Divider,
    Grid,
    InputLabel,
    TextField,
    Typography,
} from "@mui/material";
import * as React from "react";

export default function DeleteAccountConfirmation() {
    return (
        <>
            <Box>
            <Box
                    sx={{
                        display: "flex",
                        flexDirection: "column",
                        flexGrow:0
                    }}
                >
                    <Typography component="h2" variant="h5">
                        Privacy & Policy
                    </Typography>
                    <Divider sx={{ mt: 1, mb: 0, borderColor: "#000000" }} />
                </Box>
                <Grid container>
                    <Grid item xs={12} md={6}>
                        <Typography
                            marginBottom={2}
                            variant="body1"
                            component="h2"
                            sx={{
                                display: "flex",
                                flexDirection: "column",
                            }}
                        >
                            verification code was just sent to
                            <Typography variant="button">
                                marshian@gmail.com
                            </Typography>
                        </Typography>
                        <Typography variant="body1" component="h2">
                            If you delete your account, all of your messages and
                            contacts will be deleted beyond retrieval. All
                            groups and channels that you've created will be
                            orphaned and left without a creator (but admins will
                            retain their rights). Warning! Please only delete
                            your account if you no longer want to use Diaco
                            Platform. If you delete your account now, it may not
                            be possible to sign up again for several days.
                        </Typography>
                    </Grid>
                </Grid>
                <Box
                    component="form"
                    sx={{
                        my: 3,
                        display: "flex",
                        flexDirection: "column",
                    }}
                    autoComplete="off"
                >
                    <Grid container>
                        <Grid item xs={12} md={6}>
                            <Typography variant="h6">
                                Why are you leaving us ?
                            </Typography>
                            <TextField
                                fullWidth
                                sx={{
                                    my: 2,
                                }}
                                id="outlined-required"
                                label="Enter your reason"
                            />
                        </Grid>
                    </Grid>
                    <Grid container>
                        <Grid item xs={12} md={6}>
                            <Typography variant="h6">
                                Confirmation code
                            </Typography>
                            <TextField
                                fullWidth
                                sx={{
                                    my: 2,
                                }}
                                required
                                id="outlined-error-helper-text"
                                label="Enter your code"
                            />
                        </Grid>
                    </Grid>
                </Box>
                <Grid container justifyContent={"center"}>
                    <Grid item xs={12} md={4} lg={3} textAlign={"center"}>
                        <Button
                            fullWidth
                            sx={{
                                my: 4,
                            }}
                            variant="contained"
                        >
                            Delete My Account
                        </Button>
                    </Grid>
                </Grid>
            </Box>
        </>
    );
}
