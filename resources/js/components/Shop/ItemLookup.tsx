import React, { useEffect } from "react";
import { Container, createStyles, makeStyles, Theme } from "@material-ui/core";
import { Link } from "react-router-dom";
import Iteminformation from "./ItemInformation";
import Itemdescription from "./ItemDescription";
import { GET_ITEM } from "../../api/graphql";
import { useQuery } from "@apollo/client";
import { Item } from "../../type/type";
import { increaseViewCount } from "../../api/rest";
import useBreadcrumbs from "use-react-router-breadcrumbs";
import Typography from "@material-ui/core/Typography";
import Breadcrumbs from "@material-ui/core/Breadcrumbs";
const useStyles = makeStyles((theme: Theme) =>
  createStyles({
    link: {
      textDecoration: "none",
      color: "black"
    }
  })
);
const ItemLookup = props => {
  const classes = useStyles();
  const { loading, error, data } = useQuery(GET_ITEM, {
    variables: { item_id: props.match.params.itemid }
  });
  const breadcrumbs = useBreadcrumbs();
  useEffect(() => {
    increaseViewCount(props.match.params.itemid).then();
  }, [props.match.params.itemid]);
  if (loading) return "Loading";
  if (error) return `Error! ${error.message}`;
  const item: Item = data.item;
  return (
    <Container maxWidth="lg">
      <Breadcrumbs aria-label="breadcrumb">
        <Link className={classes.link} to={"/"}>
          Uwucraft
        </Link>
        {breadcrumbs[breadcrumbs.length - 2].key
          .substr(1, breadcrumbs[breadcrumbs.length - 2].key.length)
          .split("/")
          .map((e, index) => {
            return (
              <Link className={classes.link} key={index} to={"/" + e}>
                {e.charAt(0).toUpperCase() + e.slice(1)}
              </Link>
            );
          })}
        <Link className={classes.link} to="#">
          {item.item_name}
        </Link>
      </Breadcrumbs>

      <Iteminformation {...item} />
      <Itemdescription description={item.description} review={item.review} />
    </Container>
  );
};
export default ItemLookup;
