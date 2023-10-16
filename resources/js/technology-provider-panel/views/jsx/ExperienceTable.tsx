import {
    Box,
    Table,
    TableBody,
    TableCell,
    TableContainer,
    TableHead,
    TableRow,
    Typography,
    styled,
    tableCellClasses, Snackbar, Alert,
} from "@mui/material";
import * as React from "react";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import BusinessCenterOutlinedIcon from "@mui/icons-material/BusinessCenterOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import WorkOutlineOutlinedIcon from "@mui/icons-material/WorkOutlineOutlined";
import DriveFileRenameOutlineOutlinedIcon from "@mui/icons-material/DriveFileRenameOutlineOutlined";
import EditOutlinedIcon from "@mui/icons-material/EditOutlined";
import {useMutation, useQuery} from "react-query";
import axios from "../../../axiosConfig.js";
import {route} from "../../helpers.js";
export default function ExperienceTable() {
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
    const experienceList = useQuery("experienceList", async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.experience.index"));
        experienceList.data = data.data;
        return experienceList;
    });

    const deleteWorkExperienceRecord = useMutation((id)=> {
        setOpen(true);
        setStatus("warning");
        setMessage("Deleting...!");
        console.log(id, "asghar")
        return axios.delete(route("api.web.v1.technology-provider-panel.experience.destroy", {"experience": id}));
    },{
        onSuccess: data => {
            setStatus("success");
            setMessage("Deleted successfully");
            window.setTimeout(() => {
                experienceList.refetch()
            }, 1200);
        },
        onError:data => {
            setOpen(true);
            setStatus("error");
            setMessage("Error! Please try later");
        },
    })

    function createData(
        title: string,
        company_name: string,
        from: string,
        job_type: string,
        to: string,
    ) {
        return { company_name, title,  from, to, job_type };
    }


    if (experienceList.isLoading) {
        return <p>Asghar loading</p>
    }
    if (experienceList.isError) {
        return <p>Asghar loading</p>
    }
    return (
        <Box>
            <Snackbar open={open} autoHideDuration={6000} onClose={()=>{setOpen(false)}}  anchorOrigin={{ vertical:"top", horizontal:"right" }} >
                <Alert onClose={()=>{setOpen(false)}} severity={status} sx={{ width: '100%' }} >
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
                            <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                <Typography sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <BusinessCenterOutlinedIcon sx={{ mr: 0.5 }}/>
                                    School Name
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3, width: "20%",}} align="center">
                                <Typography sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <CorporateFareIcon sx={{ mr: 0.5 }} />
                                    Degree
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                <Typography sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <CalendarTodayOutlinedIcon fontSize="small" sx={{ mr: 0.5 }}/>Start Date
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                <Typography sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <WorkOutlineOutlinedIcon sx={{ mr: 0.5 }} />
                                    Job Type
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3, width: "20%",}} align="center">
                                <Typography sx={{display: "flex", flexDirection: "row", justifyContent: "center", alignItems: "center",}}>
                                    <DriveFileRenameOutlineOutlinedIcon sx={{ mr: 0.5 }}/>Edit</Typography>
                            </StyledTableCell>
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {experienceList.data.data.map((value, key) => (
                            <TableRow sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} key={key}>
                                <StyledTableCell
                                    sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                    {value.title}
                                </StyledTableCell>
                                <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                    {value.company_name}
                                </StyledTableCell>
                                <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                    {value.from}/{value.to}
                                </StyledTableCell>
                                <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                    {value.job_type}
                                </StyledTableCell>
                                <StyledTableCell sx={{border: 1, borderColor: "#e9f6ff", borderWidth: 3,}} align="center">
                                    <EditOutlinedIcon  />
                                    <DeleteOutlineOutlinedIcon color={"error"} onClick={() => deleteWorkExperienceRecord.mutate(
                                        value.id)} />
                                </StyledTableCell>
                            </TableRow>
                            ))}
                    </TableBody>
                </Table>
            </TableContainer>
        </Box>
    );
}
