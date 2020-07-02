import React from 'react';
import ReactDOM from 'react-dom';
import { ToastContainer,toast } from 'react-toastify';
import 'react-toastify/dist/ReactToastify.css';
import Echo from "laravel-echo";
import socketio from 'socket.io-client'

/**  Using Echo listen for events then show it using react toastify */
class Notification extends React.Component{
    constructor(props) {
        super (props);
        /** Init Echo  */
        const echo = new Echo(
            {
                broadcaster: 'socket.io',
                host: window.location.hostname + ':6001', // this is laravel-echo-server host
                client: socketio,
            }
        )
        /** React Toastify + Laravel Echos */
        echo.channel('GameEvent')
        .listen('GameEvent', e => {
            toast.info( '🔪 ' + e.data , {
                position: "bottom-left",
                autoClose: 5000,
                hideProgressBar: false,
                closeOnClick: true,
                pauseOnHover: true,
                draggable: true,
                progress: undefined,
                })
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
if(document.getElementById('Notification'))
{
    ReactDOM.render(<Notification />, document.getElementById('Notification'));
}
export default Notification;