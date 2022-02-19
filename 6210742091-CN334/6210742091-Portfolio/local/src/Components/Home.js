import React from 'react'
import './Home.css'
import profile from '../Image/IMG_9573.jpg'

const Home = () => {

  return (
    <section className='home-section'>
        <div className='home-main'>
            <img className='profile-img' src={profile}/>
            <div className='about-text'>
                <h3>Hello, my name is</h3>
                <h1>Phutanet Phuangtanasan</h1>
                <h2>I'am a Software Engineer.</h2>
                <p>Studying in the third year of a Software Engineering from Thammasat university. 
                Have a good command of English communication. High responsibility and patience, 
                seeking a job position of Software Engineer / Developer to further my professional experience 
                and utilize my skills and knowledge to greatly benefit to your company's objectives.</p>
            </div>
        </div>
    </section>
  )
}

export default Home;