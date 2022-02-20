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
                <p className="a-sub">Why Software Dev?</p>
                <p className="a-desc">
                    Software Developer skilled at technical leadership,
                    communication and presentations. Experienced in full project
                    life cycle from design to implementation to integration.
                    Ability to quickly learn and master new technologies and
                    working in both team and self-directed settings.
                </p>
                <p className="a-sub">Education</p>
                <p className="a-desc">
                    2013 - 2018 :
                    Bodindecha Sing Singhaseni 2 School
                    Intensive English Program (IEP)
                </p>
                <p className="a-desc">
                    2019 - NOW :
                    Thammasat University
                    Bachelor of Software Engineering
                </p>
            </div>
        </div>
    );
};

export default About;
