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
import {useState, useRef} from "react";

const StyledTableCell = styled(TableCell)(({ theme }) => ({
    [`&.${tableCellClasses.head}`]: {
        backgroundColor: "#e9f6ff",
        color: "#000",
        borderColor: "#e9f6ff",
        width: "auto",
        borderBottom: "2px solid black"
    },
    [`&.${tableCellClasses.body}`]: {
        fontSize: 14,
        borderColor: "#e9f6ff",
    },
}));


const StyledTableRow = styled(TableRow)(({ theme }) => ({
    '&:last-child td, &:last-child th': {
      border: 0,
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
    const divRef = useRef();
    const [paddingRight, setPaddingRight] =useState("");
    const Agreements = useQuery('Agreements', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.agreements.index"));
        Agreements.data = data.data;
        return Agreements;
    });

    // -----------scroll bar ------------
    React.useEffect(() => {
        if (divRef.current) {
            const clientHeight = divRef.current.clientHeight;
            if (clientHeight <= 423) {
                setPaddingRight("9px");
            } else {
                setPaddingRight("0px");
            }
        }
    });
    // -----------end scroll bar ------------

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
            <Box
                 sx={{
                    backgroundColor: "#e9f6ff",
                    borderRadius: "15px",
                    overflow: "hidden",
                    paddingLeft: "9px",
                    paddingRight : paddingRight,
                    mt:2
                    }}
            >
                <TableContainer
                    className="scrollbarInputs"
                    ref={divRef}                          
                    sx={{
                        
                        overflowY: "auto",
                        maxHeight: "60vh",
                    }}
                >
                    <Table
                        stickyHeader
                        aria-label="customized table"
                    >
                        <TableHead>
                            <TableRow>
                                <StyledTableCell
                                    
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
                            
                                <StyledTableCell
                                     
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
                                <StyledTableRow
                                  
                                    key={row.date}
                                >
                                    <StyledTableCell
                                       
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
                                       
                                        align="center"
                                    >
                                        {row.date}
                                    </StyledTableCell>
                                  
                                    <StyledTableCell
                                      
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
                                </StyledTableRow>
                            ))}
                        </TableBody>
                    </Table>
                </TableContainer>
            </Box>
        </Container>
    );
}
