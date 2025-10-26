<?php include 'functions.php'; include 'data.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>FINAL</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <!-- HEADER -->

    <header class="header">
        <div class="container headerContainer">
            <div class="headerLogo">
            <a href="#home">Lile Bezhuashvili</a>
            </div>

            <div class="hamburger" id="hamburger" role="button" aria-label="Toggle menu" tabindex="0">
      <span></span>
      <span></span>
      <span></span>
    </div>
                <nav class="headerNav" id="navMenu">
                    <a href="#home" class="navLink">HOME</a>
                    <a href="#portfolio" class="navLink">PORTFOLIO</a>
                    <a href="#about" class="navLink">ABOUT</a>
                    <a href="#contact" class="butn">SAY HELLO</a>
                </nav>
        </div>
    </header> 
    <div class="backdrop"></div>

    <!-- HERO SECTION -->

    <!-- <section class="hero" id="home">
        <div class="container heroContainer">
            <div class="heroText">
                <p class="heroSmallText">AVAILABLE FOR FREELANCE</p>
                <h1 class="heroTitle">
                    HEY, I AM LILE<br>
                    I'M SOMETHING OF A DEVELOPER MYSELF
                </h1>
                <div class="heroSkills">
                    <span class="skill">Design</span>
                    <span class="dot"></span>
                    <span class="skill">Development</span>
                    <span class="dot"></span>
                    <span class="skill">Webflow</span>
                </div>
                <a href="#portfolio" class="btn">See My Portfolio</a>
            </div>
        </div>
    </section> -->

    <?php
    heroSection([$hero]);
    aboutSection([$about]);
    portfolioSection([$portfolio]);
    servicesSection([$service]);
    ?>
    <!-- ABOUT SECTION -->


    <!-- <section class="about" id="about">
        <div class="aboutContainer">
            <div class="aboutInfo">
            <h2 class="aboutName">LILE BEZHUASHVILI</h2>
            <h3 class="aboutPosition">WANNABE DEVELOPER</h3>
            </div>
            <div class="aboutContent">
                <p class="aboutDescription">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reiciendis sunt,
                    sint at enim commodi repudiandae assumenda nisi labore repellendus nam
                    magnam nemo voluptatem est, sequi earum voluptate consectetur impedit quidem?
                </p>
                <div class="aboutDetails">
                    <p><strong>LOCATION</strong>Tbilisi</p>
                    <p><strong>EXPERIENCE</strong>0+ Years</p>
                    <p><strong>DATE OF BIRTH</strong>4 May 2001</p>
                </div>
            </div>
        </div>
    </section>


    <div class="aboutStats">
        <div class="stat">
            <h3>0+</h3>
            <p>Years of Experience</p>
        </div>
        <div class="stat">
            <h3>0+</h3>
            <p>Projects Completed</p>
        </div>
        <div class="stat">
            <h3>0+</h3>
            <p>Happy Clients</p>
        </div>
    </div> -->



    <!-- PORTFOLIO SECTION -->
<!-- 
    <section class="portfolio" id="portfolio">
  <div class="container portfolioContainer">
    <h2 class="sectionTitle">My <span>Portfolio</span></h2>
    <div class="portfolioCards">

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url('');"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">Design · Development</p>
          <h3 class="portfolioTitle">Imaginary Project one</h3>
          <p class="portfolioDescription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta deserunt error libero ea quae? Nobis incidunt natus perspiciatis, cumque unde itaque dolor, tempora debitis adipisci asperiores, quibusdam numquam soluta nam!
          </p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url('images/habit.jpg');"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">Design</p>
          <h3 class="portfolioTitle">Imaginary Project Two</h3>
          <p class="portfolioDescription">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quae minima temporibus ut illum explicabo possimus aliquam voluptatum dolorem modi delectus sunt ipsa vero, debitis iure quis, cupiditate perspiciatis neque quasi!
          </p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url('images/history.jpg');"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">Development</p>
          <h3 class="portfolioTitle">Imaginary Project Three</h3>
          <p class="portfolioDescription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt expedita reprehenderit placeat soluta velit. Culpa magni odit at ipsam. Aperiam quo voluptate consectetur veniam cum quos exercitationem quia minus laudantium.
          </p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url('images/photo.jpg');"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">Design</p>
          <h3 class="portfolioTitle">Imaginary Project Four</h3>
          <p class="portfolioDescription">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sit adipisci, ea eum neque tempore iste sint distinctio quod temporibus cum tenetur eligendi maiores dolorum amet quibusdam consequatur officiis veniam accusantium.
          </p>
        </div>
      </div>

      <div class="portfolioCard">
        <div class="portfolioImage" style="background-image: url('images/bike.jpg');"></div>
        <div class="portfolioText">
          <p class="portfolioCategory">Design · Development</p>
          <h3 class="portfolioTitle">Imaginary Project Five</h3>
          <p class="portfolioDescription">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore corporis eius ipsa perspiciatis autem quod voluptatum nihil at, nemo minima veritatis odio tenetur quibusdam quia, magnam, harum excepturi quidem reprehenderit.
          </p>
        </div>
      </div>

    </div>
  </div>
</section>


    SERVICES SECTION -->

    <!-- <section class="services" id="services">
        <div class="container servicesContainer">
            <h2 class="serviceTitle">My <span>Services</span></h2>
            <div class="servicesGrid">
                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Branding Icon">
                    </div>
                    <div class="serviceNumber">01</div>
                    <h3 class="serviceTitle">Branding</h3>
                    <p class="serviceDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                    </p>
                </div>

                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Design Icon">
                    </div>
                    <div class="serviceNumber">02</div>
                    <h3 class="serviceTitle">Design</h3>
                    <p class="serviceDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                    </p>
                </div>

                <div class="service">
                    <div class="serviceIcon">
                    <img src="#" alt="Development Icon">
                    </div>
                    <div class="serviceNumber">03</div>
                    <h3 class="serviceTitle">Development</h3>
                    <p class="serviceDescription">
                    Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean commodo ligula eget dolor.
                    </p>
                </div>
            </div>
        </div>
</section> -->


<!--CONTACT SECTION-->

<section class="contact" id="contact">
  <div class="container contactContainer">

    <!-- Section Title -->
    <h2 class="sectionTitle">Contact <span>Me</span></h2>

    <div class="contactContent">

      <div class="contactInfo">
        <h3 class="contactSubtitle">Connect with me</h3>
        <div class="social__links">
          <a href="#" aria-label="LinkedIn" class="social__link"><img src="images/icon-linkedin.svg" alt="LinkedIn"></a>
          <a href="#" aria-label="Behance" class="social__link"><img src="images/icon-behance.svg" alt="Behance"></a>
          <a href="#" aria-label="Instagram" class="social__link"><img src="images/icon-instagram.svg" alt="Instagram"></a>
        </div>

        <!-- Contact Details -->
        <div class="contactDetails">
            <div class="contactDetail">
                <p>EMAIL:</p>
                <p>chemiimeili@posta.ge</p>
            </div>
            <div>
                <p>PHONE:</p>
                <p>123456789</p>
            </div>
             <a href="Resume.pdf" class="btn resumeBtn" download>Download Resume</a>
        </div>
      </div>

  
       


      <!--  Contact Form -->
      <div class="contactForm">
        <form action="contact.php" method="POST">
          <div class="formGroup">
            <label for="name"> NAME
                <input id="name" type="text" name="name" placeholder="Name" required>
            </label>
            <label for="email">EMAIL
            <input id="email" type="email" name="email" placeholder="Email" required>
            </label>
          </div>

          <div class="formGroup">
            <label for="message">MESSAGE
            <textarea id="message" name="message" placeholder="Message" required></textarea>
            </label>
          </div>

          <button type="submit" class="bton">Send Message</button>
        </form>
      </div>

    </div>

  </div>
</section>


<!--FOOTER SECTION-->

<footer class="footer">
  <div class="container footerContainer">

    
    <p class="footerText">© 2025 Lile Bezhuashvili</p>

    
    <div class="footerSocials">
      <a href="#" aria-label="LinkedIn" class="socialLink">
        <img src="images/icon-linkedin.svg" alt="LinkedIn">
      </a>
      <a href="#" aria-label="Behance" class="socialLink">
        <img src="images/icon-behance.svg" alt="Behance">
      </a>
      <a href="#" aria-label="GitHub" class="socialLink">
        <img src="images/icon-github.svg" alt="GitHub">
      </a>
      <a href="#" aria-label="Instagram" class="socialLink">
        <img src="images/icon-instagram.svg" alt="Instagram">
      </a>
    </div>

  </div>
</footer>





<!--es chats davawerine ar ganmsajot.. amdeni rato damiwera arvici amdenic ar mitxovia-->

<script>
  const hamburger = document.getElementById('hamburger');
  const navMenu = document.getElementById('navMenu');
  const backdrop = document.querySelector('.backdrop');

  function toggleNav() {
    const isActive = !navMenu.classList.contains('active');
    hamburger.classList.toggle('active');
    navMenu.classList.toggle('active');
    if (backdrop) backdrop.classList.toggle('active');
    hamburger.setAttribute('aria-expanded', String(isActive));
  }

  if (hamburger && navMenu) {
    hamburger.addEventListener('click', toggleNav);
  }
  if (backdrop) {
    backdrop.addEventListener('click', toggleNav);
  }
  // handle in-page links: smooth scroll with fixed-header offset + close menu
  function scrollToWithOffset(el) {
    const header = document.querySelector('.header');
    const extra = 10; // small breathing room
    const headerH = header ? header.offsetHeight : 0;
    const y = window.pageYOffset + el.getBoundingClientRect().top - (headerH + extra);
    window.scrollTo({ top: y, behavior: 'smooth' });
  }

  if (navMenu) {
    navMenu.querySelectorAll('a[href^="#"]').forEach(a => a.addEventListener('click', (e) => {
      const href = a.getAttribute('href');
      const id = href ? href.slice(1) : '';
      const target = id ? document.getElementById(id) : null;
      if (target) {
        e.preventDefault();
        const wasOpen = navMenu.classList.contains('active');
        if (wasOpen) toggleNav();
        // wait for sidebar slide-out (CSS transition ~300ms), then scroll
        const delay = wasOpen ? 350 : 0;
        setTimeout(() => scrollToWithOffset(target), delay);
        try { history.replaceState(null, '', '#' + id); } catch(_) {}
      }
    }));
  }
</script>






</body>
</html>
