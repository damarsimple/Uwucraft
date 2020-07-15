import React from "react";
import "./Chat.css";
class Chat extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            FriendList: ["Damar", "A", "ETC"],
            ActiveFriend: ["Damar", "A"],
            ChatBar: false
        };
    }
    render() {
        return (
            <div className="bottom-widget position-fixed d-flex">
                {this.state.ActiveFriend.map((active, index) => (
                    <div
                        key={index}
                        className="align-self-end mr-2 chat-widget-friend bg-light border border-dark shadow"
                    >
                        <div className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center">
                            {active}
                        </div>
                    </div>
                ))}
                <div className="align-self-end chat-widget bg-light border border-dark shadow">
                    <div
                        onClick={() =>
                            this.setState({ ChatBar: !this.state.ChatBar })
                        }
                        className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center"
                    >
                        Chat
                    </div>
                    {this.state.ChatBar && (
                        <table className="table table-hover">
                            <tbody>
                                {this.state.FriendList.map((friend, index) => (
                                    <tr key={index}>
                                        <td>
                                            <a>{friend}</a>
                                        </td>
                                    </tr>
                                ))}
                            </tbody>
                        </table>
                    )}
                </div>
            </div>
        );
    }
}
export default Chat;
