import React, { useState } from "react";
import AccordionSummary from "@mui/material/AccordionSummary";
import ExpandMoreIcon from "@mui/icons-material/ExpandMore";
import Typography from "@mui/material/Typography";
import AccordionDetails from "@mui/material/AccordionDetails";
import List from "@mui/material/List";
import ListItem from "@mui/material/ListItem";
import ListItemButton from "@mui/material/ListItemButton";
import { Link } from "react-router-dom";
import ListItemIcon from "@mui/material/ListItemIcon";
import MinimizeIcon from "@mui/icons-material/Minimize";
import ListItemText from "@mui/material/ListItemText";
import customTheme from "../../custom-theme.js";
import Accordion from "@mui/material/Accordion";


export default function AccordionMenu({ item, open }) {
    const [expanded, setExpanded] = useState(true);

    return (
        <>
            <Accordion
                square
                sx={{
                    // position: expanded ? "absolute" : "static",
                    backgroundColor: expanded
                        ? "inherit"
                        : customTheme.palette.primary.main,
                    borderRadius: 0,
                    color: customTheme.palette.primary.main,
                    boxShadow: "none",
                }}
                onClick={(e) => {
                    e.preventDefault;
                    console.log("clicked");
                }}
                onChange={(e, expanded) => {
                    console.log("clicked2");
                    if (open) {
                        setExpanded(!expanded);
                    }
                }}
            >
                <AccordionSummary
                    expandIcon={
                        <ExpandMoreIcon
                            sx={{
                                color: expanded
                                    ? customTheme.palette.primary.light
                                    : customTheme.palette.primary.dark,
                            }}
                        />
                    }
                    aria-controls="panel1a-content"
                    id="panel1a-header"
                    sx={{
                        // display: open ? "inline-flex" : "none",
                        "& .MuiAccordionSummary-expandIconWrapper": {
                            display: open ? "inline-block" : "none",
                        },
                        "& .MuiAccordionSummary-content svg": {
                            marginLeft: open ? 0 : "auto",
                            marginRight: open ? 3 : "auto",
                        },
                        "& .MuiAccordionSummary-content": {
                            // marginBottom: !expanded ? 0 : "auto"
                        }
                    }}
                >
                    <item.icon
                        sx={{
                            mr: 3,
                            justifyContent: "center",
                            color: expanded
                                ? customTheme.palette.primary.light
                                : customTheme.palette.primary.dark,
                        }}
                    />
                    <Typography
                        sx={{
                            color: expanded
                                ? customTheme.palette.primary.light
                                : customTheme.palette.primary.dark,
                            display: open ? "block" : "none",
                        }}
                    >
                        {item.name}
                    </Typography>
                </AccordionSummary>
                <AccordionDetails
                    sx={{
                        padding: 0,
                        display:open ? "block" : "none",
                        position: open && !expanded ? "static" : "absolute",
                        text: open,
                        backgroundColor: customTheme.palette.primary.main,
                        top: "0",
                        left: "100%",
                        opacity: 1
                    }}
                >
                    <List sx={{ pt: !open && 0 }}>
                        {"children" in item
                            ? item.children.map((childIteme, index) => (
                                  <ListItem
                                      disablePadding
                                      sx={{ display: "block", p: 0, }}
                                      key={index}
                                  >
                                      <ListItemButton
                                          component={Link}
                                          to={childIteme.path}
                                          sx={{

                                              py: 0,
                                              pr: 5,
                                              display: "flex",
                                              alignItems: "center",
                                          }}
                                      >
                                          <ListItemIcon
                                              sx={{
                                                  justifyContent: "center",
                                                  color: expanded
                                                      ? customTheme.palette
                                                            .primary.dark
                                                      : customTheme.palette
                                                            .primary.dark,
                                                  minWidth: "auto",
                                                  mr: 1,my:1
                                              }}
                                          >
                                              <MinimizeIcon />
                                          </ListItemIcon>
                                          <ListItemText
                                              sx={{
                                                  opacity: 1,
                                                  color: expanded
                                                      ? customTheme.palette
                                                            .primary.dark
                                                      : customTheme.palette
                                                            .primary.dark,
                                              }}
                                          >
                                              {childIteme.name}
                                          </ListItemText>
                                      </ListItemButton>
                                  </ListItem>
                              ))
                            : ""}
                    </List>
                </AccordionDetails>
            </Accordion>
        </>
    );
}
