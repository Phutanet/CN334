import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'

import Navbar from './components/navbar/Navbar'
import Header from './components/header/Header'
import Blog from './components/blog/Blog'
import About from './components/about/About'
import Contact from './components/contact/Contact'
import Footer from './components/footer/Footer'

const App = () => {

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

export default App;