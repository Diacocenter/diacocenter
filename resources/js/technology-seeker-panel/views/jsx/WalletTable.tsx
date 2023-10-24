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
    Date: string,
    InvoiceNumber: number,
    Status: string,
    Amount: string,
) {
    return {Date, InvoiceNumber, Status, Amount};
}

const rows = [
    createData("11/11/20221", 31465468351, "Fail" , "21.000$",),
    createData("11/11/20222", 31465468351, "Paid" , "21.000$",),
    createData("11/11/20223", 31465468351, "Pending" , "21.000$",),
    createData("11/11/20224", 31465468351, "Pending" , "21.000$",),
    createData("11/11/20225", 31465468351, "Paid" , "21.000$",),
];
const backgroundColors = (status) => {
    let backgroundColor = "";
    if (status === "Paid") backgroundColor = "#e9fff2";
    else if (status === "Pending") backgroundColor = "#e6e6e6";
    else backgroundColor = "#ffe9e9";
    return backgroundColor;
};
export default function WalletTable() {

    const divRef = useRef();
    const [paddingRight, setPaddingRight] = useState("");
        // -----------scroll bar ------------
        React.useEffect(() => {
            if (divRef.current) {
                const clientHeight = divRef.current.clientHeight;
                if (clientHeight <= 300) {
                    setPaddingRight("9px");
                } else {
                    setPaddingRight("0px");
                }
            }
        });
        // -----------end scroll bar ------------

    return (
        <>
            <Box
                sx={{
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography component="h2" variant="h5">
                    Recent Invoices
                </Typography>
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
                        maxHeight: "43vh",
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
                                        <FormatAlignLeftOutlinedIcon
                                            fontSize="small"
                                            sx={{mr: 0.5}}
                                        />
                                        InvoiceNumber
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
                                        <PersonOutlineOutlinedIcon
                                            sx={{mr: 0.5}}
                                        />
                                        Amount
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
                                    key={row.Date}
                                >
                                    <StyledTableCell
                                      
                                        align="center"
                                        >
                                    {row.Date}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        
                                        align="center"
                                    >
                                        {row.InvoiceNumber}
                                    </StyledTableCell>
                                    <StyledTableCell
                                        
                                        align="center"
                                    >
                                        <Typography
                                        variant="body2"
                                            sx={{
                                                backgroundColor: backgroundColors(
                                                    row.Status
                                                ),
                                                width: 2 / 3,
                                                margin: "auto",
                                            }}
                                            align="center"
                                        >
                                            {row.Status}
                                        </Typography>
                                    </StyledTableCell>
                                    <StyledTableCell
                                       
                                        align="center"
                                    >
                                        {row.Amount}
                                    </StyledTableCell>
                                </TableRow>
                            ))}
                        </TableBody>
                    </Table>
                </TableContainer>
            </Box>
        </>
    );
}
