import * as React from "react";
import {styled} from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, {tableCellClasses} from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import {Box, Container, Divider, IconButton, Typography} from "@mui/material";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import DescriptionOutlinedIcon from "@mui/icons-material/DescriptionOutlined";
import DisabledByDefaultOutlinedIcon from "@mui/icons-material/DisabledByDefaultOutlined";
import ClearOutlinedIcon from "@mui/icons-material/ClearOutlined";
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

export default function Applied() {

    const contactDetail = useQuery('contactDetail', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.project"));
        contactDetail.data = data.data;
        return contactDetail;
    });

    return (
        <Container>
            <Box>
                <Box
                    sx={{
                        marginTop: 4,
                        display: "flex",
                        flexDirection: "column",
                    }}
                >
                    <Typography component="h1" variant="h4">
                        Applied
                    </Typography>
                    <Divider sx={{mt: 2, mb: 4}}/>
                </Box>
                <TableContainer>
                    <Table
                        sx={{minWidth: 700, mt: 3}}
                        aria-label="customized table"
                    >
                        <TableHead>
                            <TableRow>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                        width: "22%",
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
                                        <CorporateFareIcon sx={{mr: 0.5}}/>
                                        Company Name
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
                                        <DescriptionOutlinedIcon
                                            sx={{mr: 0.5}}
                                        />
                                        Project Name
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
                                            sx={{mr: 0.5}}
                                        />
                                        Topic
                                    </Typography>
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                        width: "25%",
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
                                        Created Time
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
                                        <ClearOutlinedIcon sx={{mr: 0.5}}/>
                                        Cancel
                                    </Typography>
                                </StyledTableCell>
                            </TableRow>
                        </TableHead>
                        <TableBody>
                            {/*{rows.map((row) => (*/}
                            {/*    <TableRow*/}
                            {/*        sx={{*/}
                            {/*            border: 1,*/}
                            {/*            borderColor: "#e9f6ff",*/}
                            {/*            borderWidth: 3,*/}
                            {/*        }}*/}
                            {/*        key={row.companyName}*/}
                            {/*    >*/}
                            {/*        <StyledTableCell*/}
                            {/*            sx={{*/}
                            {/*                border: 1,*/}
                            {/*                borderColor: "#e9f6ff",*/}
                            {/*                borderWidth: 3,*/}
                            {/*            }}*/}
                            {/*            align="center"*/}
                            {/*        >*/}
                            {/*            {row.companyName}*/}
                            {/*        </StyledTableCell>*/}
                            {/*        <StyledTableCell*/}
                            {/*            sx={{*/}
                            {/*                border: 1,*/}
                            {/*                borderColor: "#e9f6ff",*/}
                            {/*                borderWidth: 3,*/}
                            {/*            }}*/}
                            {/*            align="center"*/}
                            {/*        >*/}
                            {/*            {row.projectName}*/}
                            {/*        </StyledTableCell>*/}
                            {/*        <StyledTableCell*/}
                            {/*            sx={{*/}
                            {/*                border: 1,*/}
                            {/*                borderColor: "#e9f6ff",*/}
                            {/*                borderWidth: 3,*/}
                            {/*            }}*/}
                            {/*            align="center"*/}
                            {/*        >*/}
                            {/*            {row.topic}*/}
                            {/*        </StyledTableCell>*/}
                            {/*        <StyledTableCell*/}
                            {/*            sx={{*/}
                            {/*                border: 1,*/}
                            {/*                borderColor: "#e9f6ff",*/}
                            {/*                borderWidth: 3,*/}
                            {/*            }}*/}
                            {/*            align="center"*/}
                            {/*        >*/}
                            {/*            {row.createdTime}*/}
                            {/*        </StyledTableCell>*/}
                            {/*        <StyledTableCell*/}
                            {/*            sx={{*/}
                            {/*                border: 1,*/}
                            {/*                borderColor: "#e9f6ff",*/}
                            {/*                borderWidth: 3,*/}
                            {/*            }}*/}
                            {/*            align="center"*/}
                            {/*        >*/}
                            {/*            <IconButton*/}
                            {/*                sx={{mr: 0.5, color: "#F70000"}}*/}
                            {/*            >*/}
                            {/*                {row.cancel}*/}
                            {/*            </IconButton>*/}
                            {/*        </StyledTableCell>*/}
                            {/*    </TableRow>*/}
                            {/*))}*/}
                        </TableBody>
                    </Table>
                </TableContainer>
            </Box>
        </Container>
    );
}
