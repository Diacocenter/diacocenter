import { Box, Container, Divider, Grid, Typography } from "@mui/material";
import React from "react";
import WalletForm from "./WalletTable";
import WalletBalance from "./WalletBalance";
import WalletCards from "./WalletCards";
export default function Wallet() {
    return (
        <Container>
            <Box sx={{ mb: 3, p: 0, height: "100%", flexGrow: 1 }}>
                <Box
                    sx={{
                        marginTop: 4,
                        display: "flex",
                        flexDirection: "column",
                    }}
                >
                    <Typography component="h1" variant="h4">
                        Wallet
                    </Typography>
                    <Divider sx={{ mt: 2, mb: 4 }} />
                </Box>
                <Grid container sx={{ height: "100%" }}>
                    <Grid item xs={12} md={7} sx={{ height: "100%" }}>
                        <WalletBalance/>
                        <WalletForm />
                    </Grid>
                    <Grid
                        item
                        xs={12} md={5}
                        sx={{
                            height: "100%",
                            display: "flex",
                            flexDirection: "column",
                            px: {md:2},
                        }}
                    >
                        <WalletCards/>
                    </Grid>
                </Grid>
            </Box>
        </Container>
    );
}
