import React from 'react'
import './About.css'

import ProfileIMG from '../../images/profile.jpg'

const About = () => {

  return (
    <section className="about" id='about'>
      <div className="main">
        <img src={ProfileIMG} />
        <div className="about-text">
          <h2>About Me</h2>
          <h5>Developer <span>& Designer</span></h5>
          <p>I am a software engineer. I study in thammasat university. I can provide clean code and perfect design. I also make the website more & more interactive with web application. A responsive design makes me website accessible to all users, regardless of their device.</p>
        </div>
      </div>
    </section>
  )
}

export default About;