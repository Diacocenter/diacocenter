import { createTheme } from "@mui/material";
import "@fontsource-variable/piazzolla";

const customTheme = createTheme({
    palette: {
        primary: {
            main: "#99C9FF",
            light: "#CEEAFF",
            dark: "#001F3F",
        },
        common: {
            white: "#FFFFFF",
            black: "#000000",
        },
        info: {
            main: "#013265",
            light: "#E9F6FF",
        },
        error: {
            light: "#FFE9E9",
            main: "#F70000",
        },
        success: {
            main: "#2e7d32",
            light: "#E9FFF2",
        },
        grey: {
            600: "#757575",
        },
        white:{
            main:"#ffffff"
        },
        gray:{
            main:"#757575"
        },
    },

    typography: {
        fontFamily: "'Piazzolla Variable', sans-serif",
        h1: {
            fontSize: "60px",
            // lineHeight: "60",
            letterSpacing: "-0.5 px",
        },
        h2: {
            fontSize: "52px",
            // lineHeight: "50",
            letterSpacing: "0",
        },
        h3: {
            fontSize: "37px",
            // lineHeight: "30",
            letterSpacing: "0.25px",
        },
        h4: {
            fontSize: "26px",
            // lineHeight: "30",
            letterSpacing: "0",
        },
        h5: {
            fontSize: "22px",
            // lineHeight: "20",
            letterSpacing: "0.15 px",
        },
        h6: {
            fontSize: "19px",
            // lineHeight: "20",
            letterSpacing: "0.15 px",
        },
        subtitle1: {
            fontSize: "12px",
        },
        subtitle2: {
            fontSize: "10px",
        },
        body1: {
            fontSize: "17px",
            // lineHeight: "25",
            letterSpacing: "0.5 px",
        },
        body2: {
            fontSize: "15px",
            // lineHeight: "24",
            letterSpacing: "0.25 px",
        },
    },
    // shadows: [
    //     "none",
    //     "2px 2px 15px 2px rgba(0, 0, 0, 0.15)",
    // ],
    components: {
        // Name of the component
        MuiAppBar: {
            styleOverrides: {
                root: {
                    backgroundColor: "#001F3F",
                },
            },
        },
        MuiSelect: {
            styleOverrides: {
                icon: {
                    color: "#CEEAFF",
                },
            },
        },
        MuiTextField: {
            defaultProps: {
                size: "small",
            },
            styleOverrides: {
                root: {
                    paddingY: 5,
                    size: "small",
                },
            },
        },
        MuiDivider: {
            styleOverrides: {
                root: {
                    borderColor: "#000",
                    borderWidth: "1px",
                },
            },
        },
        MuiInputBase: {
            defaultProps: {
                // size: "small",
            },
            styleOverrides: {
                root: {
                    // borderRadius: "0!important",
                    paddingY: 5,
                },
            },
        },
        MuiInput: {
            defaultProps: {
                // size: "small",
            },
            styleOverrides: {
                root: {
                    // borderRadius: "0!important",
                    paddingY: 5,
                },
            },
        },
        MuiButton: {
            styleOverrides: {
                root: {
                    borderRadius: 0,
                    backgroundColor: "#99C9FF",
                    color: "black",
                    boxShadow: "3px 3px 3px 2px rgba(0, 31, 38, 0.10)",
                    ":hover": {
                        color: "white",
                        boxShadow: "3px 3px 3px 2px #E9F6FF",
                        backgroundColor: "#001F3F",
                    },
                },
            },
        },
        MuiTableCell: {
            styleOverrides: {
                root: {
                    py: 0,
                },
            },
        },
    },
});

export default customTheme;
