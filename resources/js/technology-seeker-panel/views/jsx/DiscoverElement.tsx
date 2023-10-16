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
import customeTheme from "../../custom-theme.js";
import axios from "axios";
import {useQuery} from "react-query";
import {route} from "./../../helpers.js"

export default function DiscoverElement() {
    const projects = useQuery('projects', async () => {
        const {data} = await axios.get(route("api.web.v1.technology-seeker-panel.project.index"));
        projects.data = data.data;
        return projects;
    });
    if (projects.isLoading){
        return <div>loading....</div>
    }
    return (
        <>
            <Grid container spacing={2}>
                {projects.data.data.map((item, index) => (
                    <Grid item xs={12} md={4} key={index}>
                        <a href={route("project.show",{project:item.slug})}>
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
                                        {/*{item.category.map((item,index)=>item)}*/}
                                    </Typography>
                                </Box>
                            </CardContent>
                        </Card>
                    </a>
                    </Grid>

                ))}
            </Grid>
        </>
    );
}
