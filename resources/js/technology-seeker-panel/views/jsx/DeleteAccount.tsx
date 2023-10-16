import {Box, Button, Container, Divider, Grid, Typography} from "@mui/material";
import * as React from "react";
import deleteAccountConfirm from "./DeleteAccountConfirmation"

export default function DeleteAccount() {
    return (
        <Container >
                <Box
                    sx={{
                        display: "flex",
                        flexDirection: "column",
                        flexGrow:0
                    }}
                >
                    <Typography component="h2" variant="h5">
                        Delete Account
                    </Typography>
                    <Divider sx={{ mt: 1, mb: 2, borderColor: "#000000" }} />
                </Box>
            <Typography variant="body1" component="h2">
                If you want to delete your account on Diaco platform, click
                on the bottom to continue.
            </Typography>
            <Grid container justifyContent={"center"}>
                <Grid item xs={12} md={4} lg={3} textAlign={"center"}>
                    <Button
                        fullWidth
                        sx={{
                            my: 4,textTransform:"capitalize"
                        }}
                        variant="contained"
                        href="/technology-provider-panel/setting/delete-account/delete-account-confirm"
                    >
                        Continue
                    </Button>
                </Grid>
            </Grid>
        </Container>
    );
}
