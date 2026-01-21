import React from 'react';
import Header from '../components/Header'; 
import Footer from '../components/Footer'; 

const Home = () => {
  return (
    <>
      <Header />
      
      <main style={{ marginTop: '70px' }}>  {/* tránh bị header fixed che nội dung */}
        <div className="text-center">HomePage</div>
        <div className="home-container">
          <h1>Hello</h1>
          <p>Đinh Nhật Luân</p>
          
          <section className="welcome-section">
            <p>Chào mừng đến với Lusa Marketplace!</p>

          </section>
        </div>
      </main>

      <Footer />
    </>
  );
};

export default Home;