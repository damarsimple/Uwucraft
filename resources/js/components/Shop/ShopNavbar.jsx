import React from "react";
import { FaShoppingCart, FaRegBell } from "react-icons/fa";
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
                                Status
                            </a>
                        </li>
                    </ul>

                    <input
                        className="form-control "
                        type="search"
                        placeholder="Search"
                        aria-label="Search"
                    />
                    <FaShoppingCart />
                    <FaRegBell />
                </div>
            </nav>
        );
    }
}

export default ShopNavbar;
