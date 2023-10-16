import * as React from "react";
import { styled } from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, { tableCellClasses } from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import {
    Alert,
    Box,
    Container,
    Divider,
    IconButton,
    Snackbar,
    Typography,
} from "@mui/material";
import PersonOutlineOutlinedIcon from "@mui/icons-material/PersonOutlineOutlined";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import FormatListBulletedOutlinedIcon from "@mui/icons-material/FormatListBulletedOutlined";
import FileDownloadOutlinedIcon from "@mui/icons-material/FileDownloadOutlined";
import DeleteOutlineOutlinedIcon from "@mui/icons-material/DeleteOutlineOutlined";
import AddDocuments from "./AddDocument";
import customTheme from "../../../custom-theme.js";
import { FC } from "react";
import { useMutation, useQuery } from "react-query";
import axios from "axios";
import { route } from "../../helpers.js";
import { SkeletonFramework } from "./../../../SkeletonFramework.jsx";

const StyledTableCell = styled(TableCell)(({ theme }) => ({
    [`&.${tableCellClasses.head}`]: {
        backgroundColor: customTheme.palette.info.light,
        color: customTheme.palette.common.black,
    },
    [`&.${tableCellClasses.body}`]: {
        fontSize: 14,
    },
}));

function createData(
    date: string,
    Title: string,
    Author: string,
    Status: string,
    Download: React.ReactNode,
    Remove: React.ReactNode
) {
    return { date, Title, Author, Status, Download, Remove };
}

const backgroundColors = (status) => {
    let backgroundColor = "";
    if (status === "Confirmed")
        backgroundColor = customTheme.palette.success.light;
    else if (status === "Pending")
        backgroundColor = customTheme.palette.grey.A400;
    else backgroundColor = customTheme.palette.error.light;
    return backgroundColor;
};

const removeIconDisable = (status) => {
    if (status !== 0) return true;
};

export default function MyDocument() {
    const [open, setOpen] = React.useState(false);
    const [status, setStatus] = React.useState("success");
    const [message, setMessage] = React.useState("This is a success message!");

    //     Get document Api
    const documents = useQuery(
        "documents",
        async () => {
            const { data } = await axios.get(
                route("api.web.v1.technology-seeker-panel.document.index")
            );
            documents.data = data.data;
            return documents;
        },
        { refetchInterval: 5000 }
    );

    const deleteDocuments = useMutation(
        async (data) => {
            const response = await axios.delete(
                route(
                    "api.web.v1.technology-seeker-panel.document.destroy",
                    { document: data }
                )
            );
            return response.data;
        },
        {
            onSuccess: (data) => {
                setOpen(true);
                setStatus("success");
                setMessage("Your Document Deleted successfully");
                window.setTimeout(() => {}, 1200);
            },
            onError: () => {
                setOpen(true);
                setStatus("error");
                setMessage("Error! Please try later");
            },
            onSettled: () => {},
        }
    );

    const handleDelete = (values) => {
        deleteDocuments.mutate(values);
    };

    return (
        <Container>
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
            <Box
                sx={{
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography component="h1" variant="h4">
                    Documents
                </Typography>
                <Divider sx={{ mt: 2 }} />
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
                                    borderColor: customTheme.palette.info.light,
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
                                    Title
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: customTheme.palette.info.light,
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
                                    Date
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: customTheme.palette.info.light,
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
                                    Type
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: customTheme.palette.info.light,
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
                                    Status
                                </Typography>
                            </StyledTableCell>
                            <StyledTableCell
                                sx={{
                                    border: 1,
                                    borderColor: customTheme.palette.info.light,
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
                                    Download/Remove
                                </Typography>
                            </StyledTableCell>
                        </TableRow>
                    </TableHead>
                    <TableBody>
                        {documents.isLoading ? (
                            <SkeletonFramework
                                height={40}
                                width={150}
                                className={"mt-2 w-100"}
                            />
                        ) : (
                            documents.data.data.map((row) => (
                                <TableRow
                                    sx={{
                                        border: 1,
                                        borderColor:
                                        customTheme.palette.info.light,
                                        borderWidth: 3,
                                    }}
                                    key={row.id}
                                >
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor:
                                            customTheme.palette.info.light,
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.title}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor:
                                            customTheme.palette.info.light,
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.created_at}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor:
                                            customTheme.palette.info.light,
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        {row.type}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor:
                                            customTheme.palette.info.light,
                                        }}
                                        align="center"
                                    >
                                        <Box>
                                            <Typography
                                                sx={{
                                                    backgroundColor:
                                                        backgroundColors(
                                                            row.status
                                                        ),
                                                    padding: 0.3,
                                                    width: "75%",
                                                    margin: "auto",
                                                }}
                                                align="center"
                                            >
                                                {row.status === 0
                                                    ? "Pending"
                                                    : row.status === 1
                                                        ? "Verified"
                                                        : "Rejected"}
                                            </Typography>
                                        </Box>
                                    </StyledTableCell>
                                    <StyledTableCell
                                        sx={{
                                            border: 1,
                                            borderColor:
                                            customTheme.palette.info.light,
                                            borderWidth: 3,
                                        }}
                                        align="center"
                                    >
                                        <IconButton
                                            sx={{
                                                color: "black"
                                            }}
                                        >
                                            <FileDownloadOutlinedIcon />
                                        </IconButton>
                                        {removeIconDisable(row.status) ? (
                                            <IconButton
                                                disabled
                                                sx={{
                                                    color: customTheme.palette
                                                        .grey.A400,
                                                }}
                                            >
                                                <DeleteOutlineOutlinedIcon />
                                            </IconButton>
                                        ) : (
                                            <IconButton
                                                sx={{
                                                    color: customTheme.palette
                                                        .error.main,
                                                }}
                                                onClick={() =>
                                                    handleDelete(row.id)
                                                }
                                            >
                                                <DeleteOutlineOutlinedIcon
                                                />
                                            </IconButton>
                                        )}
                                    </StyledTableCell>
                                </TableRow>
                            ))
                        )}
                    </TableBody>
                </Table>
            </TableContainer>
            <AddDocuments />
        </Container>
    );
}
