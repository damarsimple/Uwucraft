import React from "react";
import "./Chat.css";
import Axios from "axios";
import { MdClose } from "react-icons/md";
class Chat extends React.Component {
    constructor(props) {
        super(props);
        this.state = {
            friendList: [],
            activeFriend: [],
            ChatBar: false
        };
    }
    componentDidMount() {
        Axios.get("ajax/friend").then(response => {
            this.setState({ friendList: response.data });
        });
    }
    removeActiveFriend(event) {
        this.setState({
            activeFriend: this.state.activeFriend.filter(a => a !== event)
        });
    }
    render() {
        return (
            <div className="bottom-widget position-fixed d-flex">
                {this.state.activeFriend.map((active, index) => (
                    <div
                        key={index}
                        className="align-self-end mr-2 chat-widget-friend bg-light border border-dark shadow"
                    >
                        <div className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center">
                            {active.username}
                            <MdClose
                            className="float-right"
                                size="1.5em"
                                fill="#808080"
                                onClick={this.removeActiveFriend.bind(
                                    this,
                                    active
                                )}
                            />
                        </div>
                    </div>
                ))}
                <div className="align-self-end chat-widget bg-light border border-dark shadow">
                    <div
                        value="1"
                        name="bruh"
                        onClick={() =>
                            this.setState({ ChatBar: !this.state.ChatBar })
                        }
                        className="font-weight-bold text-upparcase bg-light p-2 text-uppercase text-center"
                    >
                        Chat
                    </div>
                    {this.state.ChatBar && (
                        <table className="table table-hover d-flex justify-content-center">
                            <tbody>
                                {this.state.friendList.map((friend, index) => (
                                    <tr key={index}>
                                        <td>
                                            <button
                                                className="btn btn-light"
                                                onClick={() => {
                                                    if (
                                                        !this.state.activeFriend.some(
                                                            active =>
                                                                active.username ==
                                                                friend.friend
                                                                    .username
                                                        )
                                                    ) {
                                                        this.setState({
                                                            activeFriend: this.state.activeFriend.concat(
                                                                friend.friend
                                                            )
                                                        });
                                                    }
                                                }}
                                            >
                                                {friend.friend.username}
                                            </button>
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
