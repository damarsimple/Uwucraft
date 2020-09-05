import React, { useState, useEffect } from "react";
import { Grid, Container } from "@material-ui/core";
import Iteminformation from "./Iteminformation";
import Itemdescription from "./Itemdescription";
import { item } from "../../api/graphql";
import { Item } from "../../type/type";
import { increaseViewCount } from "../../api/rest";
export default props => {
    const [data, setData] = useState<Item>();
    useEffect(() => {
        console.log("I just mounted!" + props.match.params.itemid);

        item(props.match.params.itemid)
            .then(result => {
                console.log(result.data.item);
                setData(result.data.item);
            })
            .catch(err => {
                console.log(err);
            });
        //Why this triggering Twice?
        //FIXME
        increaseViewCount(props.match.params.itemid).then();
        return () => {
            console.log("I am unmounting " + props.match.params.itemid);
        };
    }, [props.match.params.itemid]);

    return (
        <Container maxWidth="lg">
            {data ? (
                <Iteminformation
                    id={data.id}
                    author={data.author}
                    counter={data.counter}
                    imgSrc={"/api/image/item/" + data.minecraft_item_shorthand}
                    item_name={data.item_name}
                    price={data.price}
                    view={data.view}
                    description={data.description}
                    minecraft_item_shorthand={data.minecraft_item_shorthand}
                    type={data.type}
                />
            ) : null}
            {data ? (
                <Itemdescription
                    description={data.description}
                    review={data.review}
                />
            ) : null}
        </Container>
    );
};
