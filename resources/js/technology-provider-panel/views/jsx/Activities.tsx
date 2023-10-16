import * as React from "react";
import { styled } from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, { tableCellClasses } from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import {Box, Container, Divider, Typography} from "@mui/material";
import PersonOutlineOutlinedIcon from "@mui/icons-material/PersonOutlineOutlined";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import FormatListBulletedOutlinedIcon from "@mui/icons-material/FormatListBulletedOutlined";
import {useQuery} from "react-query";
import axios from "axios";
import {route} from './../../helpers.js'

const StyledTableCell = styled(TableCell)(({ theme }) => ({
    [`&.${tableCellClasses.head}`]: {
        backgroundColor: "#e9f6ff",
        color: "#000",
    },
    [`&.${tableCellClasses.body}`]: {
        fontSize: 14,
    },
}));

function createData(
    date: string,
    ipAddress: string,
    country: string,
    system: string
) {
    return { date, ipAddress, country, system };
}

export default function Activities() {

    const Agreements = useQuery('Agreements', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.activities"));
        Agreements.data = data.data;
        return Agreements;
    });
    if (Agreements.isLoading){
        return <div>loading...</div>
    }
    return (
        <Container sx={{width:'100%'}}>
                <Box
                    sx={{
                        display: "flex",
                        flexDirection: "column",
                        flexGrow:0
                    }}
                >
                    <Typography component="h2" variant="h5">
                        Activities
                    </Typography>
                    <Divider sx={{ mt: 1, mb: 0, borderColor: "#000000" }} />
                </Box>
            <TableContainer>
                <Table
                    sx={{ minWidth: 700, mt: 3 }}
                    aria-label="customized table"
                >
                    <TableHead>
                        <TableRow>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                    width: "30%",
                                }}
                                align="center"
                            >
                                <Typography
                                    sx={{
                                        display: "flex",
                                        flexDirection: "row",
                                        justifyContent: "center",
                                        alignItems: "center",
                                    }}
                                >
                                    <CalendarTodayOutlinedIcon
                                        fontSize="small"
                                        sx={{ mr: 0.5 }}
                                    />
                                    Date
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                }}
                                align="center"
                            >
                                <Typography
                                    sx={{
                                        display: "flex",
                                        flexDirection: "row",
                                        justifyContent: "center",
                                        alignItems: "center",
                                    }}
                                >
                                    <PersonOutlineOutlinedIcon
                                        sx={{ mr: 0.5 }}
                                    />
                                    IP Address
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                }}
                                align="center"
                            >
                                <Typography
                                    sx={{
                                        display: "flex",
                                        flexDirection: "row",
                                        justifyContent: "center",
                                        alignItems: "center",
                                    }}
                                >
                                    <FormatAlignLeftOutlinedIcon
                                        fontSize="small"
                                        sx={{ mr: 0.5 }}
                                    />
                                    Country
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                }}
                                align="center"
                            >
                                <Typography
                                    sx={{
                                        display: "flex",
                                        flexDirection: "row",
                                        justifyContent: "center",
                                        alignItems: "center",
                                    }}
                                >
                                    <FormatListBulletedOutlinedIcon
                                        fontSize="small"
                                        sx={{ mr: 0.5 }}
                                    />
                                    System
                                </Typography>
                            </StyledTableCell>
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {Agreements.data.data.map((row) => (
                            <TableRow
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                }}
                                key={row.created_at}
                            >
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.created_at}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.ip}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.country}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.os}
                                </StyledTableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
            </TableContainer>
        </Container>
    );
}
