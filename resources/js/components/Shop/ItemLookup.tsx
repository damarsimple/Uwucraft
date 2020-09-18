import React, { useEffect } from "react";
import { Container, Link, Paper } from "@material-ui/core";
import Iteminformation from "./ItemInformation";
import Itemdescription from "./ItemDescription";
import { GET_ITEM } from "../../api/graphql";
import { useQuery } from "@apollo/client";
import { Item } from "../../type/type";
import { increaseViewCount } from "../../api/rest";
import useBreadcrumbs from "use-react-router-breadcrumbs";
import Typography from "@material-ui/core/Typography";
import Breadcrumbs from "@material-ui/core/Breadcrumbs";
const ItemLookup = props => {
    const { loading, error, data } = useQuery(GET_ITEM, {
        variables: { item_id: props.match.params.itemid }
    });
    const breadcrumbs = useBreadcrumbs();
    useEffect(() => {
        increaseViewCount(props.match.params.itemid).then();
        console.log(breadcrumbs[breadcrumbs.length - 2]);
    }, [props.match.params.itemid]);
    if (loading) return "Loading";
    if (error) return `Error! ${error.message}`;
    const item: Item = data.item;
    return (
        <Container maxWidth="lg">
            <Breadcrumbs aria-label="breadcrumb">
                <Link color="inherit" href="#">
                    Uwucraft
                </Link>
                {breadcrumbs[breadcrumbs.length - 2].key
                    .substr(1, breadcrumbs[breadcrumbs.length - 2].key.length)
                    .split("/")
                    .map((e, index) => {
                        return (
                            <Link key={index} color="inherit" href="#">
                                {e.charAt(0).toUpperCase() + e.slice(1)}
                            </Link>
                        );
                    })}
                <Link color="textPrimary" href="#">
                    {item.item_name}
                </Link>
            </Breadcrumbs>

            <Iteminformation {...item} />
            <Itemdescription
                description={item.description}
                review={item.review}
            />
        </Container>
    );
};
export default ItemLookup;
