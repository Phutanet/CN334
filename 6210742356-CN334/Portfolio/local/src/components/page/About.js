import React from "react";
import "../css/About.css";

const About = () => {
    return (
        <div className="a">
            <div className="a-left">
                <div className="a-card bg"></div>
                <div className="a-card">
                    <img
                        src="https://ehabphotography.com/wp-content/uploads/2021/11/feature.jpg"
                        alt=""
                        className="a-img"
                    />
                </div>
            </div>
            <div className="a-right">
                <h1 className="a-title">About ME</h1>
                <p className="a-sub">
                    I was very proud of my nickname throughout high school but
                    today- I couldn’t be any different to what my nickname was.
                </p>
                <p className="a-desc">
                    Before he moved to the inner city, he had always believed
                    that security complexes were psychological. There were three
                    sphered rocks congregating in a cubed room. The teens
                    wondered what was kept in the red shed on the far edge of
                    the school grounds.
                </p>
            </div>
        </div>
    );
};

export default About;
