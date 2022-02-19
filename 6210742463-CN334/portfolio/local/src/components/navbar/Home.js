import React, { useContext } from 'react'

import Header from '../header/Header'
import Navbar from './Navbar'
import Blog from '../blog/Blog'
import About from '../about/About'
import Footer from '../footer/Footer'
import Contact from '../contact/Contact'
import DataContext from '../DataContext'

const Home = () => {

  const loginAuth = useContext(DataContext)

  if (loginAuth === 'Logout') {
    return (
      <div>
        <Navbar />
        <Header />
        <Blog />
        <About />
        <Contact />
        <Footer />
      </div>
    )
  } else {
    return (
      <div>
        <Navbar />
        <Header />
        <Blog />
        <About />
        <Contact />
        <Footer />
      </div>
    )
  }
}

export default Home;