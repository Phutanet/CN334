import React from 'react'
import './Contact.css'

const Contact = () => {

  return (
    <section id='contact'>
        <div className="inner-width">
            <h1 className="section-title">Contact</h1>
            <div className="contact-info">
                <div className="item">
                    <i className="fas fa-mobile-alt"></i>
                        082-029-0145
                </div>

                <div className="item">
                    <i className="fas fa-envelope"></i>
                        siraphat.phetsakun@gmail.com
                </div>

                <div className="item">
                    <i className="fas fa-map-marker-alt"></i>
                        Bangkok, Thailand
                </div>
            </div>
        </div>
    </section>
  )
}

export default Contact;