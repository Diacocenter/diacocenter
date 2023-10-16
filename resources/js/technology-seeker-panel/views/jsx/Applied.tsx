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
    companyName: string,
    projectName: string,
    topic: string,
    createdTime: string,
    cancel: React.ReactNode
) {
    return {companyName, projectName, topic, createdTime, cancel};
}

const rows = [
    createData(
        "Lorem Ipsum1",
        "Lorem Ipsum1",
        "oil & gas1",
        "2023/01/20",
        <DisabledByDefaultOutlinedIcon/>
    ),
    createData(
        "Lorem Ipsum2",
        "Lorem Ipsum2",
        "IT2",
        "2023/01/20",
        <DisabledByDefaultOutlinedIcon/>
    ),
    createData(
        "Lorem Ipsum3",
        "Lorem Ipsum3",
        "oil & gas3",
        "2023/01/20",
        <DisabledByDefaultOutlinedIcon/>
    ),
    createData(
        "Lorem Ipsum4",
        "Lorem Ipsum4",
        "oil & gas4",
        "2023/01/20",
        <DisabledByDefaultOutlinedIcon/>
    ),
    createData(
        "Lorem Ipsum5",
        "Lorem Ipsum5",
        "oil & gas5",
        "2023/01/20",
        <DisabledByDefaultOutlinedIcon/>
    ),
];

export default function Applied() {
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
                            {rows.map((row) => (
                                <TableRow
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    key={row.companyName}
                                >
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.companyName}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.projectName}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.topic}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.createdTime}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        <IconButton
                                            sx={{mr: 0.5, color: "#F70000"}}
                                        >
                                            {row.cancel}
                                        </IconButton>
                                    </StyledTableCell>
                                </TableRow>
                            ))}
                        </TableBody>
                    </Table>
                </TableContainer>
            </Box>
        </Container>
    );
}
