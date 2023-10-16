import React from 'react';
import { InputLabel } from '@mui/material';

interface ContactDetailInputLabelProps {
    id: string;
    label: string;

}

const ContactDetailInputLabel: React.FC<ContactDetailInputLabelProps> = ({
    id,
    label
}) => {
    return (
        <InputLabel
            sx={{
                color: 'black',
                '& .MuiInputLabel-asterisk': {
                    color: '#99C9FF',
                },
            }}
            htmlFor={id}
        >
            {label}
        </InputLabel>
    );
};

export default ContactDetailInputLabel;
