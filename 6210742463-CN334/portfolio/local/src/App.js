<<<<<<< HEAD
import './App.css';
import React, {useState} from 'react';
=======
import React from 'react';
import Navbar from './components/navbar/Navbar';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
>>>>>>> parent of 189e93f (add login page and navbar responsive)

function App() {

  let [hello, setHello] = useState('')

  const onClickHello = () => {
    fetch('/api/hello')
    .then(response => response.json())
    .then(result => setHello(result.name))
    .catch(err => alert(err))
    }

  return (
<<<<<<< HEAD
    <div>
      <button  onClick={onClickHello}>แสดงสวัสดี</button>
      <div>{hello}</div>
    </div>
  );
=======
    <>
    <Navbar />
    </>
  )
>>>>>>> parent of 189e93f (add login page and navbar responsive)
}

export default App;
