import {Controller} from "react-hook-form";
import {Autocomplete, Box, TextField} from "@mui/material";
import * as React from "react";


interface CountrySelect<O extends { code: string; label: string }> {
    control: any;
    name: string;
    options: O[];
}

const CountrySelect = <O extends { code: string; label: string }>(props: CountrySelect<O>) => {
    const {control, name, options} = props;
    return (<Controller sx={{
        mt: 2,
    }} fullWidth name={name} control={control} render={({field}) => {
        const {value, ref} = field;
        return (
            <>
                <Autocomplete sx={{mt: 2}} fullWidth value={value ? options.find((option) => {
                    return value === option.code;
                }) ?? null : null} options={options} getOptionLabel={(option) =>
                    option.label
                } renderOption={(props, option) => (
                    <Box component="li" sx={{
                        "& > img": {
                            mr: 2,
                            flexShrink: 0,
                        },
                    }}
                        {...props}
                    >
                        <img loading="lazy" width="20" src={`https://flagcdn.com/w20/${option.code.toLowerCase()}.png`}
                            srcSet={`https://flagcdn.com/w40/${option.code.toLowerCase()}.png 2x`}/>
                        {option.label} - {option.code}
                    </Box>
                )} renderInput={(params) => (
                    <TextField
                        {...params} label="location" inputRef={ref}/>
                )}/>
            </>
        );
    }
    }/>);
};

export default CountrySelect;
