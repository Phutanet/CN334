import React from "react";

import { BrowserRouter as Router, Route, Routes } from "react-router-dom";

import About from "./components/page/About";
import Experience from "./components/page/Experience";
import Home from "./components/page/Home";
import Contact from "./components/page/Contact";
import Navbar from "./components/UI/Navbar";
import Footer from "./components/page/Footer";

// Redux
import { Provider } from "react-redux";
import store from "./redux/store";

const App = () => {
    return (
        <Provider store={store}>
            <Router>
                <Navbar />
                <main>
                    <Routes>
                        <Route exact path="/" element={<Home />} />
                        <Route exact path="/about" element={<About />} />
                        <Route exact path="/experience" element={<Experience />} />
                        <Route exact path="/contact" element={<Contact />} />
                    </Routes>
                </main>
                <Footer />
            </Router>
        </Provider>
    );
};

export default App;
