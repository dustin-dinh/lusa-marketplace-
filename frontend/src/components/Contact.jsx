import React from 'react'
import Header from '../components/Header'; 
import Footer from '../components/Footer'; 

const Contact = () => {
  return (
    <>
      <Header />
      
      <main style={{ marginTop: '70px' }}>  {/* tránh bị header fixed che nội dung */}
        <div className="home-container">
          <h1>Hello</h1>
          <p>Đinh Nhật Luân</p>
          
          <section className="welcome-section">
            <p>Đây là trang Contact</p>

          </section>
        </div>
      </main>
      <Footer />
    </>
  )
}

export default Contact
