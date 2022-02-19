import React from 'react';
import Me from '../../images/S__21520387.jpg';
import '../css/Home.css';

const Home = () => {
    
    return (
        <div className="i">
            <div className="i-left">
                <div className="i-left-wrapper">
                    <h2 className="i-intro">Hello, My name is</h2>
                    <h1 className="i-name">Chittawan Wetchaya</h1>
                    <div className="i-title">
                        <div className="i-title-wrapper">
                            <div className="i-title-item">FrontEnd Developer</div>
                            <div className="i-title-item">BackEnd Developer</div>
                            <div className="i-title-item">UI/UX Developer</div>
                            <div className="i-title-item">Web Developer</div>
                            <div className="i-title-item">Writer</div>
                        </div>
                    </div>
                    <div className="i-desc">
                        I design and develop services for customers of all sizes,
                        specializing in creating stylish, modern website, we server and
                        online stores.
                    </div>
                </div>
            </div>
            <div className="i-right">
                <div className="i-bg"></div>
                <img src={Me} alt="" className="i-img" />
            </div>
        </div>
    );


}

export default Home;