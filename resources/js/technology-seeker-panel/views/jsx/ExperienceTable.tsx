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
export default function ExperienceTable() {
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
        CompanyName: string,
        JobTitle: string,
        StartDate: string,
        JobType: string,
        Edit: React.ReactNode,
        Remove: React.ReactNode
    ) {
        return { CompanyName, JobTitle, StartDate, JobType, Edit, Remove };
    }

    const rows = [
        createData(
            "Engineer1",
            "Landa1",
            "2023/oct",
            "On Site",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer2",
            "Landa2",
            "2023/oct",
            "Remote",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer3",
            "Landa3",
            "2023/oct",
            "On Site",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer4",
            "Landa4",
            "2023/oct",
            "On Site",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
        createData(
            "Engineer5",
            "Landa5",
            "2023/oct",
            "Hybrid",
            <EditOutlinedIcon />,
            <DeleteOutlineOutlinedIcon />
        ),
    ];

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
                                    Job Title
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
                                    <CorporateFareIcon sx={{ mr: 0.5 }} />
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
                                    <WorkOutlineOutlinedIcon sx={{ mr: 0.5 }} />
                                    Job Type
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
                                key={row.CompanyName}
                            >
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.CompanyName}
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    align="center"
                                >
                                    {row.JobTitle}
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
                                    {row.JobType}
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
