import React, { useState, useEffect } from "react";
import { Grid } from "@material-ui/core";
import Iteminformation from "./Iteminformation";
import Itemdescription from "./Itemdescription";
import { item } from "../../api/graphql";
import { Item } from "../../type/type";
import { increaseViewCount } from "../../api/rest";
export default props => {
    const [data, setData] = useState<Item>();
    useEffect(() => {
        item(props.match.params.itemid)
            .then(result => {
                setData(result.data.item);
            })
            .catch(err => {
                console.log(err);
            });
        //Why this triggering Twice?
        //FIXME
        increaseViewCount(props.match.params.itemid).then();
    });

    return (
        <Grid>
            <Grid container spacing={6}>
                <Grid item xs={false} sm={2}></Grid>
                <Grid item xs={12} sm={8}>
                    {data ? (
                        <Iteminformation
                            id={data.id}
                            author={data.author}
                            counter={data.counter}
                            imgSrc={
                                "/api/image/item/" +
                                data.minecraft_item_shorthand
                            }
                            item_name={data.item_name}
                            price={data.price}
                            view={data.view}
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
