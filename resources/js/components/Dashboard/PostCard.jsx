import React from "react";
import { FaEllipsisH } from "react-icons/fa";
import { MdSend } from "react-icons/md";
import { post } from "jquery";

export default class PostCard extends React.Component {
    constructor(props) {
        super(props);
        this.state = { value: "", button: false };

        this.handleChange = this.handleChange.bind(this);
        this.handleSubmit = this.handleSubmit.bind(this);
    }
    componentDidMount() {
        //listen echo
    }
    handleChange(event) {
        this.setState({ value: event.target.value });
    }
    handleMouseOver() {
        this.setState({ button: !this.state.button });
    }
    handleSubmit(event) {
        const data = {
            id: this.props.data.id,
            content: this.state.value
        };
        axios.post("/api/posts", data);
    }
    render() {
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
                            href={`./${this.props.data.username}`}
                        >
                            {this.props.data.username}
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
                        <p className="likes">
                            {this.props.data.reaction.length} reactions
                        </p>
                        <p>
                            <a
                                className="instagram-card-content-user"
                                href={`./${this.props.data.username}`}
                            >
                                {this.props.data.username}
                            </a>
                            {this.props.data.content}
                        </p>
                        <p className="comments">
                            view all {this.props.data.comment.length} comments
                        </p>
                        {this.props.data.comment.map((comment, i) => {
                            return (
                                <div key={i}>
                                    <a
                                        href={`/dazzle`}
                                        className="user-comment"
                                    >
                                        dazzle
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
                            value={this.state.value}
                            onChange={this.handleChange}
                        />

                        <MdSend
                            fill={ this.state.button ? 'blue' : '' }
                            onMouseEnter={this.handleMouseOver.bind(this)}
                            onMouseLeave={this.handleMouseOver.bind(this)}
                            size='2em'
                            onClick={this.handleSubmit}
                        />

                        <a className="footer-action-icons" href="#"></a>
                    </div>
                </div>
                <br />
                <br />
            </>
        );
    }
}
