import React from "react";
import "./Navbar.css";

const Navbar = () => {
    return (
        <div>
            <nav>
                <h2 className="logo">Portfo<span>lio</span></h2>
                <ul>
                    <li><a href="#Home">Home</a></li>
                    <li><a href="#Contributions">Contributions</a></li>
                    <li><a href="#Contact">Contact</a></li>
                </ul>
            </nav>
        </div>
    );
};

export default Navbar;
