import * as React from 'react';
import {createRoot} from "react-dom/client";
import customTheme from '../custom-theme.js';
import {createTheme, ThemeProvider, StyledEngineProvider} from '@mui/material/styles';
import {BrowserRouter} from "react-router-dom";
import MainDrawer from "./components/MainDrawer";
import {StylesProvider} from "@mui/styles";
import Typography from "@mui/material/Typography";
import Box from "@mui/material/Box";
import CssBaseline from "@mui/material/CssBaseline";
import { QueryClientProvider, QueryClient } from "react-query";
import {Provider} from "react-redux";
import store from './redux/index.js'

const theme = createTheme();
export default function App() {

    const queryClient = new QueryClient();
    return (
        <ThemeProvider theme={customTheme}>
            <QueryClientProvider client={queryClient}>
            <BrowserRouter>
                <StyledEngineProvider injectFirst>
                    <CssBaseline/>
                    <MainDrawer/>
                </StyledEngineProvider>
            </BrowserRouter>
            </QueryClientProvider>
        </ThemeProvider>
    );
}

if (document.getElementById('app')) {
    const lang = document.getElementById('app').getAttribute("lang");
    const currentLang = document.getElementById('app').getAttribute("current-lang");
    createRoot(document.getElementById('app')).render(<Provider store={store}><App lang={lang} currentLang={currentLang}/></Provider>);
}
