import React from "react";
import Box from "@mui/material/Box";
import {
    Button,
    Container,
    Divider,
    Grid,
    IconButton,
    Typography,
} from "@mui/material";
import customTheme from "../../custom-theme";
import CardPic from "../../components/assets/Cardmini.png";
import AddCircleOutlineIcon from "@mui/icons-material/AddCircleOutline";
import MoreHorizIcon from "@mui/icons-material/MoreHoriz";
import EastIcon from "@mui/icons-material/East";
export default function WalletCards() {
    const transactions = [
        {
            id: 1,
            date: "12 May 2023 04:03 AM",
            amount: "+$872,617,000",
            type: "Deposit",
        },
        {
            id: 2,
            date: "22 July 2023 09:03 AM",
            amount: "+$782,617,000",
            type: "Withdraw",
        },
        {
            id: 3,
            date: "15 October 2023 10:03 AM",
            amount: "+$542,617,000",
            type: "Withdraw",
        },
        {
            id: 4,
            date: "17 May 2023 11:03 AM",
            amount: "+$212,617,000",
            type: "Deposit",
        },
        {
            id: 5,
            date: "31 March 2023 12:03 AM",
            amount: "+$82,617,000",
            type: "Withdraw",
        },
        {
            id: 6,
            date: "04 April 2023 04:03 AM",
            amount: "+$102,617,000",
            type: "Deposit",
        },
    ];

    return (
        <>
            <Box
                sx={{
                    border: 1,
                    borderColor: "#757575",
                    my: 2,
                    height: "100%",
                }}
            >
                <Grid container spacing={0} sx={{ p: 4, height: "100%" }}>
                    <Grid item sx={{ width: "100%" }}>
                        <Box
                            sx={{
                                display: "flex",
                                justifyContent: "space-between",
                                width: "100%",
                            }}
                        >
                            <Typography
                                component={"span"}
                                sx={{
                                    alignSelf: "center",
                                    fontWeight: "bolder",
                                }}
                            >
                                Your Card
                            </Typography>
                            <Box>
                                <IconButton>
                                    <AddCircleOutlineIcon />
                                </IconButton>
                                <IconButton>
                                    <MoreHorizIcon />
                                </IconButton>
                            </Box>
                        </Box>
                        <Box sx={{ my: 2, position:"relative",width:"100%" }}>
                            <img width={"100%"} src={CardPic} alt="CardPic" />
                            <Typography
                                color="#ffffff"
                                variant="body1"
                                sx={{
                                    position: "absolute",
                                    top: "33%",
                                    left: "17.5%",
                                    transform: "translate(0, 50%)",
                                }}
                            >
                                1234 5678 9123 4567
                            </Typography>
                            <Typography
                                color="#ffffff"
                                variant="body2"
                                sx={{
                                    position: "absolute",
                                    left: "10%",
                                    bottom: "10%",
                                }}
                            >
                                John Doe
                            </Typography>
                            <Typography
                                color="#ffffff"
                                variant="body2"
                                sx={{
                                    position: "absolute",
                                    right: "10%",
                                    bottom: "10%",
                                }}
                            >
                                06 / 21
                            </Typography>
                        </Box>
                        <Box
                            sx={{
                                display: "flex",
                                justifyContent: "space-between",
                                width: "100%",
                            }}
                        >
                            <Typography
                                component={"span"}
                                sx={{
                                    alignSelf: "center",
                                    fontWeight: "bolder",
                                }}
                            >
                                Recent Transactions
                            </Typography>
                            <Box>
                                <IconButton>
                                    <EastIcon />
                                </IconButton>
                            </Box>
                        </Box>

                        <Box
                            className="scrollbarThin"
                            sx={{ maxHeight: "14rem", overflowY: "scroll" , overflowX:"hidden"}}
                        >
                            {transactions.map((item) => (
                                <Box
                                    key={item.id}
                                    sx={{
                                        display: "flex",
                                        justifyContent: "space-between",
                                        width: "100%",
                                        mt: 2,
                                    }}
                                >
                                    <Box>
                                        <Typography variant="h6">
                                            {item.type}
                                        </Typography>
                                        <Typography
                                            variant="subtitle1"
                                            color="#757575"
                                        >
                                            {item.date}
                                        </Typography>
                                    </Box>
                                    <Box>
                                        <Typography
                                            sx={{
                                                color:
                                                    item.type === "Deposit"
                                                        ? customTheme.palette
                                                              .success.main
                                                        : customTheme.palette
                                                              .error.main,
                                            }}
                                            variant="h6"
                                        >
                                            {item.amount}
                                        </Typography>
                                    </Box>
                                </Box>
                            ))}
                        </Box>
                    </Grid>
                </Grid>
            </Box>
        </>
    );
}
