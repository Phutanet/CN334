import React, { useState } from 'react'
import './Header.css'


const Header = () => {

    return (
        <section id="home">
            <div class="inner-width">
                <div class="content">
                    <h1>Hi I'm </h1>
                    <div class="sm">
                        <a href="#" class="fab fa-facebook-f"></a>
                        <a href="#" class="fab fa-twitter"></a>
                        <a href="#" class="fab fa-instagram"></a>
                        <a href="#" class="fab fa-linkedin-in"></a>
                    </div>
                    <div class="buttons">
                        <a href="#about">About me</a>
                        <a href="#">Download CV</a>
                    </div>
                </div>
            </div>
        </section>
    )
}

export default Header;