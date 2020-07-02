import React from 'react';
import ReactDOM from 'react-dom';
import Tippy from '@tippyjs/react';
import 'tippy.js/dist/tippy.css'; // optional
class Example extends React.Component{
    constructor(props) {
        super(props)
        this.state = {
            count: Date.now()
        };
    }
    render() {
        return (
            <div className="container">
            <div>Number Now</div>
            <div>{this.state.count}</div>
            <Tippy content="Hello">
            <button>My button</button>
            </Tippy>
            </div>
        );
    }
    componentDidMount() {
        this.interval = setInterval(() => this.setState({ count: Date.now() }), 1000);
    }
    componentWillUnmount() {
        clearInterval(this.interval);
    }
}
ReactDOM.render(
    <Example />,
    document.querySelector('#example')
)
