import React from "react";
import ReactDOM from "react-dom";
import "./Chat.css";
class Chat extends React.Component {
    render() {
        return (
            <div className="bottom-widget position-fixed d-flex">
                <div
                    id="friend-box"
                    className="align-self-end mr-2 chat-widget-friend bg-transparent border border-dark shadow"
                >
                    <div className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center">
                        Friend 1
                    </div>
                </div>
                <div
                    id="box"
                    className="align-self-end chat-widget bg-transparent border border-dark shadow"
                >
                    <div className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center">
                        Chat
                    </div>
                    <div id="show-chat">
                        <table className="table table-hover">
                            <tbody>
                                <tr>
                                    <td>Friend 1</td>
                                </tr>
                                <tr>
                                    <td>Friend 1</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        );
    }
}

export default Chat;

if (document.getElementById("Chat")) {
    ReactDOM.render(<Chat />, document.getElementById("Chat"));
}
