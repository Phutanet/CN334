import React, { useState, useEffect } from 'react'
import './Navbar.css'
import DataContext from '../DataContext'

const Navbar = () => {

  const [loginPopup, setLoginPopup] = useState('')
  const [loginAuth, setLoginAuth] = useState('Login')

  const onClickShow = () => {
    if (loginPopup === '' && loginAuth === 'Login') {
      setLoginPopup('show')
    } else if (loginAuth === 'Logout') {
      setLoginAuth('Login')
    } else {
      setLoginPopup('')
    }
  }

  const onClickLogin = () => {
    if (loginAuth === 'Login') {
      setLoginAuth('Logout')
      setLoginPopup('')
    } else {
      setLoginAuth('Login')
    }
  }

  useEffect(() => {
    console.log(loginAuth)
  }, [loginAuth])

  return (
    <div>

      <DataContext.Provider value={loginAuth} />
      
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
          <li><a href="#" onClick={onClickShow}>{loginAuth}</a></li>
        </ul>
      </nav>


      <div class={'modal ' + loginPopup} id="modal">
        <div class="modal__wrapper">
          <h3>Login</h3>
          <form action="#">
            <p>username</p>
            <input type="text" />
            <p>password</p>
            <input type="text" />
            <div class="btn-group">
              <button type="submit" class="submit-btn" onClick={onClickLogin}>Login</button>
              <button class="cancel-btn modal__close" onClick={onClickShow}>Cancel</button>
            </div>
          </form>
        </div>
      </div>

    </div>
  )
}

export default Navbar;