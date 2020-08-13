import Echo from "laravel-echo";
import socketio from "socket.io-client";
/** Init Echo  */
const echo = new Echo({
    broadcaster: "socket.io",
    host: window.location.hostname + ":6001", // this is laravel-echo-server host
    client: socketio
});
export default echo;
