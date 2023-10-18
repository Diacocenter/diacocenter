import * as React from "react";
import { createRoot } from "react-dom/client";
import customTheme from "./custom-theme.js";
import {
    createTheme,
    ThemeProvider,
    StyledEngineProvider,
} from "@mui/material/styles";
import { BrowserRouter } from "react-router-dom";
import Typography from "@mui/material/Typography";
import Box from "@mui/material/Box";
import CssBaseline from "@mui/material/CssBaseline";
import {QueryClient, QueryClientProvider} from "react-query";
import MainDrawer from "./components/MainDrawer";

const theme = createTheme();
export default function App() {
    const queryClient = new QueryClient();

    return (
        <ThemeProvider theme={customTheme}>
            <QueryClientProvider client={queryClient}>
            <BrowserRouter>
                <StyledEngineProvider injectFirst>
                    <CssBaseline />
                   <MainDrawer/>
                </StyledEngineProvider>
            </BrowserRouter>
            </QueryClientProvider>
        </ThemeProvider>
    );
}

if (document.getElementById("app")) {
    const lang = document.getElementById("app").getAttribute("lang");
    const currentLang = document
        .getElementById("app")
        .getAttribute("current-lang");
    createRoot(document.getElementById("app")).render(<App lang={lang} currentLang={currentLang} />
    );
}