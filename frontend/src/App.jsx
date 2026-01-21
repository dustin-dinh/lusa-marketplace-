import { BrowserRouter, Routes, Route } from 'react-router-dom';
import Home from './components/Home';  
import About from './components/About';  
import Contact from './components/Contact';  

function App() {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/home" element={<Home />} />
        <Route path="/" element={<Home />} />  {/* optional: root redirect tới home */}
        
        {/* Các page KHÔNG có Header (ví dụ) */}
        <Route path="/about" element={<About/>} />
        <Route path="/contact" element={<Contact/>} />
        
        {/* Fallback */}
        <Route path="*" element={<div>404 - Not Found</div>} />
      </Routes>
    </BrowserRouter>
  );
}

export default App;