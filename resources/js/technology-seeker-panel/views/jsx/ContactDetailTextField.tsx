import React from "react";
import { TextField } from "@mui/material";

interface ContactDetailTextFieldProps {
    id: string;
    label: string;
}

const ContactDetailTextField: React.FC<ContactDetailTextFieldProps> = ({
    id,
    label,
}) => {
    return (
        <>
            <TextField InputProps={{sx: {borderRadius: 0,},}} required sx={{marginTop: 1, width: "100%", "& .MuiInputLabel-asterisk": {display: "none",},
             "& .MuiInputLabel-root": {"&.Mui-focused": {fontSize: "16.5px",},},}} id={id} label={label} variant="outlined"/>
        </>
    );
};

export default ContactDetailTextField;
