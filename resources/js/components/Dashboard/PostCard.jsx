import React from "react";
import { FaEllipsisH } from 'react-icons/fa';
import { MdSend } from 'react-icons/md'
class PostCard extends React.Component {
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
                            href="/followmeto/"
                        >
                            followmeto
                        </a>
                        <div className="instagram-card-action d-flex justify-content-center"><FaEllipsisH /></div>
                    </div>
                    <div className="intagram-card-image mt-4">
                        <img
                            className="img-fluid"
                            src="https://images.unsplash.com/photo-1494253109108-2e30c049369b?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&w=1000&q=80"
                        />
                    </div>
                    <div className="instagram-card-content">
                        <p className="likes">18.068 likes</p>
                        <p>
                            <a
                                className="instagram-card-content-user"
                                href="https://www.instagram.com/followmeto/"
                            >
                                followmeto
                            </a>
                            So excited to have made it to Lapland! Our first
                            stop was sleeping inside a room made entirely of ice
                            at the Kemi Snow Hotel 😱 Stoked that I've ticked
                            this off my bucket list and never have to do it
                            again... Let's just say the novelty of sleeping in
                            -5 degrees temperature quickly wears off (but hey,
                            it was a COOL experience nonetheless) 😜❄️
                            <a
                                className="hashtag"
                                href="https://www.instagram.com/explore/tags/visitkemi/"
                            >
                                #visitkemi
                            </a>
                        </p>
                        <p className="comments">view all 48 comments</p>
                        { /** Begin Loop Comment here */}
                        <a
                            className="user-comment"
                            href="https://www.instagram.com/anitzakm/"
                        >
                            larasehef
                        </a>
                        wowwwwww{/** Content */}
                                {/** End loop Comment here */}
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
                        />
                        <a className="footer-action-icons" href="#">
                           <MdSend />
                        </a>
                    </div>
                </div>
                <br />
                <br />
            </>
        );
    }
}

export default PostCard;
