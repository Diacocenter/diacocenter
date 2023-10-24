import * as React from "react";
import { styled } from "@mui/material/styles";
import Table from "@mui/material/Table";
import TableBody from "@mui/material/TableBody";
import TableCell, { tableCellClasses } from "@mui/material/TableCell";
import TableContainer from "@mui/material/TableContainer";
import TableHead from "@mui/material/TableHead";
import TableRow from "@mui/material/TableRow";
import CalendarTodayOutlinedIcon from "@mui/icons-material/CalendarTodayOutlined";
import { Box, Container, Divider, IconButton, Typography } from "@mui/material";
import FormatAlignLeftOutlinedIcon from "@mui/icons-material/FormatAlignLeftOutlined";
import CorporateFareIcon from "@mui/icons-material/CorporateFare";
import DescriptionOutlinedIcon from "@mui/icons-material/DescriptionOutlined";
import DisabledByDefaultOutlinedIcon from "@mui/icons-material/DisabledByDefaultOutlined";
import ClearOutlinedIcon from "@mui/icons-material/ClearOutlined";
import {useQuery} from "react-query";
import axios from "./../../../axiosConfig.js";
import {route} from "./../../helpers.js"
import {Link} from "react-router-dom";
import { useRef,useState} from "react";




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

function createData(
    companyName: string,
    projectName: string,
    topic: string,
    finishedDate: string
) {
    return { companyName, projectName, topic, finishedDate };
}

export default function Projects() {
    const divRef = useRef();
    const [paddingRight, setPaddingRight] = useState("");

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

    const ProjectsDetails = useQuery('ProjectsDetails', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.all.project"));
        ProjectsDetails.data = data.data;
        console.log(ProjectsDetails.data)
        return ProjectsDetails;
    },{refetchInterval:3000});


    if (ProjectsDetails.isLoading){
        return <div>loading....</div>
    }
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
                        Projects{" "}
                    </Typography>
                    <Divider sx={{ mt: 2, mb: 4 }} />
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
                            <TableHead 
                                
                            >
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
                                            <CorporateFareIcon sx={{ mr: 0.5 }} />
                                            Company Name
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
                                            <DescriptionOutlinedIcon
                                                sx={{ mr: 0.5 }}
                                            />
                                            Project Name
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
                                            <FormatAlignLeftOutlinedIcon
                                                fontSize="small"
                                                sx={{ mr: 0.5 }}
                                            />
                                            Topic
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
                                                sx={{ mr: 0.5 }}
                                            />
                                            Finished Date
                                        </Typography>
                                    </StyledTableCell>
                                </TableRow>
                            </TableHead>
                            <TableBody>
                                {ProjectsDetails.data.data.map((row) => (
                                    <TableRow
                                        sx={{
                                            
                                            borderColor: "#e9f6ff",
        
                                        }}
                                        key={row.companyName}
                                    >
                                        <StyledTableCell
                                           
                                            align="center"
                                        >
                                            {row.company_name}
                                        </StyledTableCell>
                                        
                                        <StyledTableCell
                                            
                                            align="center"
                                        >
                                        <a href={route("project.show",{project:row.slug})}>
                                        {row.title}
                                        </a>  
                                        </StyledTableCell>
                                        
                                        <StyledTableCell 
                                           
                                            align="center"
                                        >
                                            {row.end_date}
                                        </StyledTableCell>
                                        <StyledTableCell 
                                            
                                            align="center"
                                        >
                                        </StyledTableCell>
                                    </TableRow>
                                ))}
                            </TableBody>
                        </Table>
                    </TableContainer>
                </Box>
            </Box>
        </Container>
    );
}
