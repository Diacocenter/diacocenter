import * as React from "react";
import {styled} from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, {tableCellClasses} from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import {Box, Container, Divider, Link, Typography} from "@mui/material";
import PersonOutlineOutlinedIcon from "@mui/icons-material/PersonOutlineOutlined";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import FormatListBulletedOutlinedIcon from "@mui/icons-material/FormatListBulletedOutlined";
import OpenInNewIcon from '@mui/icons-material/OpenInNew';
import IconButton from "@mui/material/IconButton";
import {useQuery} from "react-query";
import axios from "axios";
import {route} from './../../helpers.js'

const StyledTableCell = styled(TableCell)(({theme}) => ({
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
    Title: string,
    Author: string,
    Status: string
) {
    return {date, Title, Author, Status};
}

const backgroundColors = (status) => {
    let backgroundColor = "";
    if (status === "Confirmed") backgroundColor = "#e9fff2";
    else if (status === "Pending") backgroundColor = "#e6e6e6";
    else backgroundColor = "#ffe9e9";
    return backgroundColor;
};
export default function Agreement() {
    const Agreements = useQuery('Agreements', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.agreements.index"));
        Agreements.data = data.data;
        return Agreements;
    });
if (Agreements.isLoading){
    return <div>loading...</div>
}
    return (
        <Container>
            <Box
                sx={{
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography component="h1" variant="h4">
                    Agreements
                </Typography>
                <Divider sx={{mt: 2, mb: 4}}/>
            </Box>
            <TableContainer>
                <Table
                    sx={{minWidth: 700, mt: 0}}
                    aria-label="customized table"
                >
                    <TableHead>
                        <TableRow>
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
                                        sx={{mr: 0.5}}
                                    />
                                    Title
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
                                    <CalendarTodayOutlinedIcon
                                        fontSize="small"
                                        sx={{mr: 0.5}}
                                    />
                                    Date
                                </Typography>
                            </StyledTableCell>
                            {/*<StyledTableCell*/}
                            {/*    sx={{*/}
                            {/*        border: 1,*/}
                            {/*        borderColor: "#e9f6ff",*/}
                            {/*        borderWidth: 3,*/}
                            {/*    }}*/}
                            {/*    align="center"*/}
                            {/*>*/}
                            {/*    <Typography*/}
                            {/*        sx={{*/}
                            {/*            display: "flex",*/}
                            {/*            flexDirection: "row",*/}
                            {/*            justifyContent: "center",*/}
                            {/*            alignItems: "center",*/}
                            {/*        }}*/}
                            {/*    >*/}
                            {/*        <PersonOutlineOutlinedIcon*/}
                            {/*            sx={{mr: 0.5}}*/}
                            {/*        />*/}
                            {/*        Author*/}
                            {/*    </Typography>*/}
                            {/*</StyledTableCell>*/}
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
                                        sx={{mr: 0.5}}
                                    />
                                    Status
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
                                key={row.date}
                            >
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                        py:1.5
                                    }}
                                    align="center"
                                >
                                    <Link underline="hover" href={row.link} color="black" >
                                        {row.title}
                                        <IconButton size="small" aria-label="Example" >
                                            <OpenInNewIcon fontSize="small"/>
                                        </IconButton>
                                    </Link>
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                        py:1.5
                                    }}
                                    align="center"
                                >
                                    {row.date}
                                </StyledTableCell>
                                {/*<StyledTableCell*/}
                                {/*    sx={{*/}
                                {/*        border: 1,*/}
                                {/*        borderColor: "#e9f6ff",*/}
                                {/*        borderWidth: 3,*/}
                                {/*        py:1.5*/}

                                {/*    }}*/}
                                {/*    align="center"*/}
                                {/*>*/}
                                {/*    {row.Author}*/}
                                {/*</StyledTableCell>*/}
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        py:1.5

                                    }}
                                    align="center"
                                >
                                    <Typography
                                        sx={{
                                            backgroundColor: backgroundColors(
                                                row.Status
                                            ),
                                            width: 1 / 2,
                                            margin: "auto",
                                        }}
                                        align="center"
                                    >
                                        {(row.status===0)?("Pending"):(row.status===1)?("Confirmed"):("Canceled")}
                                    </Typography>
                                </StyledTableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
            </TableContainer>
        </Container>
    );
}
