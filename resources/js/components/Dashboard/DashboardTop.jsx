import React from 'react';
import ReactDOM from 'react-dom';
import { AiFillDollarCircle } from 'react-icons/ai';
import { FiUserCheck } from 'react-icons/fi';
import { FiUsers } from 'react-icons/fi';
class DashboardTop extends React.Component{
    constructor(props)
    {
        super(props);
        this.state = {
            PlayerCurrent: Date.now(),
            PlayerTotal: Date.now(),
            PlayerTransaction: Date.now(),
        };
    }
    componentDidMount() {
        this.interval = setInterval(() => this.setState({
            PlayerCurrent: Math.random().toString(),
            PlayerTotal: Math.random().toString(),
            PlayerTransaction: Math.random().toString(),
        }), 1000);
    }
    componentWillUnmount() {
        clearInterval(this.interval);
    }
    render() {
        return (
            <div style={{boxSizing: null}} className="container-fluid card d-flex text-center justify-content-center p-5">
                <h3 className="font-weight-bold">Stats</h3>
                <p className="font-weight-light">Player Proved to be happy in our hand!</p>
                <div className="container-fluid">
                    <div className="row p-5">
                        <div className="col-sm">
                            <FiUserCheck size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerCurrent }</h4>
                            <h5 className="text-uppercase font-weight-bold">Need More Idea</h5>
                            <p className="font-weight-light">
                            lorem1000
                            </p>
                        </div>
                        <div className="col-sm">
                            <FiUsers size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerTotal }</h4>
                            <h5 className="text-uppercase font-weight-bold">Need More Idea</h5>
                            <p className="font-weight-light">
                            lorem1000
                            </p>
                        </div>
                        <div className="col-sm">
                            <AiFillDollarCircle size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerTransaction }</h4>
                            <h5 className="text-uppercase font-weight-bold">Need More Idea</h5>
                            <p className="font-weight-light">
                            lorem1000
                            </p>
                        </div>
                    </div>
                    <div className="row p-5">
                        <div className="col-sm">
                            <FiUserCheck size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerCurrent }</h4>
                            <h5 className="text-uppercase font-weight-bold">Current Player on Server</h5>
                            <p className="font-weight-light">
                            Join us in the server and play with many player on server
                            </p>
                        </div>
                        <div className="col-sm">
                            <FiUsers size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerTotal }</h4>
                            <h5 className="text-uppercase font-weight-bold">Played on server</h5>
                            <p className="font-weight-light">
                            Our server is legendary and has many players
                            </p>
                        </div>
                        <div className="col-sm">
                            <AiFillDollarCircle size={50}/>
                            <h4 className="font-weight-bold mt-3">{ this.state.PlayerTransaction }</h4>
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

if(document.getElementById('DashboardTop'))
{
    ReactDOM.render(<DashboardTop />, document.getElementById('DashboardTop'))
}
export default DashboardTop;

