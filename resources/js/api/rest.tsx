import React from "react";
import Axios, { AxiosPromise } from "axios";

export async function increaseViewCount(
    id: number
): Promise<AxiosPromise<any>> {
    return Axios.post("/api/item/increaseview", { id: id });
}
