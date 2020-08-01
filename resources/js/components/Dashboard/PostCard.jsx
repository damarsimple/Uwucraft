import React, { useState } from "react";
import { FaEllipsisH } from "react-icons/fa";
import { MdSend } from "react-icons/md";
import Echo from "laravel-echo";
import socketio from "socket.io-client";
export default function PostCard(props) {
    const data = props.props;
    const [input, setInput] = useState("");
    const [button, setButton] = useState(false);
    const submit = () => {
        const sub = {
            id: data.id,
            content: input,
        };
        console.log(sub);
        setInput('');
        return axios.post("/ajax/posts", sub);
    };
    return (
        <>
            <div className="instagram-card">
                <div className="instagram-card-header">
                    <img
                        src="https://randomuser.me/api/portraits/women/46.jpg"
                        className="instagram-card-user-image"
                    />
                    <a
                        className="instagram-card-user-name"
                        href={`./${data.user.username}`}
                    >
                        {data.user.username}
                    </a>
                    <div className="instagram-card-action d-flex justify-content-center">
                        <FaEllipsisH />
                    </div>
                </div>
                <div className="intagram-card-image mt-4">
                    <img
                        className="img-fluid"
                        width="960px"
                        src="https://source.unsplash.com/random"
                    />
                </div>
                <div className="instagram-card-content">
                    <p className="likes">{data.reaction.length} reactions</p>
                    <p>
                        <a
                            className="instagram-card-content-user"
                            href={`./${data.user.username}`}
                        >
                            {data.user.username}
                        </a>
                        {data.content}
                    </p>
                    <p className="comments">
                        view all {data.comment.length} comments
                    </p>
                    {data.comment.map((comment, i) => {
                        return (
                            <div key={i}>
                                <a
                                    href={`./${comment.user.username}`}
                                    className="user-comment"
                                >
                                    {comment.user.username}
                                </a>
                                {comment.content}
                            </div>
                        );
                    })}
                    <br />
                    <div className="instagram-card-time">58 min</div>
                    <br />
                    <hr />
                </div>
                <div className="instagram-card-footer">
                    <a className="footer-action-icons" href="#">
                        <i className="fa fa-heart-o" />
                    </a>

                    <input
                        className="comments-input"
                        type="text"
                        placeholder="Add a comment ..."
                        value={input}
                        onChange={e => setInput(e.target.value)}
                    />

                    <MdSend
                        fill={button ? "blue" : ""}
                        onMouseEnter={() => setButton(!button)}
                        onMouseLeave={() => setButton(!button)}
                        size="2em"
                          onClick={submit}
                    />
                    <a className="footer-action-icons" href="#"></a>
                </div>
            </div>
            <br />
            <br />
        </>
    );
}
