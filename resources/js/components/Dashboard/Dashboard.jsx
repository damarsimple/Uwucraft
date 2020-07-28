import React from "react";
import "./Dashboard.css";
import ShopProfile from "../Shop/ShopProfile";
import PostCard from "./PostCard";
class Dashboard extends React.Component {
    render() {
        return (
            <div className="container">
                <div className="row padding">
                    <div className="col-md-9">
                        {/** Left */}
                        <PostCard />
                        {/** End Loop Here */}
                        {/** EndLeft */}
                    </div>
                    <div className="col-md-3">
                        <ShopProfile
                            points={1}
                            money={1}
                            cart={[]}
                            username={1}
                            totalCarts={1}
                        />
                    </div>
                </div>
            </div>
        );
    }
}
export default Dashboard;
