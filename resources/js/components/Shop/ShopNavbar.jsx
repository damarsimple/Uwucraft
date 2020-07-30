import React from "react";
import { FaShoppingCart, FaRegBell, FaUserAlt, FaStore } from "react-icons/fa";
class ShopNavbar extends React.Component {
    render() {
        return (
            <nav className="navbar navbar-expand-lg navbar-light bg-silver fixed-top-2 shadow-sm w-100 mb-5 bg-white rounded">
                <div className="container-fluid">
                    <ul className="navbar-nav mr-auto mb-2 mb-lg-0">
                        <li className="nav-item">
                            <a
                                href="{{ url('/home') }}"
                                className="nav-link active"
                                aria-current="page"
                            >
                                Categories
                            </a>
                        </li>
                    </ul>

                    <input
                        className="form-control m-3"
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <FaShoppingCart size="1.5em" className="m-3"/>
                    <FaRegBell size="1.5em" className="m-3"/>
<div style={{ borderLeft: '1px solid black',
  height: '35px'}}></div> 
                    <FaStore size="1.5em" className="m-3"/>
                    <FaUserAlt size="1.5em" className="m-3"/>
                </div>
            </nav>
        );
    }
}

export default ShopNavbar;
