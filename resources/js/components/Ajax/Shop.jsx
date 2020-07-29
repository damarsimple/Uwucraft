import axios from "axios";
import { toast } from "react-toastify";
export function Cart() {
    return axios.get(
        window.location.protocol +
            "//" +
            window.location.hostname +
            ":" +
            window.location.port +
            "/ajax/shop"
    );
}

export function Test() {
    console.log("tst");
}
export function fetchItems() {
    return axios.get(
        window.location.protocol +
            "//" +
            window.location.hostname +
            ":" +
            window.location.port +
            "/api/items"
    );
}
export function getImg(img) {
    return (
        window.location.protocol +
        "//" +
        window.location.hostname +
        ":" +
        window.location.port +
        "/api/image/item/" +
        img
    );
}
export function getCarousel(){
    return (
        window.location.protocol +
        "//" +
        window.location.hostname +
        ":" +
        window.location.port +
        "/api/image/carousel/" +
        img
    );
}

export function postCart(itemid, amount, name) {
    try {
        const response = axios.post(
            window.location.protocol +
                "//" +
                window.location.hostname +
                ":" +
                window.location.port +
                "/ajax/shop",
            {
                itemid: itemid,
                amount: amount
            }
        );
        toast.info("🛒 " + "Added " + name + " To Carts !", {
            position: "bottom-left",
            autoClose: 5000,
            hideProgressBar: false,
            closeOnClick: true,
            pauseOnHover: true,
            draggable: true,
            progress: undefined
        });
    } catch (e) {
        console.log(`😱 Axios request failed: ${e}`);
    }
    
}