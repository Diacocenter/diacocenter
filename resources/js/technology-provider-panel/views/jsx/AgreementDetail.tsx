import React from 'react'
import {Box, Checkbox, Divider, FormControlLabel, Typography} from "@mui/material";
import Button from "@mui/material/Button";

export default function AgreementDetail() {
    return (
        <>
            <Box
                sx={{
                    marginTop: 4,
                    display: "flex",
                    flexDirection: "column",
                }}
            >
                <Typography component="h1" variant="h4">
                    New Agreement
                </Typography>
                <Divider sx={{mt: 2, mb: 4}}/>
            </Box>
            <Box sx={{overflowY: 'auto', maxHeight: '400px'}}>
                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquid aperiam aspernatur
                consequuntur id inventore laudantium libero, minus nesciunt nobis omnis provident quia saepe soluta
                voluptas! Accusamus accusantium ad alias aliquam aliquid assumenda at aut consequatur cum, deleniti ea
                eum facilis fugit harum hic in labore nisi officia quaerat qui rem rerum saepe sapiente tempora vero
                vitae voluptates. Ad atque beatae consequuntur debitis dignissimos ea enim error id illum incidunt
                itaque natus nemo, nisi nostrum numquam obcaecati odit provident quas quidem quos! Amet assumenda, cum
                dicta molestias nam non odit qui repellat rerum tempora ullam voluptatem. Asperiores commodi eius et
                reiciendis repellat vel? Deleniti distinctio itaque sed? Aliquid animi autem consequatur, dignissimos
                eum eveniet facilis illum inventore ipsa iste molestiae necessitatibus nemo neque numquam quae quasi quo
                quos reiciendis reprehenderit repudiandae rerum sapiente sed sint tempore voluptates? Impedit ipsam
                laudantium placeat quis sunt? Animi, aperiam aspernatur consectetur cum debitis dolorem dolores eaque
                eligendi est fugiat hic illo ipsam magni maxime minus molestiae molestias numquam optio quidem quisquam
                repudiandae sapiente sunt tempora totam veniam. Culpa doloribus nemo repellat sapiente veritatis! At,
                consectetur, culpa cupiditate dignissimos dolore ducimus eius error et eum facere fuga hic incidunt
                laborum necessitatibus nostrum nulla officia omnis optio possimus quod sequi sunt veniam. Incidunt odio
                porro repudiandae soluta ut. Ab aliquam animi assumenda at debitis deserunt dicta doloremque earum, enim
                excepturi laudantium magnam maiores mollitia nisi obcaecati odio porro saepe temporibus voluptate
                voluptatum. Accusamus architecto consequuntur cum eaque expedita hic ipsum iure, laborum nobis omnis
                optio possimus praesentium quisquam, sapiente totam, ut voluptatem. Accusantium aliquid beatae commodi
                cum debitis dolore eos error ex incidunt ipsum iste laborum maiores necessitatibus nisi perferendis
                provident quisquam reprehenderit sint sit, tenetur unde vitae voluptatibus! A accusamus ad alias atque,
                commodi culpa distinctio fugiat libero modi molestias natus nesciunt nulla optio perspiciatis placeat
                provident quibusdam sint tempore veritatis vitae? Ad aliquam aspernatur necessitatibus perspiciatis
                possimus quisquam quo reiciendis repudiandae saepe voluptatum. A ab accusamus animi aperiam asperiores
                at atque beatae consectetur cumque dicta doloremque, dolores ea esse et exercitationem expedita fuga id
                ipsa laboriosam laborum magnam natus nisi non odio officiis provident quibusdam quisquam recusandae,
                rem, repudiandae sequi sint temporibus tenetur ullam unde voluptate voluptatibus. Adipisci animi cum
                deleniti dolores ducimus, excepturi, harum id impedit ipsum itaque laudantium maxime minima modi
                molestias natus nisi odio perspiciatis quasi quo quos reprehenderit sunt totam vero voluptas voluptatem!
                Accusantium, ad aliquam amet asperiores assumenda commodi consequuntur culpa cum dolor doloribus ea
                eaque facere fugit hic incidunt iste labore magni nemo odit officiis placeat quibusdam quo vitae
                voluptas voluptatum. Accusamus adipisci architecto atque doloremque facere id illo, ipsum magnam minus
                neque nesciunt omnis reiciendis repellat repudiandae sed velit, voluptatibus? Ab accusamus asperiores at
                ducimus eos error exercitationem fuga, maiores neque, quod rem sit totam! Consectetur consequuntur
                cumque dignissimos est minima nam omnis repellat sequi unde? Accusantium itaque molestiae placeat
                possimus qui! Amet cumque, eaque earum eius eligendi et hic, maxime odio omnis perferendis quam
                reiciendis repudiandae sequi. Commodi consectetur consequuntur eaque eveniet quas rerum saepe sed.
            </Box>
            <FormControlLabel sx={{marginTop: 5}} control={<Checkbox size="small"/>}
                              label="I agree with the above condition"/>
            <Button
                fullWidth
                sx={{
                    my: 4,
                }}
                variant="contained"
            >
                Continue
            </Button>
        </>
    )
}