import React, { useState } from "react";
import Grid from "@material-ui/core/Grid";
import Post from "./Postcard";
import { posts } from "../../api/graphql";
import { Posts } from "../../type/type";
export default () => {
    const [postslist, setPost] = useState<Posts>([]);
    posts().then(result => setPost(result.data.posts.data));
    return (
        <>
            <Grid container spacing={3}>
                <Grid item xs={3}></Grid>
                <Grid item xs={6}>
                    {postslist.map((post, index) => {
                        return <Post key={index} post={post} />;
                    })}
                </Grid>
                <Grid item xs={3}></Grid>
            </Grid>
        </>
    );
};
