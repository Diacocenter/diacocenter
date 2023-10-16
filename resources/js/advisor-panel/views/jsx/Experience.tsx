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
import ExperienceForm from "./ExperienceForm";
import { useMutation, useQuery } from "react-query";
import axios from "../../../axiosConfig.js";
import { route } from "../../helpers.js";
import BusinessCenterOutlinedIcon from "@mui/icons-material/BusinessCenterOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import WorkOutlineOutlinedIcon from "@mui/icons-material/WorkOutlineOutlined";
import DriveFileRenameOutlineOutlinedIcon from "@mui/icons-material/DriveFileRenameOutlineOutlined";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import { useForm } from "react-hook-form";
type InputType = {
    id: string;
    title: { label: string; value: string };
    location: string;
    description: string;
    job_type: string;
    company_name: string;
    from: number;
    to: number;
};
export default function Experience() {
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

    const currentYear = new Date().getFullYear();
    const years = [];
    for (let i = currentYear - 50; i <= currentYear; i++) {
        years.push(i);
    }
    const {
        register,
        handleSubmit,
        watch,
        formState: { errors },
        control,
        setValue,
    } = useForm<InputType>({
        defaultValues: {},
    });
    const experienceList = useQuery(
        "experienceList",
        async () => {
            const { data } = await axios.get(
                route("api.web.v1.advisor-panel.experience.index")
            );
            experienceList.data = data.data;
            return experienceList;
        },
        { refetchInterval: 5000 }
    );

    function editExperienceRecords(id) {
        let row = [];
        experienceList.data.data.map((value, item) => {
            if (value.id === id) {
                return (row = value);
            }
        });
        console.log(row);
        // setValue("title", row.title)
    }

    const deleteWorkExperienceRecord = useMutation(
        (data) => {
            return axios.delete(
                route(
                    "api.web.v1.advisor-panel.experience.destroy",
                    { experience: data }
                )
            );
        },
        {
            onSuccess: (data) => {
                setOpen(true);
                setStatus("success");
                setMessage("Deleted successfully");
                window.setTimeout(() => {
                    experienceList.refetch();
                }, 2000);
            },
            onError: (data) => {
                setOpen(true);
                setStatus("error");
                setMessage("Error! Please try later");
            },
        }
    );

    const handleDelete =(value)=>{
        deleteWorkExperienceRecord.mutate(value)
    }

    if (experienceList.isLoading) {
        return <p>Loading...</p>;
    }

    if (experienceList.isError) {
        return <p>Loading...</p>;
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
                    Experience
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
                                        Edit / Delete
                                    </Typography>
                                </StyledTableCell>
                            </TableRow>
                        </TableHead>
                        <TableBody>
                            {experienceList.data.data.map((value, key) => (
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
                                        {value.company_name}
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
                                        {value.job_type}
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
                                                editExperienceRecords(value.id)
                                            }
                                        >
                                            <EditOutlinedIcon />
                                        </IconButton>
                                        <IconButton
                                            onClick={()=>{handleDelete(value.id)}}
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
            <ExperienceForm />
        </Container>
    );
}
