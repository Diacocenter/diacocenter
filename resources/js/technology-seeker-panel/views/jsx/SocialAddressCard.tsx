import {
    Box,
    Card,
    CardActions,
    CardContent,
    CardMedia,
    Paper,
    TextField,
    Typography,
} from "@mui/material";
import * as React from "react";

export default function SocialAddressCard(props) {
    const { image, title, socialAddress,placeHolder, onSocialAddressChange } = props;

    return (
        <>
            <Box>
                <Paper>
                    <Card>
                        <CardMedia component="img" alt="Social Media" sx={{width: "100%",pt:1, margin:"auto"}} image={image}/>
                        <CardContent>
                            <Typography gutterBottom variant="h5" component="div" align="center">{title}</Typography>
                        </CardContent>
                        <CardActions sx={{ display: "flex", justifyContent: "center" }}>
                            <TextField variant="outlined" onChange={onSocialAddressChange} placeholder={placeHolder} defaultValue={socialAddress}
                            />
                        </CardActions>
                    </Card>
                </Paper>
            </Box>
        </>
    );
}
