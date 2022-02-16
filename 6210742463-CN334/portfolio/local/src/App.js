import React from 'react';
import Navbar from './components/navbar/Navbar';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
import Login from './components/admin-account/Login';
import CreateAccount from './components/admin-account/CreateAccount';


function App() {
  return (
    <>
    <Navbar />
    <CreateAccount />
    </>
  )
}

export default App;
