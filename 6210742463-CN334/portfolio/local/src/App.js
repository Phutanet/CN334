<<<<<<< HEAD
<<<<<<< HEAD
import './App.css';
import React, {useState} from 'react';
=======
import React from 'react';
import Navbar from './components/navbar/Navbar';
import { BrowserRouter as Router, Switch, Route, Link } from 'react-router-dom';
>>>>>>> parent of 189e93f (add login page and navbar responsive)
=======
import './App.css';
import React, {useState} from 'react';
>>>>>>> parent of a04011d (Revert "Merge branch 'main' of https://github.com/Phutanet/CN334")

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
<<<<<<< HEAD
=======
>>>>>>> parent of a04011d (Revert "Merge branch 'main' of https://github.com/Phutanet/CN334")
    <div>
      <button  onClick={onClickHello}>แสดงสวัสดี</button>
      <div>{hello}</div>
    </div>
  );
<<<<<<< HEAD
=======
    <>
    <Navbar />
    </>
  )
>>>>>>> parent of 189e93f (add login page and navbar responsive)
=======
>>>>>>> parent of a04011d (Revert "Merge branch 'main' of https://github.com/Phutanet/CN334")
}

export default App;
