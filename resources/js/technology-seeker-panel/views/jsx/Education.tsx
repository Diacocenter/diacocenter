import {
    Alert,
    Box,
    Container,
    Divider,
    IconButton,
    Snackbar,
    styled,
    Table,
    TableBody,
    TableCell,
    tableCellClasses,
    TableContainer,
    TableHead,
    TableRow,
    Typography,
} from "@mui/material";
import * as React from "react";
import EducationTable from "./EducationTable";
import EducationForm from "./EducationForm";
import BusinessCenterOutlinedIcon from "@mui/icons-material/BusinessCenterOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import WorkOutlineOutlinedIcon from "@mui/icons-material/WorkOutlineOutlined";
import DriveFileRenameOutlineOutlinedIcon from "@mui/icons-material/DriveFileRenameOutlineOutlined";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import { useMutation, useQuery } from "react-query";
import axios from "../../../axiosConfig.js";
import { route } from "../../helpers.js";

export default function Education() {
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");

    const StyledTableCell = styled(TableCell)(({ theme }) => ({
        [`&.${tableCellClasses.head}`]: {
            backgroundColor: "#e9f6ff",
            color: "#000",
        },
        [`&.${tableCellClasses.body}`]: {
            fontSize: 14,
        },
    }));
    const educationList = useQuery(
        "educationList",
        async () => {
            const { data } = await axios.get(
                route("api.web.v1.technology-seeker-panel.education.index")
            );
            educationList.data = data.data;
            return educationList;
        },
        { refetchInterval: 5000 }
    );
    function editEducationalRecords(id) {
        console.log("asghar");
        let row = [];
        educationList.data.data.map((value, item) => {
            if (value.data.find((row) => row.id === id)) {
                return (row = value.data.find((row) => row.id === id));
            }
        });
        console.log(row);
    }

    const deleteEducationRecord = useMutation(
        async (id) => {
            setOpen(true);
            setStatus("warning");
            setMessage("Deleting...!");
            return await axios.delete(
                route(
                    "api.web.v1.technology-seeker-panel.education.destroy",
                    { education: id }
                )
            );
        },
        {
            onSuccess: (data) => {
                setStatus("success");
                setMessage("Deleted successfully");
                window.setTimeout(() => {
                    educationList.refetch();
                }, 1200);
            },
            onError: (data) => {
                setOpen(true);
                setStatus("error");
                setMessage("Error! Please try later");
            },
        }
    );

    if (educationList.isLoading) {
        return <p>Loading</p>;
    }
    if (educationList.isError) {
        return <p>Error</p>;
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
                    Education
                </Typography>
                <Divider sx={{ mt: 2, mb: 4, borderColor: "#000000" }} />
            </Box>
            <Box>
                <Snackbar
                    open={open}
                    autoHideDuration={6000}
                    onClose={() => {
                        setOpen(false);
                    }}
                    anchorOrigin={{ vertical: "top", horizontal: "right" }}
                >
                    <Alert
                        onClose={() => {
                            setOpen(false);
                        }}
                        severity={status}
                        sx={{ width: "100%" }}
                    >
                        {message}
                    </Alert>
                </Snackbar>
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
                                        <BusinessCenterOutlinedIcon
                                            sx={{ mr: 0.5 }}
                                        />
                                        Field
                                    </Typography>
                                </StyledTableCell>
                                <StyledTableCell
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                        width: "15%",
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
                                        <CalendarTodayOutlinedIcon
                                            fontSize="small"
                                            sx={{ mr: 0.5 }}
                                        />
                                        Start / End Date
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
                                        <WorkOutlineOutlinedIcon
                                            sx={{ mr: 0.5 }}
                                        />
                                        Location
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
                                        Edit / Delete
                                    </Typography>
                                </StyledTableCell>
                            </TableRow>
                        </TableHead>
                        <TableBody>
                            {educationList.data.data.map((value, key) => (
                                <TableRow
                                    sx={{
                                        border: 1,
                                        borderColor: "#e9f6ff",
                                        borderWidth: 3,
                                    }}
                                    key={key}
                                >
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {value.university}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {value.title}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {value.degree}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {value.from} / {value.to}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor: "#e9f6ff",
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {value.location}
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
                                            sx={{ color: "black" }}
                                            onClick={() =>
                                                editEducationalRecords(value.id)
                                            }
                                        >
                                            <EditOutlinedIcon />
                                        </IconButton>
                                        <IconButton
                                            onClick={() =>
                                                deleteEducationRecord.mutate(
                                                    value.id
                                                )
                                            }
                                        >
                                            <DeleteOutlineOutlinedIcon
                                                color={"error"}
                                            />
                                        </IconButton>
                                    </StyledTableCell>
                                </TableRow>
                            ))}
                        </TableBody>
                    </Table>
                </TableContainer>
            </Box>
            <EducationForm />
        </Container>
    );
}
