import {
    Box,
    Container,
    Divider,
    MenuItem,
    Paper,
    Select,
    Table,
    TableBody,
    TableCell,
    TableContainer,
    TableHead,
    TableRow,
    Typography,
    FormControl,
    Button,
    ThemeProvider,
} from "@mui/material";
import React from "react";
import FormatAlignLeftIcon from "@mui/icons-material/FormatAlignLeft";
import FormatListBulletedIcon from "@mui/icons-material/FormatListBulleted";
import customTheme from "../../../custom-theme";

export default function PrivacyPolicy() {
    function createData(title: string) {
        return { title };
    }

    const rows = [
        createData("Education Background"),
        createData("Experience Background"),
        createData("History"),
        createData("Rating"),
        createData("Comments"),
    ];


    return (
        <>
        <ThemeProvider theme={customTheme}>
            <Container sx={{height:"100%"}}>
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
                <Box>
                    <TableContainer
                    >
                        <Table sx={{ minWidth: 700, mt: 3 }} aria-label="simple table">
                            <TableHead>
                                <TableRow sx={{ backgroundColor: "#E9F6FF" }}>
                                    <TableCell sx={{py:1}}>
                                        <Box
                                            sx={{
                                                display: "flex",
                                                alignItems: "center",
                                                ml: 3,
                                                py:0
                                            }}
                                        >
                                            <FormatAlignLeftIcon
                                                sx={{ mr: "5px" }}
                                            />
                                            <Typography variant="h6">Title</Typography>
                                        </Box>
                                    </TableCell>
                                    <TableCell sx={{py:1}} align="right">
                                        <Box
                                            sx={{
                                                display: "flex",
                                                alignItems: "center",
                                                justifyContent: "end",
                                                mr: "75px",py:0
                                            }}
                                        >
                                            <FormatListBulletedIcon
                                                sx={{ mr: "5px" }}
                                            />
                                            <Typography variant="h6">Status</Typography>
                                        </Box>
                                    </TableCell>
                                </TableRow>
                            </TableHead>
                            <TableBody>
                                {rows.map((row) => (
                                    <TableRow
                                        key={row.title}
                                        sx={{
                                            "&:last-child td, &:last-child th":
                                                {
                                                    border: 0,
                                                },p:0
                                        }}
                                    >
                                        <TableCell >
                                            <Box sx={{ ml: 3 ,p:0}}>
                                                <Typography>
                                                    {row.title}
                                                </Typography>
                                            </Box>
                                        </TableCell>
                                        <TableCell align="right" sx={{p:0}}>
                                            <Box sx={{ mr: 3 }}>
                                                <FormControl size="small"
                                                    sx={{ m: 0, minWidth: 120 }}
                                                >
                                                    <Select
                                                        sx={{
                                                            px:5,
                                                                m:0
                                                        }}
                                                        defaultValue="userOnly"
                                                        displayEmpty
                                                        inputProps={{
                                                            "aria-label":
                                                                "Without label",
                                                        }}
                                                    >
                                                        <MenuItem
                                                            value="userOnly"
                                                            sx={{
                                                                "&.Mui-selected":
                                                                    {
                                                                        backgroundColor:
                                                                            "#99C9FF",
                                                                    },
                                                                "&:hover.Mui-selected":
                                                                    {
                                                                        backgroundColor:
                                                                            "#99C9FF",
                                                                    },
                                                            }}
                                                        >
                                                            <Typography>
                                                                User Only
                                                            </Typography>
                                                        </MenuItem>
                                                        <MenuItem
                                                            value="EveryOne"
                                                            sx={{
                                                                "&.Mui-selected":
                                                                    {
                                                                        backgroundColor:
                                                                            "#99C9FF",
                                                                    },
                                                                "&:hover.Mui-selected":
                                                                    {
                                                                        backgroundColor:
                                                                            "#99C9FF",
                                                                    },
                                                            }}
                                                        >
                                                            <Typography>
                                                                EveryOne
                                                            </Typography>
                                                        </MenuItem>
                                                    </Select>
                                                </FormControl>
                                            </Box>
                                        </TableCell>
                                    </TableRow>
                                ))}
                            </TableBody>
                        </Table>
                    </TableContainer>
                    <Box
                        sx={{
                            display: "flex",
                            justifyContent: "center",
                            mt: 5,
                        }}
                    >
                        <Button
                            variant="contained"
                            sx={{
                                borderRadius: 0,
                                backgroundColor: customTheme.palette.primary,
                                color: "black",
                                boxShadow:
                                    "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                                "&:hover": {
                                color: "white",
                                boxShadow: "3px 3px 3px 2px #E9F6FF",
                                    backgroundColor: customTheme.palette.primary,
                                },
                                px:4
                            }}
                        >
                                    
                            <Typography sx={{textTransform:"capitalize"}}>Submit Changes</Typography>
                        </Button>
                    </Box>
                </Box>
            </Container>
        </ThemeProvider>
        </>
    );
}
