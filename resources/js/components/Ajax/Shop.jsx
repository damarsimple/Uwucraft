import axios from "axios";
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