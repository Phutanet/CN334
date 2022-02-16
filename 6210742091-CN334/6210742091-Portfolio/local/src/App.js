import './App.css';
import React, {useState} from 'react';

function App() {
  let [hello, setHello] = useState('')

  const onClickButton = () => {
    fetch('/api/hello')
    .then(response => response.json())
    .then(result => setHello(result.name))
    .catch(err => alert(err))
  }
  return (
    <div>
      <button onClick={onClickButton}>Click Me</button>
      <div>{hello}</div>
    </div>

  );
}

export default App;
