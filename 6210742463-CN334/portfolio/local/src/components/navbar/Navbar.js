import React, { useState, useEffect } from 'react'
import './Navbar.css'

const Navbar = () => {

  return (
    <div>
      
      <nav>
        <div className="logo">Portfolio</div>
        <input type="checkbox" id="click" />
        <label for="click" className="menu-btn">
          <i className="fas fa-bars"></i>
        </label>
        <ul>
          <li><a href="#home">Home</a></li>
          <li><a href="#project">Project</a></li>
          <li><a href="#about">About</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </nav>

    </div>
  )
}

export default Navbar;