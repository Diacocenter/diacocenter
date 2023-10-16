import {
    Box,
    Button,
    Card,
    CardActions,
    CardContent,
    CardMedia,
    Container,
    Divider,
    Grid,
    Paper, TextField,
    Typography
} from "@mui/material";
import * as React from "react";
import {useMutation, useQuery} from "react-query";
import axios from "axios";
import {route} from "./../../helpers.js"
import {SubmitHandler, useForm} from "react-hook-form";
import {useState} from "react";

export default function SocialAddress() {


    const socialAddress = useQuery('socialAddress', async () => {
        const {data} = await axios.get(route("api.web.v1.advisor-panel.social-address.index"));
        socialAddress.data = data.data;
        return socialAddress;
    });

    const {register, handleSubmit, control, setValue} = useForm({})
    const onSubmit = data => postSocialMedia.mutate(formData);
    const [formData, setFormData] = useState({
        social: []
    });
    const handleChange = (e, card) => {
        console.log(card.id)
        const updatedSocial = [...formData.social];

        const index = updatedSocial.findIndex(item => item.title === card.title);

        if (index !== -1) {
            updatedSocial[index].address = e.target.value;
        } else {
            updatedSocial.push({
                id:card.id,
                social_media_id: card.title,
                address: e.target.value
            })
        }

        setFormData({
            ...formData,
            social: updatedSocial
        });

    }

    const postSocialMedia = useMutation(async (data) => {
        const response = await axios.post(route("api.web.v1.advisor-panel.social-address.store"), data);
        return response.data;
    }, {
        onSuccess: data => {
            console.log("bah bah haj akbar")
        }, onError: () => {
        }, onSettled: () => {
        }
    });


    if (socialAddress.isLoading){
        return <div>loading...</div>
    }
    return (
        <Container>
            <form onSubmit={handleSubmit(onSubmit)}>
                <Box>
                    <Box
                        sx={{
                            marginTop: 4,
                            display: "flex",
                            flexDirection: "column",
                        }}
                    >
                        <Typography component="h1" variant="h4">
                            Social Address
                        </Typography>
                        <Divider sx={{mt: 2, mb: 4, borderColor: "#000000"}}/>
                    </Box>
                    <Box>
                        <Grid container spacing={5} component="form">
                            {socialAddress.data.data.map((card) => (
                                <Grid key={card.id} item xs={12}  sm={6} md={4} lg={3}>
                                    <Box>
                                        <Paper>
                                            <Card sx={{ maxWidth: "100%" }} elevation={7}>
                                                <CardMedia component="img" alt="Social Media" sx={{width: "210px", height: "210px", pt:1, margin:"auto"}} image={card.icon}/>
                                                <CardContent>
                                                    <Typography gutterBottom variant="h5" component="div" align="center" value={card.title}>{(card.title===2)?("Twitter"):(card.title===1)?("Instagram")
                                                        :(card.title===4)?("Facebook"):(card.title===5)?("Youtube"):(card.title===6)?("WhatsApp"):("LinkedIn")}</Typography>
                                                </CardContent>
                                                <CardActions sx={{ display: "flex", justifyContent: "center" }}>
                                                    <TextField variant="outlined"  defaultValue={card.address} onBlurCapture={(e)=>handleChange(e,card)}/>
                                                </CardActions>
                                            </Card>
                                        </Paper>
                                    </Box>
                                </Grid>
                            ))}
                        </Grid>
                    </Box>
                    <Box>
                        <Grid container justifyContent={"center"}>
                            <Grid item xs={12} md={4} lg={3} textAlign={"center"}>
                                <Button
                                    fullWidth
                                    type="submit"
                                    sx={{
                                        my: 6,textTransform:"capitalize"
                                    }}
                                    variant="contained"
                                >
                                    Submit Changes
                                </Button>
                            </Grid>
                        </Grid>
                    </Box>
                </Box>
            </form>
        </Container>
    );
}
