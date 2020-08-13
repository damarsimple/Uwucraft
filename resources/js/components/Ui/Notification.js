import React from "react";
import { ToastContainer, toast } from "react-toastify";
import "react-toastify/dist/ReactToastify.css";
import echo from "../Echo";
/**  Using Echo listen for events then show it using react toastify */
class Notification extends React.Component {
    constructor(props) {
        super(props);

        /** React Toastify + Laravel Echos */
        echo.channel("GlobalNotifications").listen("GlobalNotifications", e => {
            console.log(e);
            toast.info("🔔 " + e.data.message, {
                position: "bottom-left",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined
            });
        });
    }
    render() {
        return (
            <div>
                <ToastContainer />
            </div>
        );
    }
}
export default Notification;
