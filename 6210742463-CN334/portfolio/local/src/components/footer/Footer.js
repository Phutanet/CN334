import React from 'react'
import './Footer.css'


const Footer = () => {

  return (
    <footer className="footer">
      <div className="container-footer">
        <div className="row">
          <div className="footer-col">
            <h4>Portfolio</h4>
            <ul>
              <li><a href="#home">Home</a></li>
              <li><a href="#project">Project</a></li>
              <li><a href="#about">About Us</a></li>
              <li><a href="#contact">Contact</a></li>
            </ul>
          </div>
          <div className="footer-col">
            <h4>Download</h4>
            <ul>
              <li><a href="#">Resume</a></li>
              <li><a href="#">CV</a></li>
            </ul>
          </div>
          <div className="footer-col">
            <h4>Contact</h4>
            <ul>
              <li><a href="#">0820290145</a></li>
              <li><a href="#">siraphat.phetsakun@gmail.com</a></li>
              <li><a href="#">Bangkok, Thailand</a></li>
            </ul>
          </div>
          <div className="footer-col">
            <h4>follow us</h4>
            <div className="social-links">
              <a href="#"><i className="fab fa-facebook-f"></i></a>
              <a href="#"><i className="fab fa-twitter"></i></a>
              <a href="#"><i className="fab fa-instagram"></i></a>
              <a href="#"><i className="fab fa-linkedin-in"></i></a>
            </div>
          </div>
        </div>
      </div>
    </footer>
  )
}

export default Footer;