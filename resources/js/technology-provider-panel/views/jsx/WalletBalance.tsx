import React from "react";
import Box from "@mui/material/Box";
import { Button, Container, Divider, Grid, Typography } from "@mui/material";
import customTheme from "../../custom-theme";

export default function WalletBalance() {
    return (
        <>
            <Box sx={{ border: 1, borderColor: "#757575" , my:2, height:"100%" }}>
                <Grid container spacing={0} sx={{ p: 4 , height:"100%"}}>
                    <Grid item xs={12} md={6} sx={{ textAlign: "center" }}>
                        <Box>
                            <Typography
                                variant="h6"
                                sx={{ pb: 2, fontWeight: "bold" }}
                            >
                                Your Total Balance
                            </Typography>
                            <Typography variant="h3">$42,400,000</Typography>
                            <Typography variant="subtitle1" color="#757575">
                                12 May 2023 10:03 AM
                            </Typography>
                            <Box>
                                <Grid
                                    container
                                    spacing={6}
                                    sx={{ pt: 3, px: 3, alignItems: "center" }}
                                >
                                    <Grid item xs={12} md={6}>
                                        <Button
                                            sx={{
                                                textTransform: "capitalize",
                                            }}
                                            size="small"
                                            fullWidth
                                            variant="contained"
                                        >
                                            Deposit
                                        </Button>
                                    </Grid>
                                    <Grid item xs={12} md={6}>
                                        <Button
                                            sx={{
                                                textTransform: "capitalize",
                                                backgroundColor: "#ffffff",
                                                color: "black",
                                                boxShadow:
                                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                                ":hover": {
                                                  backgroundColor: "#ffffff",
                                                    color: "black",
                                                    boxShadow:
                                                        "3px 3px 3px 2px #616161",
                                                },
                                            }}
                                            size="small"
                                            fullWidth
                                            variant="contained"
                                        >
                                            Withdraw
                                        </Button>
                                    </Grid>
                                </Grid>
                            </Box>
                        </Box>
                    </Grid>
                    <Grid item sx={{ my: 0.3 }}>
                        <Divider orientation="vertical" />
                    </Grid>
                    <Grid
                        item
                        xs={12} md={5.9}
                        sx={{ textAlign: {xs:"center",md:"right"}, alignSelf: "center", pr: 3 }}
                    >
                        <Typography variant="h4">$42,400,000</Typography>
                        <Typography variant="h4" sx={{ my: 2 }}>
                            $42,400,000
                        </Typography>
                        <Typography variant="h4">$42,400,000</Typography>
                    </Grid>
                </Grid>
            </Box>
        </>
    );
}
