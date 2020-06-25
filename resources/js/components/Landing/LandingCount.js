import React from 'react';
import ReactDOM from 'react-dom';
import { AiFillDollarCircle } from 'react-icons/ai';
import { FiUserCheck } from 'react-icons/fi';
import { FiUsers } from 'react-icons/fi';
class LandingCount extends React.Component{
    render() {
        return (
            <div className="card d-flex text-center justify-content-center p-5">
                <h3 className="font-weight-bold">Stats</h3>
                <p className="font-weight-light">Player Proved to be happy in our hand!</p>
                <div className="container-fluid">
                    <div className="row p-5">
                        <div className="col-sm">
                            <FiUserCheck size={50}/>
                            <h4 className="font-weight-bold mt-3">100</h4>
                            <h5 className="text-uppercase font-weight-bold">Current Player on Server</h5>
                            <p className="font-weight-light">
                            Join us in the server and play with many player on server
                            </p>
                        </div>
                        <div className="col-sm">
                            <FiUsers size={50}/>
                            <h4 className="font-weight-bold mt-3">100</h4>
                            <h5 className="text-uppercase font-weight-bold">Played on server</h5>
                            <p className="font-weight-light">
                            Our server is legendary and has many players
                            </p>
                        </div>
                        <div className="col-sm">
                            <AiFillDollarCircle size={50}/>
                            <h4 className="font-weight-bold mt-3">100</h4>
                            <h5 className="text-uppercase font-weight-bold">Transaction Made</h5>
                            <p className="font-weight-light">
                            Yes our server is pay to win so make sure to take your mom credit card and purchase 32k Diamond Sword !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
if(document.getElementById('LandingCount'))
{
    ReactDOM.render(<LandingCount />, document.getElementById('LandingCount'));
}
export default LandingCount;



