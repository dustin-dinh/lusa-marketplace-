import React from 'react';
import { NavLink } from 'react-router-dom';

const Footer = () => {
  return (
    <footer className="footer">
      <div className="container">
        {/* 3 cột chính */}
        <div className="footer-columns">
          {/* Cột 1: Company */}
          <div className="footer-column">
            <h3 className="footer-title">Lusa Marketplace</h3>
            <ul className="footer-list">
              <li><NavLink to="/about">Về chúng tôi</NavLink></li>
              <li><NavLink to="/contact">Liên hệ</NavLink></li>
              <li><NavLink to="/terms">Điều khoản dịch vụ</NavLink></li>
            </ul>
          </div>

          {/* Cột 2: Hỗ trợ */}
          <div className="footer-column">
            <h3 className="footer-title">Hỗ trợ</h3>
            <ul className="footer-list">
              <li><NavLink to="/faq">FAQ</NavLink></li>
              <li><NavLink to="/shipping">Chính sách vận chuyển</NavLink></li>
              <li><NavLink to="/return">Chính sách đổi trả</NavLink></li>
            </ul>
          </div>

          {/* Cột 3: Theo dõi chúng tôi */}
          <div className="footer-column">
            <h3 className="footer-title">Theo dõi chúng tôi</h3>
            <div className="social-links">
              <a href="https://facebook.com" target="_blank" rel="noopener noreferrer" className="social-link">
                Facebook
              </a>
              <a href="https://instagram.com" target="_blank" rel="noopener noreferrer" className="social-link">
                Instagram
              </a>
              <a href="https://tiktok.com" target="_blank" rel="noopener noreferrer" className="social-link">
                TikTok
              </a>
            </div>
          </div>
        </div>

        {/* Copyright */}
        <div className="footer-bottom">
          <p>&copy; 2026 Lusa Marketplace. All rights reserved. Made with ❤️ by Đinh Nhật Luân</p>
        </div>
      </div>
    </footer>
  );
};

export default Footer;