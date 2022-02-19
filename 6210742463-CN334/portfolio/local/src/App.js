import React from 'react'
import { BrowserRouter as Router, Routes, Route } from 'react-router-dom'

import Home from './components/navbar/Home'
import Create from './components/project/Create'

const App = () => {

  return (
    <Router>
      <Routes>
        <Route path='/' exact element={<Home />} />
        <Route path='/create' element={<Create />} />
      </Routes>
    </Router>
  )
}

export default App;