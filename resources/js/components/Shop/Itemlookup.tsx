import React, { useState } from "react";
import { Grid } from "@material-ui/core";
import Iteminformation from "./Iteminformation";
import Itemdescription from "./Itemdescription";
import { item, Item } from "../../api/graphql";
export default props => {
    const [data, setData] = useState<Item>();
    item(props.match.params.itemid)
        .then(result => {
            setData(result.data.item);
        })
        .catch(err => {
            console.log(err);
        });
    return (
        <Grid>
            <Grid container spacing={6}>
                <Grid item xs={false} sm={2}></Grid>
                <Grid item xs={12} sm={8}>
                    {data ? (
                        <Iteminformation
                            author={data.author}
                            counter={data.counter}
                            imgSrc={
                                "/api/image/item/" +
                                data.minecraft_item_shorthand
                            }
                            item_name={data.item_name}
                            price={data.price}
                        />
                    ) : null}
                    {data ? (
                        <Itemdescription description={data.description} />
                    ) : null}
                </Grid>
                <Grid item xs={false} sm={2}></Grid>
            </Grid>
        </Grid>
    );
};
