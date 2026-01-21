import React from 'react'
import Header from '../components/Header'; 
import Footer from '../components/Footer'; 

const About = () => {
  return (
    <>
      <Header />
      
      <main style={{ marginTop: '70px' }}> 
        <div className="home-container">
          <h1>Hello</h1>
          <p>Đinh Nhật Luân</p>
          
          <section className="welcome-section">
            <p>Đây là trang About</p>
          </section>
        </div>
      </main>
      <Footer />
    </>
  )
}

export default About
