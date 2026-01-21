import React from 'react';
import { NavLink} from 'react-router-dom'; 

const Header = () => {
  return (
    <header className="header">
      <div className="container">
        <div className="logo">
          <NavLink to="/home">Lusa</NavLink>
        </div>
        <nav className="nav">
          <ul className="nav-list">
            <li>
              <NavLink to="/home" className="nav-link">
                Home 
              </NavLink>
            </li>
            <li>
              <NavLink to="/about" className="nav-link">
                About
              </NavLink>
            </li>
            <li>
              <NavLink to="/contact" className="nav-link">
                Contact
              </NavLink>
            </li>
          </ul>
        </nav>
      </div>
    </header>
  );
};

export default Header;