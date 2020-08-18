import React, { useState } from "react";
import Grid from "@material-ui/core/Grid/";
import Box from "@material-ui/core/Box/";
import Itemcard from "./Itemcard";

export default props => {
    return (
        <>
            <Box p={5} m={2}>
              
                    <Grid container spacing={3}>
                        {props.data.map((item, index) => (
                            <Grid key={index} item xs={3}>
                                <Itemcard item={item} />
                            </Grid>
                        ))}
                    </Grid>
          
            </Box>
        </>
    );
};
