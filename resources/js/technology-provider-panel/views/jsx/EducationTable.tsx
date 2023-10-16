import {
    Box,
    IconButton,
    Table,
    TableBody,
    TableCell,
    TableContainer,
    TableHead,
    TableRow,
    Typography,
    styled,
    tableCellClasses,
} from "@mui/material";
import * as React from "react";
import PersonOutlineOutlinedIcon from "@mui/icons-material/PersonOutlineOutlined";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import FormatListBulletedOutlinedIcon from "@mui/icons-material/FormatListBulletedOutlined";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import BusinessCenterOutlinedIcon from "@mui/icons-material/BusinessCenterOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import WorkOutlineOutlinedIcon from "@mui/icons-material/WorkOutlineOutlined";
import DriveFileRenameOutlineOutlinedIcon from "@mui/icons-material/DriveFileRenameOutlineOutlined";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import PlaceOutlinedIcon from '@mui/icons-material/PlaceOutlined';
import HistoryEduOutlinedIcon from '@mui/icons-material/HistoryEduOutlined';
import {useQuery} from "react-query";
import axios from "../../../axiosConfig.js";
import {route} from "../../helpers.js";
export default function EducationTable() {
    const StyledTableCell = styled(TableCell)(({ theme }) => ({
        [`&.${tableCellClasses.head}`]: {
            backgroundColor: "#e9f6ff",
            color: "#000",
        },
        [`&.${tableCellClasses.body}`]: {
            fontSize: 14,
        },
    }));
    const educationList = useQuery("educationList", async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.education.index"));
        educationList.data = data.data;
        return educationList;
    });

    function createData(
        Degree: string,
        Field: string,
        SchoolName: string,
        StartDate: string,
        Location: string,
        Edit: React.ReactNode,
        Remove: React.ReactNode
    ) {
        return { Degree,Field, SchoolName, Location, StartDate, Edit, Remove };
    }

    const rows = [
        createData(
            "Engineer1",
            "Engineer1",
            "Landa1",
            "On Site",
            "2023/oct",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer2",
            "Engineer1",
            "Landa2",
            "Remote",
            "2023/oct",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer3",
            "Engineer1",
            "Landa3",
            "On Site",
            "2023/oct",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer4",
            "Engineer1",
            "Landa4",
            "On Site",
            "2023/oct",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer5",
            "Engineer1",
            "Landa5",
            "Hybrid",
            "2023/oct",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
    ];
    if (educationList.isLoading) {
        return  <p>Loading</p>
    }

    if (educationList.isError) {
        return <p>asghar Error</p>
    }

    return (
        <Box>
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
                                    <BusinessCenterOutlinedIcon
                                        sx={{ mr: 0.5 }}
                                    />
                                    School Name
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
                                    <BusinessCenterOutlinedIcon
                                        sx={{ mr: 0.5 }}
                                    />
                                    Field
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3, width: "20%",}} align="center">
                                <Typography
                                    sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <HistoryEduOutlinedIcon sx={{ mr: 0.5 }} />
                                    Degree
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
                                    <PlaceOutlinedIcon sx={{ mr: 0.5 }} />
                                    Location
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
                                        sx={{ mr: 0.5 }}
                                    />
                                    Start Date
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: "#e9f6ff",
                                    borderWidth: 3,
                                    width: "20%",
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
                                    <DriveFileRenameOutlineOutlinedIcon
                                        sx={{ mr: 0.5 }}
                                    />
                                    Edit
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
                                key={row.Degree}
                            >
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.Degree}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.Field}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.SchoolName}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.StartDate}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.Location}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    <IconButton sx={{ color: "#000000" }}>
                                        {row.Edit}
                                    </IconButton>
                                    <IconButton sx={{ color: "#F70000" }}>
                                        {row.Remove}
                                    </IconButton>
                                </StyledTableCell>
                            </TableRow>
                        ))}
                    </TableBody>
                </Table>
            </TableContainer>
        </Box>
    );
}
