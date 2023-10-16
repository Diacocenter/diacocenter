import React from 'react';
import { Autocomplete, Chip, TextField } from '@mui/material';
import CloseIcon from '@mui/icons-material/Close';

interface Skill {
    title: string;
}

function ContactDetailAutocomplete() {
    const skills: Skill[] = [
        { title: 'UI Designer' },
        { title: 'UX Designer' },
        { title: 'Designer' },
        { title: 'Full Stack' },
        { title: 'Frontend Developer' },
        { title: 'Backend Developer' },
        { title: 'UI Designer' },
    ];

    return (
        <>
            <Autocomplete
                sx={{
                    '& .MuiInputLabel-asterisk': {
                        display: 'none',
                    },
                }}
                multiple
                id="skills"
                options={skills}
                getOptionLabel={(option: Skill) => option.title}
                filterSelectedOptions
                renderTags={(value, getTagProps) =>
                    value.map((option, index) => (
                        <Chip
                            deleteIcon={<CloseIcon />}
                            sx={{
                                '& .MuiChip-deleteIcon': { color: 'red' },
                                '&:hover .MuiChip-deleteIcon': { color: 'red' },
                            }}
                            variant="outlined"
                            label={option.title}
                            {...getTagProps({ index })}
                        />
                    ))
                }
                renderInput={(params) => (
                    <TextField
                        {...params}
                        sx={{
                            '& .MuiAutocomplete-inputRoot': {
                                borderRadius: '0px',
                                padding: '20px',
                            },
                            '& .MuiAutocomplete-tag': {
                                borderRadius: '0px',
                                backgroundColor: '#CEEAFF',
                                marginLeft: '10px',
                                borderStyle: 'none',
                                padding: '10px',
                                fontSize: '14px',
                            },
                        }}
                        label="Skills"
                        required
                    />
                )}
            />
        </>
    );
}

export default ContactDetailAutocomplete;
