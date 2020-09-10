import React, { useEffect } from "react";
import { Container } from "@material-ui/core";
import Iteminformation from "./ItemInformation";
import Itemdescription from "./ItemDescription";
import { GET_ITEM } from "../../api/graphql";
import { useQuery } from "@apollo/client";
import { Item } from "../../type/type";
import { increaseViewCount } from "../../api/rest";
const ItemLookup = props => {
    const { loading, error, data } = useQuery(GET_ITEM, {
        variables: { item_id: props.match.params.itemid }
    });
    useEffect(() => {
        increaseViewCount(props.match.params.itemid).then();
    }, [props.match.params.itemid]);
    if (loading) return "Loading";
    if (error) return `Error! ${error.message}`;
    const item: Item = data.item;
    return (
        <Container maxWidth="lg">
            <Iteminformation {...item} />

            <Itemdescription
                description={item.description}
                review={item.review}
            />
        </Container>
    );
};
export default ItemLookup;
