import React from 'react';
import Navbar from './components/navbar/Navbar';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
import Login from './components/admin-account/Login';


function App() {
  return (
    <>
    <Login />
    </>
  )
}

export default App;
