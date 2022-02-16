import React from 'react';
import './Login.css';

function Login() {
  return (
    <div className='login'>
        <div class="title">Portfolio</div>
        <div class="sub-title">Please Contract Admin About Web-site</div>
        <form class="login-form">
          <div class="username">
              <input type="username" class="user-input" placeholder="Username" />
          </div>
          <div class="password">
              <input type="password" class="user-pass" placeholder="Password" />
          </div>
          <button title="login now" class="singin-btn">Sign in</button>
        </form>
    </div>
  )
}

export default Login;
