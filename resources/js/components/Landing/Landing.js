import React from 'react';
import ReactDOM from 'react-dom';
import img from '../../../../public/bg.png'
var bg = {
    position: 'absolute',
    width: '100%',
    height: '100%',
    backgroundImage: `url(${img})`
}
class Landing extends React.Component{
    render() {
        return (
            <div style={ bg } className="container-fluid p-lg-5 align-items-center">
                <h1 className="text-center text-uppercase font-weight-bold text-white">UWUCRAFT</h1>
                <p className="text-center text-white">Ourserver is good and very good yes im learning how to react teehe pls no bully UwU</p>
            </div>
        );
    }
}
if(document.getElementById('Landing'))
{
    ReactDOM.render(<Landing />, document.getElementById('Landing'));
}
export default Landing;
