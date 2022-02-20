import "./App.css";
import React from "react";


import Navbar from "./Components/Navbar";
import Home from "./Components/Home";
import Contributions from "./Components/Contributions";
import Contact from "./Components/Contact";


function App() {
    return (
        <div className="main-wallpaper">
            <Navbar />
            <Home />
            <Contributions/>
            <Contact />
        </div>
    );
}

export default App;
