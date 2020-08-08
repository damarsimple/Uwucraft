import React, { useState } from "react";
import { FaEllipsisH, FaHeart, FaThumbsUp, FaAngry } from "react-icons/fa";
import { MdSend } from "react-icons/md";
import ReadMoreReact from "read-more-react";
import Axios from "axios";
export default function PostCard(props) {
    let data = props.props;
    const [inputComment, setInputComment] = useState("");
    const [button, setButton] = useState(false);
    const [reactions1, setReactions1] = useState(false);
    const [reactions2, setReactions2] = useState(false);
    const [reactions3, setReactions3] = useState(false);
    const submitComment = () => {
        const sub = {
            type: "comment",
            id: data.id,
            content: inputComment
        };
        setInputComment("");
        return Axios.post("/ajax/posts", sub);
    };
    const submitLove = () => {
        if (reactions1) {
            submitReaction(1);
            setReactions1(!reactions1);
        } else {
            setReactions1(!reactions1);
            /** TODO: delete reactions */
        }
    };
    const submitLike = () => {
        if (!reactions2) {
            submitReaction(2);
            setReactions2(!reactions2);
        } else {
            setReactions2(!reactions2);
        }
    };
    const submitAnger = () => {
        if (!reactions3) {
            submitReaction(3);
            setReactions3(!reactions3);
        } else {
            setReactions3(!reactions3);
        }
    };
    const submitReaction = val => {
        const sub = {
            type: "reaction",
            id: data.id,
            content: val
        };
        return Axios.post("/ajax/posts", sub);
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
                        href={`./${data.author.username}`}
                    >
                        {data.author.username}
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
                    {/*                   
                  <video autoplay controls width={960}>
                        <source
                            src="https://www.w3schools.com/tags/movie.mp4"
                            type="video/mp4"
                        />
                        Your browser does not support the video tag.
                    </video> */}
                </div>
                <div className="instagram-card-content">
                    <FaHeart
                        className="m-2"
                        size="2em"
                        onMouseEnter={() => setReactions1(!reactions1)}
                        onMouseLeave={() => setReactions1(!reactions1)}
                        onClick={() => submitLove()}
                        fill={reactions1 ? "red" : ""}
                    />
                    <FaThumbsUp
                        className="m-2"
                        size="2em"
                        onMouseEnter={() => setReactions2(!reactions2)}
                        onMouseLeave={() => setReactions2(!reactions2)}
                        onClick={() => submitLike()}
                        fill={reactions2 ? "blue" : ""}
                    />
                    <FaAngry
                        className="m-2"
                        size="2em"
                        onMouseEnter={() => setReactions3(!reactions3)}
                        onMouseLeave={() => setReactions3(!reactions3)}
                        onClick={() => submitAnger()}
                        fill={reactions3 ? "orange" : ""}
                    />
                    <p className="likes">{data.reactionsCount} reacted</p>
                    <p>
                        <a
                            className="instagram-card-content-user"
                            href={`./${data.author.username}`}
                        >
                            {data.author.username}
                        </a>
                    </p>
                    <ReadMoreReact
                        text={data.content}
                        min={300}
                        ideal={350}
                        max={500}
                        readMoreText={"click here to read more"}
                    />
                    <p className="comments">
                        view all {data.commentsCount} comments
                    </p>
                    {data.comments.map((comment, i) => {
                        return (
                            <div key={i}>
                                <a
                                    href={`./${comment.author.username}`}
                                    className="user-comment"
                                >
                                    {comment.author.username}
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
                        value={inputComment}
                        onChange={e => setInputComment(e.target.value)}
                    />

                    <MdSend
                        fill={button ? "blue" : ""}
                        onMouseEnter={() => setButton(!button)}
                        onMouseLeave={() => setButton(!button)}
                        size="2em"
                        onClick={submitComment}
                    />
                    <a className="footer-action-icons" href="#"></a>
                </div>
            </div>
            <br />
            <br />
        </>
    );
}
