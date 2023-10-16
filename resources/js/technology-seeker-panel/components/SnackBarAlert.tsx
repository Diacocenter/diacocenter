import {Alert, Snackbar} from "@mui/material";
import * as React from "react";


export default function SnackbarAlert(props:{massage:string, status:"success" | "info" | "warning" | "error", open:boolean, handlerOpen:any}) {

    return (
        <>
            <Snackbar open={props.open} autoHideDuration={6000} onClose={() => {
                props.handlerOpen();
            }} anchorOrigin={{vertical: "top", horizontal: "right"}}>
                <Alert onClose={() => {
                    props.handlerOpen();
                }}
                       severity={props.status} sx={{width: "100%"}}>
                    {props.massage}
                </Alert>
            </Snackbar>
        </>
    );
}
