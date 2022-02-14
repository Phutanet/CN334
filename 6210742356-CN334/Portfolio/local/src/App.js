import logo from './logo.svg';
import './App.css';
import {useState, useContext} from 'react';

function App() {
  const [name, setitem] = useState('');
  
  
  const api = async () => {
    await fetch(' http://localhost:8000/api/hello')
      .then((res) => res.json())
      .then(result => setitem(result.name))
      .catch(err => alert(err))
    
      };
  return (
    <div>
      <button onClick={api}> Show api</button>
      <div>{name}</div>
    </div>

    
  );
}

export default App;
