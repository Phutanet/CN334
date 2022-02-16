import React, {useState} from 'react';
import './Navbar.css';

function Navbar() {

    const [toggle, setToggle] = useState('')

    const onClickIsActive = () => {
        if (toggle === '') {
            setToggle('is-active')
        } else {
            setToggle('')
        }
        console.log(toggle)
    }
    
    return (
        <nav>
            <div className='container'>

                <h1>Portfolio</h1>

                <div className='menu'>
                    <a href='#' className='is-active'>Home</a>
                    <a href='#' >Blog</a>
                    <a href='#' >Sign out</a>
                </div>

                <button className={'hamburger ' + toggle} onClick={onClickIsActive}>
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

            </div>
        </nav> 
    )
}

export default Navbar;
