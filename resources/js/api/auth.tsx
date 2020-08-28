import React from "react";
import Axios, { AxiosResponse } from "axios";
export const authToken = localStorage.getItem("token");
const axiosInstance = Axios;

interface Login {
    username: string;
    password: string;
}
interface Register extends Login {
    email: string;
}
export async function login(credentials: Login): Promise<any> {
    const token = await Axios.post("/api/login", credentials);
    console.log(token);
    localStorage.removeItem("token");
    token.data.status
        ? localStorage.setItem("token", token.data.access_token)
        : null;
    console.log(localStorage.getItem("token"));

    return token;
}
export async function register(user: Register): Promise<AxiosResponse<any>> {
    return Axios.post("/api/register", user);
}
export async function me(): Promise<AxiosResponse<any>> {
    axiosInstance.defaults.headers.common[
        "Authorization"
    ] = `Bearer ${authToken}`;
    return axiosInstance.post("api/me");
}
