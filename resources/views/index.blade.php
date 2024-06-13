<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Irghi Maulaya Kurniawan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
  <script>
    const hamburger = document.querySelector('.header .nav-bar .nav-list .hamburger');
const mobile_menu = document.querySelector('.header .nav-bar .nav-list ul');
const menu_item = document.querySelectorAll('.header .nav-bar .nav-list ul li a');
const header = document.querySelector('.header.container');

hamburger.addEventListener('click', () => {
	hamburger.classList.toggle('active');
	mobile_menu.classList.toggle('active');
});

document.addEventListener('scroll', () => {
	var scroll_position = window.scrollY;
	if (scroll_position > 250) {
		header.style.backgroundColor = '#29323c';
	} else {
		header.style.backgroundColor = 'transparent';
	}
});

menu_item.forEach((item) => {
	item.addEventListener('click', () => {
		hamburger.classList.toggle('active');
		mobile_menu.classList.toggle('active');
	});
});
  </script>
    <section id="header">
        <div class="header container">
          <div class="nav-bar">
            <div class="brand">
              <a href="#hero">
                <h1><span>Ir</span>ghi<span>.G</span>T</h1>
              </a>
            </div>
            <div class="nav-list">
              <div class="hamburger">
                <div class="bar"></div>
              </div>
              <ul>
                <li><a href="#hero" data-after="Home">Home</a></li>
                <li><a href="#services" data-after="Service">Services</a></li>
                <li><a href="#projects" data-after="Projects">Projects</a></li>
                <li><a href="#about" data-after="About">About</a></li>
                <li><a href="#contact" data-after="Contact">Contact</a></li>
              </ul>
            </div>
          </div>
        </div>
      </section>
      <!-- End Header -->
      <section id="hero">
        <div class="hero container">
          <div>
            <h1>Perkenalkan <span></span></h1>
            <h1>Nama Saya<span></span></h1>
            <h1>Irghi <span></span></h1>
            <a href="#projects" type="button" class="cta">Portfolio</a>
          </div>
        </div>
      </section>
      <!-- End Hero Section  -->
       <!-- Service Section -->
  <section id="services">
    <div class="services container">
      <div class="service-top">
        <h1 class="section-title">Serv<span>i</span>ces</h1>
      </div>
      <div class="service-bottom">
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Web Design</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Front-end Development</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
        </div>
        <div class="service-item">
          <div class="icon"><img src="https://img.icons8.com/bubbles/100/000000/services.png" /></div>
          <h2>Back-End Development</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Corporis debitis rerum, magni voluptatem sed
            architecto placeat beatae tenetur officia quod</p>
      </div>
    </div>
  </section>
  <!-- End Service Section -->
 <!-- Projects Section -->
 <section id="projects">
    <div class="projects container">
      <div class="projects-header">
        <h1 class="section-title">Recent <span>Projects</span></h1>
      </div>
      <div class="all-projects">
        <div class="project-item">
          <div class="project-info">
            <h1>Project 1</h1>
            <h2>Dasar Web</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="Screenshot 2023-11-14 150323.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 2</h1>
            <h2>Front-end Pemula</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="Screenshot 2023-12-27 193841.png" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 3</h1>
            <h2>Cooming soon</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 4</h1>
            <h2>Cooming soon</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="" alt="img">
          </div>
        </div>
        <div class="project-item">
          <div class="project-info">
            <h1>Project 5</h1>
            <h2>Cooming soon</h2>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ad, iusto cupiditate voluptatum impedit unde
              rem ipsa distinctio illum quae mollitia ut, accusantium eius odio ducimus illo neque atque libero non sunt
              harum? Ipsum repellat animi, fugit architecto voluptatum odit et!</p>
          </div>
          <div class="project-img">
            <img src="" alt="img">
          </div>
        </div>
      </div>
    </div>
  </section>
  
  <!-- About Section -->
  <section id="about">
    <div class="about container">
      <div class="col-left">
        <div class="about-img">
          <img src="NTMG-333.JPG" alt="img">
        </div>
      </div>
      <div class="col-right">
        <h1 class="section-title">Tentang <span>Saya</span></h1>
        <h2>Front/Back-End Developer</h2>
        <p>Saya lahir dibogor pada tahun 2008 bulan Mei,tanggal 8</p>
        <a href="#" class="cta">Download Resume</a>
      </div>
    </div>
  </section>
  <!-- End About Section -->
   <!-- Contact Section -->
   <section id="contact">
    <div class="contact container">
      <div>
        <h1 class="section-title">Kontak <span>Saya</span></h1>
      </div>
      <div class="contact-items">
        <div class="contact-item">
          <div class="icon"><img src="unnamed.webp" /></div>
          <div class="contact-info">
            <h1>Phone</h1>
            <h2>+62 8*8 9*** *000</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="IMG_6611.jpg" /></div>
          <div class="contact-info">
            <h1>Email</h1>
            <h2>irghyganteng20@gmail.com</h2>
            <h2>irghimaulayakurniawan@smkwikrama.sch.id</h2>
          </div>
        </div>
        <div class="contact-item">
          <div class="icon"><img src="download.png" /></div>
          <div class="contact-info">
            <h1>Address</h1>
            <h2>Cibedug,Ciawi,Bogor,Jawa Barat,Indonesia</h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Contact Section -->
<!-- Footer -->
<section id="footer">
    <div class="footer container">
      <div class="brand">
        <h1><span>Ir</span>ghi<span>K</span>urniawan</h1>
      </div>
      <h2>Your Complete Web Solution</h2>
      <div class="social-icon">
        <div class="social-item">
          <a href="#"><img src="Instagram_logo_2022.svg.webp" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="GitHub_Invertocat_Logo.svg.png" /></a>
        </div>
        <div class="social-item">
          <a href="#"><img src="download.jpeg" /></a>
        </div>
      </div>
      <p>Copyright © 2k24 Irghi. All rights reserved</p>
    </div>
  </section>
  <!-- End Footer -->
</body>
</html>