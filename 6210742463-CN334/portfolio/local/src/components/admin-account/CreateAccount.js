import React from 'react';
import './Form.css';

function CreateAccount() {
  return (
    <div className='login'>
        <div class="title">Create Account</div>
        <div class="sub-title">Please Contract Admin About Web-site</div>
        <form class="login-form">
            <div class="name">
                <input type="text" class="user-input" placeholder="Name" />
            </div>
            <div class="username">
                <input type="text" class="user-input" placeholder="Username" />
            </div>
            <div class="password">
                <input type="password" class="user-pass" placeholder="Password" />
            </div>
            <button class="singin-btn">Submit</button>
        </form>
    </div>
  )
}

export default CreateAccount;