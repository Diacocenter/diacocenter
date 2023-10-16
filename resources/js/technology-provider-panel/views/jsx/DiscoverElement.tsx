import React from "react";
import {
    Box,
    Card,
    CardContent,
    CardMedia,
    Grid,
    Link,
    Typography,
} from "@mui/material";
import customeTheme from "../../../custom-theme.js";
import {useQuery} from "react-query";
import axios from "axios";
import {route} from './../../helpers.js'

export default function DiscoverElement() {
    const discoverDetail = useQuery('discoverDetail', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-provider-panel.all.project"));
        discoverDetail.data = data.data;
        return discoverDetail;
    });
 if (discoverDetail.isLoading){
     return (
         <div>loading...</div>
     )
 }
    return (
        <>
            <Grid container spacing={2}>
                {discoverDetail.data.data.map((item, index) => (
                    <Grid item xs={12} md={4} key={index}>
                        <Link href={route("project.show",{project:item.slug})}>
                        <Card
                            sx={{
                                display: "flex",
                                flexDirection: "column",
                                padding: 1,
                                boxShadow: 3,
                            }}
                        >
                            <CardMedia
                                component="img"
                                image={item.project_picture}
                                alt="..."
                            />
                            <CardContent
                                sx={{
                                    marginTop: 1,
                                    py:0,
                                    px: 1,
                                }}
                            >
                                <Typography
                                    sx={{ pt: 2, pb: 1 }}
                                    gutterBottom
                                    variant="h4"
                                >
                                    {item.title}
                                </Typography>
                                <Typography
                                    sx={{ px: 1 }}
                                    variant="body2"
                                    textAlign="justify"
                                >
                                    {item.short_summary}
                                </Typography>
                                <Box
                                    sx={{
                                        display: "flex",
                                        justifyContent: "space-between",
                                        mt: 4,
                                    }}
                                >
                                    <Typography
                                        variant="subtitle1"
                                        sx={{
                                            color: customeTheme.palette.grey[
                                                "600"
                                            ],
                                        }}
                                    >
                                        {item.company_name}
                                    </Typography>
                                    <Typography
                                        variant="subtitle1"
                                        sx={{
                                            color: customeTheme.palette.grey[
                                                "600"
                                            ],
                                        }}
                                    >
                                        2022
                                    </Typography>
                                </Box>
                            </CardContent>
                        </Card>
                    </Link>
                    </Grid>

                ))}
            </Grid>
        </>
    );
}
