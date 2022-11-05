<?php

function fct_bdd(){ 
  try{
      $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
      $bdd = new PDO('mysql:host=localhost;dbname=portfolio','root','',$pdo_options);
  }
  catch(Exception $e){
      die('Erruer : '.$e->getMessage());
  }
  return $bdd;   
  };
  
  $bdd=fct_bdd();

	if($bdd){		
				$testimonials = $bdd->query('SELECT * from testimonials');	
	}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yassine Ouhadi</title>

  <!--
    - favicon
  -->
  <link rel="shortcut icon" href="./assets/images/icon.png" type="image/x-icon">

  <!--
    - custom css link
  -->
  <link rel="stylesheet" href="./assets/css/style.css">

  <!--
    - google font link
  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
<style>


:root {
  --bg-gradient-onyx: linear-gradient(
    to bottom right, 
    hsl(240, 1%, 25%) 3%, 
    hsl(0, 0%, 19%) 97%
  );
  --bg-gradient-jet: linear-gradient(
    to bottom right, 
    hsla(240, 1%, 18%, 0.251) 0%, 
    hsla(240, 2%, 11%, 0) 100%
  ), hsl(240, 2%, 13%);
  --bg-gradient-yellow-1: linear-gradient(
    to bottom right, 
    hsl(45, 100%, 71%) 0%, 
    hsla(36, 100%, 69%, 0) 50%
  );
  --bg-gradient-yellow-2: linear-gradient(
    135deg, 
    hsla(45, 100%, 71%, 0.251) 0%, 
    hsla(35, 100%, 68%, 0) 59.86%
  ), hsl(240, 2%, 13%);
  --border-gradient-onyx: linear-gradient(
    to bottom right, 
    hsl(0, 0%, 25%) 0%, 
    hsla(0, 0%, 25%, 0) 50%
  );
  --text-gradient-yellow: linear-gradient(
    to right, 
    #89D4CF,
    #734AE8
  );
  --text-gradient-blue: linear-gradient(
    to right, 
    #9E768F,
    #9FA4C4
      );

      --text-gradient-bl: linear-gradient(
    to right, 
    #647DEE,
    #7F53AC
      );    

      --grey-l-1: #F5F5F5;
	--grey: #EEE;
	--grey-d-1: #888;
  
--jet:#f2f2f2;
--onyx: blueviolet;
--eerie-black-1: blueviolet;
--eerie-black-2: hsl(240, 2%, 12%);
--smoky-black: blueviolet;
--white-1: hsl(0, 0%, 100%);
--white-2: black;
--orange-yellow-crayola: blueviolet;
--vegas-gold: blueviolet;
--light-gray:gray;
--light-gray-70: hsla(0, 0%, 84%, 0.7);
--bittersweet-shimmer: blueviolet;
}
::-moz-selection { /* Code for Firefox */
  color: white;
  background: blueviolet;
}

::selection {
  color: white;
  background: blueviolet;
}

body::-webkit-scrollbar { width: 20px; }

body::-webkit-scrollbar-track { background:transparent; }

body::-webkit-scrollbar-thumb {
  border: 5px solid  white;
  background-color: blueviolet;
  border-radius: 20px;
  box-shadow: none;
}

body::-webkit-scrollbar-thumb:hover { background:var(--grey-d-1); }

body::-webkit-scrollbar-button { height: 60px; }


.avatar-box {
  background: white;
  border-radius: 20px;
}

body {
  /*background: linear-gradient(90deg, var(--grey-l-1) 31px, transparent 1px) 50%, linear-gradient(180deg, var(--grey-l-1) 31px, var(--grey-d-1) 1px) 50%;
	background-size: 32px 32px;*/
  background-color:white;
}

.sidebar,article{
  background: white;
  border:none;
  box-shadow: none;
  outline: none;
}
.sidebar{
  min-width: 325px;
}
article{
  border:none;
}

.article-title::after {
  background: var(--text-gradient-blue);
  border-radius: 3px;
}

.service-item {
  position: relative;
  background: white;
  padding: 20px;
  border-radius: 14px;
  box-shadow: none;
  z-index: 1;
}

.service-item::before {
  content: "";
  position: absolute;
  inset: 1px;
  background:white;
  border-radius: inherit;
  z-index: -1;
}

.service-item-text {
  color: black;
  font-size: var(--fs-6);
  font-weight: var(--fw-3);
  line-height: 1.6;
}

.navbar {
  background-color:white;
  backdrop-filter:none;
  border: none;
  border-radius: 12px 12px 0 0;
  box-shadow: none;
  z-index: 5;
}

/**
 * skills 
 */
 .content-card {
  position: relative;
  background: var(--border-gradient-onyx);
  padding: 15px;
  padding-top: 45px;
  border-radius: 0px;
  box-shadow: none;
  cursor: pointer;
  z-index: 1;
}
 .content-card::before {
  content: "";
  position: absolute;
  inset: 0px;
  
  background: white;
  border-radius:0px;
  z-index: -1;
}




.has-scrollbar::-webkit-scrollbar-track {
  background: #f2f2f2;
  border-radius: 5px;
}

.has-scrollbar::-webkit-scrollbar-thumb {
  background: var(--text-gradient-blue);
  border-radius: 5px;
}


.separator {
  width: 100%;
  height: 1px;
  background: var(--text-gradient-blue);
  margin: 16px 0;
}

.info_more-btn {
  color: white;
  background: blueviolet;
  box-shadow: none;
}

.info_more-btn::before {
  inset: 1px;
  border-radius: inherit;
  background: blueviolet;
}

.info_more-btn:hover,
.info_more-btn:focus { background: blueviolet; }

.info_more-btn:hover::before,
.info_more-btn:focus::before { background:blueviolet; }

.testimonials-avatar-box {
  background: blueviolet;
  border-radius: 14px;
  box-shadow: var(--shadow-1);
}

.testimonials-item-title { margin-bottom: 7px; }

.testimonials-text {
  color: var(--light-gray);
}

.timeline-item:not(:last-child)::before {
  content: "";
  position: absolute;
  top: -25px;
  left: -30px;
  width: 1px;
  height: calc(100% + 50px);
  background: var(--jet);
}


.form-btn {
  background: white;
  color: var(--orange-yellow-crayola);
}

.form-btn::before {
  background:blueviolet;
}

.form-btn:hover { background: blueviolet; }

.form-btn:hover::before { background: blueviolet; }


.form-btn:disabled:hover { background: blueviolet; }

.form-btn:disabled:hover::before { background: blueviolet; }


.blog-item-title {
  color: white;
}

.blog-post-item > a:hover .blog-item-title { color:#dfd0d0; }

.blog-text {
  color: #f2f2f2;
}

.testimonials-modal {
  background: white;
}
.modal-close-btn {
  background: white;
  color: blueviolet;
}
.modal-avatar-box {
  background:blueviolet;
}


.mapbox iframe {
  width: 100%;
  height: 100%;
  border: none;
  filter:none;
}

.project-category {
  color: gray;
}

.comments li{
  height: auto;
  padding: 25px;
}

.filter-select {
  background:blueviolet;
  color: white;
}

</style>
<body>

  <!--
    - #MAIN
  -->

  <main> 

    <!--
      - #SIDEBAR
    -->

    <aside class="sidebar" data-sidebar>

      <div class="sidebar-info">

        <figure class="avatar-box">
          <img src="./assets/images/ana.png" alt="Richard hanrick" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Richard hanrick" style="color:black;">Yassine Ouhadi</h1>

          <p class="title">Software Engineering student at ENSIAS
          </p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
          <span>Show Contacts</span>

          <ion-icon name="chevron-down"></ion-icon>
        </button>

      </div>

      <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

          <li class="contact-item">

            <div class="icon-box" style="color:white;">
              <ion-icon name="mail-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title" style="color:black;">Email</p>

              <a href="mailto:yassinouhadi@gmail.com" class="contact-link" style="color:black;">yassinouhadi@gmail.com</a>
            </div>

          </li>

          <li class="contact-item">

            <div class="icon-box" style="color:white;">
              <ion-icon name="phone-portrait-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title" style="color:black;">Phone</p>

              <a href="tel:+212624131100" class="contact-link" style="color:black;">+212 0624131100</a>
            </div>

          </li>
           <!--
          <li class="contact-item">

            <div class="icon-box" style="color:white;">
              <ion-icon name="location-outline"></ion-icon>
            </div>

            <div class="contact-info">
              <p class="contact-title" style="color:black;">Location</p>

              <address style="color:black;">Madinat Al Irfane, Rabat, Morocco</address>
            </div>

          </li>
          -->
        </ul>

        <div class="separator"></div>

        <ul class="social-list">

          <li class="social-item">
            <a href="#" class="social-link" style="color:blueviolet;">
              <ion-icon name="logo-google"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://www.linkedin.com/in/yassine-ouhadi-3a8ab9235/" class="social-link" style="color:blueviolet;">
              <ion-icon name="logo-linkedin"></ion-icon>
            </a>
          </li>

          <li class="social-item">
            <a href="https://github.com/YassineOuhadi" class="social-link" style="color:blueviolet;">
              <ion-icon name="logo-github"></ion-icon>
            </a>
          </li>

        </ul>

      </div>

    </aside>





    <!--
      - #main-content
    -->

    <div class="main-content">

      <!--
        - #NAVBAR
      -->

      <nav class="navbar">

        <ul class="navbar-list">

          <li class="navbar-item">
            <button class="navbar-link  active" data-nav-link>About</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Resume</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Portfolio</button>
          </li>

          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Blog</button>
          </li>
           <!--
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Testimonials</button>
          </li>
          -->
          <li class="navbar-item">
            <button class="navbar-link" data-nav-link>Contact</button>
          </li>

        </ul>

      </nav>





      <!--
        - #ABOUT
      -->

      <article class="about  active" data-page="about">

        <header>
          <h2 class="h2 article-title" style="color:black;">About me</h2>
        </header>

        <section class="about-text" style="color:black;">
          <p>
          Hello I am very happy to visit my website, my name is Yassine Ouhadi and i am 20 years old.
        </p>
          <p>
            I am a software engineering student at the National School of Computer Science and Systems Analysis in Rabat, i am currently studying in my second year of engineering.
          </p>

        </section>


        <!--
          - service
        -->

        <section class="service">

          <h3 class="h3 service-title">What i'm doing</h3>

          <ul class="service-list">

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/UI.png
                " alt="design icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title" style="color:black;">User interface design
                </h4>

                <p class="service-item-text">
                  I have many experiences in User interface design.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/2210153.png" alt="Web development icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title" style="color:black;">Web development</h4>

                <p class="service-item-text">
                  Professional development of websites using different languages and frameworks
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/mobile-removebg-preview.png" alt="mobile app icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title" style="color:black;">Mobile App Development</h4>

                <p class="service-item-text">
                  I am a beginner in mobile app development.
                </p>
              </div>

            </li>

            <li class="service-item">

              <div class="service-icon-box">
                <img src="./assets/images/prbl.png" alt="camera icon" width="40">
              </div>

              <div class="service-content-box">
                <h4 class="h4 service-item-title" style="color:black;">Problem solving</h4>

                <p class="service-item-text">
                  I have the ability to identify problems, brainstorm ideas, analyze answers, and implement the best solutions.
                </p>
              </div>

            </li>

          </ul>

        </section>


         <div class="modal-container" data-modal-container>

          <div class="overlay" data-overlay></div>

          <section class="testimonials-modal">

            <button class="modal-close-btn" data-modal-close-btn>
              <ion-icon name="close-outline"></ion-icon>
            </button>

            <div class="modal-img-wrapper">
              <figure class="modal-avatar-box">
                <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
              </figure>

              <img src="./assets/images/icon-quote.svg" alt="quote icon">
            </div>

            <div class="modal-content">

              <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

              <time datetime="2021-06-14">14 June, 2021</time>

              <div data-modal-text>
                <p>
                  Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                  lot of experience
                  and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                  consectetur adipiscing
                  elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                </p>
              </div>

            </div>

          </section>

        </div>

        <div class="modal-container" data-modal-container>

<div class="overlay" data-overlay></div>

<section class="testimonials-modal">

  <button class="modal-close-btn" data-modal-close-btn>
    <ion-icon name="close-outline"></ion-icon>
  </button>

  <div class="modal-img-wrapper">
    <figure class="modal-avatar-box">
      <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="80" data-modal-img>
    </figure>

    <img src="./assets/images/icon-quote.svg" alt="quote icon">
  </div>

  <div class="modal-content">

    <h4 class="h3 modal-title" data-modal-title>Daniel lewis</h4>

    <time datetime="2021-06-14">14 June, 2021</time>

    <div data-modal-text>
      <p>
        Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
        lot of experience
        and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
        consectetur adipiscing
        elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
      </p>
    </div>

  </div>

</section>

</div>

        <!--
          - testimonials modal
        -->




        <!--
          - clients
        -->

        <!--<section class="clients">
          
          <h3 class="h3 clients-title">Gallery</h3>
           
          <ul class="clients-list has-scrollbar">
             
            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/um5.png" alt="client logo" style="width:100px;" >
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/ENSIAS.png" alt="client logo" style="width:65px;">
              </a>
            </li>
          
            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/jesa.jpg" alt="client logo" style="width:75px;">
              </a>
            </li>
            
            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-4-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-5-color.png" alt="client logo">
              </a>
            </li>

            <li class="clients-item">
              <a href="#">
                <img src="./assets/images/logo-6-color.png" alt="client logo">
              </a>
            </li>
          
          </ul>

        </section>-->

      </article>





      <!--
        - #RESUME
      -->

      <article class="resume" data-page="resume">

        <header>
          <h2 class="h2 article-title" style="color:black;">Resume</h2>
        </header>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline" style="color:white;"></ion-icon>
            </div>

            <h3 class="h3">Education</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Ibn tahir high school</h4>

              <span>June 13, 2019</span>

              <p class="timeline-text">
               I obtained my baccalaureate with honors in the field of mathematical sciences.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Faculty of science and technology of Er rachidia</h4>

              <span>August 27, 2019 — Juin 16, 2021</span>

              <p class="timeline-text">
              I continued my studies at the Faculty of Science and Technology in Er rachidia, after two years I obtained my depolome Deust in mathematics, physics and computer science.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">National School of Computer Science and Systems Analysis</h4>

              <span>July 12, 2021 — Present</span>

              <p class="timeline-text">
              I managed to continue my engineering cycle at National School of Computer Science and Systems Analysis in software engineering.
              </p>

            </li>

          </ol>

        </section>

        <section class="timeline">

          <div class="title-wrapper">
            <div class="icon-box">
              <ion-icon name="book-outline" style="color:white;"></ion-icon>
            </div>

            <h3 class="h3">Experience</h3>
          </div>

          <ol class="timeline-list">

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">First year internship</h4>

              <span>July 25, 2022 — August 30, 2022</span>

              <p class="timeline-text">
              The internship consists of programming a web application for hydraulic calculations.
              </p>

            </li>
            <!--
            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Art director</h4>

              <span>2013 — 2015</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>

            <li class="timeline-item">

              <h4 class="h4 timeline-item-title">Web designer</h4>

              <span>2010 — 2013</span>

              <p class="timeline-text">
                Nemo enims ipsam voluptatem, blanditiis praesentium voluptum delenit atque corrupti, quos dolores et
                quas molestias
                exceptur.
              </p>

            </li>
            -->
          </ol>

        </section>

        <section class="skill">

          <h3 class="h3 skills-title" style="color:black;">My skills</h3>

          <ul class="skills-list content-card">

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">HTML, CSS, Javascript & jQuery</h5>
                <data value="75">75%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 75%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">PHP & mySQL</h5>
                <data value="80">80%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 80%;"></div>
              </div>

            </li>
            
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Laravel</h5>
                <data value="60">60%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 60%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Flutter</h5>
                <data value="20">20%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 20%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">UI design</h5>
                <data value="40">40%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 40%;"></div>
              </div>

            </li>

            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Java</h5>
                <data value="90">90%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 90%;"></div>
              </div>

            </li>
 
            <li class="skills-item">

              <div class="title-wrapper">
                <h5 class="h5">Visual Basic for Applications</h5>
                <data value="70">70%</data>
              </div>

              <div class="skill-progress-bg">
                <div class="skill-progress-fill" style="width: 70%;"></div>
              </div>

            </li>

          </ul>

        </section>

      </article>





      <!--
        - #PORTFOLIO
      -->

      <article class="portfolio" data-page="portfolio">

        <header>
          <h2 class="h2 article-title">Portfolio</h2>
        </header>

        <section class="projects">

          <ul class="filter-list">

            <li class="filter-item">
              <button class="active" data-filter-btn>All</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>User Interface Design</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Web Development</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Mobile App Development</button>
            </li>

            <li class="filter-item">
              <button data-filter-btn>Problem Solving</button>
            </li>

          </ul>

          <div class="filter-select-box">

            <button class="filter-select" data-select>

              <div class="select-value" data-selecct-value>Select category</div>

              <div class="select-icon">
                <ion-icon name="chevron-down"></ion-icon>
              </div>

            </button>

            <ul class="select-list">

              <li class="select-item">
                <button data-select-item>All</button>
              </li>

              <li class="select-item">
                <button data-select-item>User Interface Design</button>
              </li>
              
              <li class="select-item">
                <button data-select-item>Web development</button>
              </li>

              <li class="select-item">
                <button data-select-item>Mobile App Development</button>
              </li>

              <li class="select-item">
                <button data-select-item>Problem Solving</button>
              </li>

            </ul>

          </div>

          <ul class="project-list">
          <!--
          <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/pfa.png" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Internship management web app</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
          <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/nv.jpg" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Web Music Player</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
            -->
            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/Screenshot from 2022-11-02 15-29-09.png" alt="finance" loading="lazy">
                </figure>

                <h3 class="project-title">Hydraulic calculator App</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
            <!--
            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-2.png" alt="orizon" loading="lazy">
                </figure>

                <h3 class="project-title">Orizon</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-3.jpg" alt="fundo" loading="lazy">
                </figure>

                <h3 class="project-title">Fundo</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-4.png" alt="brawlhalla" loading="lazy">
                </figure>

                <h3 class="project-title">Brawlhalla</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-5.png" alt="dsm." loading="lazy">
                </figure>

                <h3 class="project-title">DSM.</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web design">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-6.png" alt="metaspark" loading="lazy">
                </figure>

                <h3 class="project-title">MetaSpark</h3>

                <p class="project-category">Web design</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-7.png" alt="summary" loading="lazy">
                </figure>

                <h3 class="project-title">Summary</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="applications">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-8.jpg" alt="task manager" loading="lazy">
                </figure>

                <h3 class="project-title">Task Manager</h3>

                <p class="project-category">Applications</p>

              </a>
            </li>

            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./assets/images/project-9.png" alt="arrival" loading="lazy">
                </figure>

                <h3 class="project-title">Arrival</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
            -->
          </ul>

        </section>

      </article>





      <!--
        - #BLOG
      -->
      
      <article class="blog" data-page="blog">

        <header>
          <h2 class="h2 article-title">Blog</h2>
        </header>

        <section class="blog-posts">

          <ul class="blog-posts-list">
             <!--
            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-1.jpg" alt="Design conferences in 2022" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design conferences in 2022</h3>

                  <p class="blog-text">
                    Veritatis et quasi architecto beatae vitae dicta sunt, explicabo.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-2.jpg" alt="Best fonts every designer" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Best fonts every designer</h3>

                  <p class="blog-text">
                    Sed ut perspiciatis, nam libero tempore, cum soluta nobis est eligendi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-3.jpg" alt="Design digest #80" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #80</h3>

                  <p class="blog-text">
                    Excepteur sint occaecat cupidatat no proident, quis nostrum exercitationem ullam corporis suscipit.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-4.jpg" alt="UI interactions of the week" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">UI interactions of the week</h3>

                  <p class="blog-text">
                    Enim ad minim veniam, consectetur adipiscing elit, quis nostrud exercitation ullamco laboris nisi.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-5.jpg" alt="The forgotten art of spacing" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">The forgotten art of spacing</h3>

                  <p class="blog-text">
                    Maxime placeat, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                  </p>

                </div>

              </a>
            </li>

            <li class="blog-post-item">
              <a href="#">

                <figure class="blog-banner-box">
                  <img src="./assets/images/blog-6.jpg" alt="Design digest #79" loading="lazy">
                </figure>

                <div class="blog-content">

                  <div class="blog-meta">
                    <p class="blog-category">Design</p>

                    <span class="dot"></span>

                    <time datetime="2022-02-23">Fab 23, 2022</time>
                  </div>

                  <h3 class="h3 blog-item-title">Design digest #79</h3>

                  <p class="blog-text">
                    Optio cumque nihil impedit uo minus quod maxime placeat, velit esse cillum.
                  </p>

                </div>

              </a>
            </li>
            -->
          </ul>

        </section>

      </article>

      
      <!--
      <article class="testimonials" data-page="testimonials">

        <header>
          <h2 class="h2 article-title">Testimonials</h2>
        </header>


       

        <section class="testimonials">
           
          <ul class="comments">

          <?php foreach($testimonials as $row) {?>
            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title><?php echo $row['name'];?></h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                  <?php echo $row['comment'];?>
                  </p>
                </div>

              </div>
            </li>

          <?php ;}; ?>
        

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-1.png" alt="Daniel lewis" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Daniel lewis</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-2.png" alt="Jessica miller" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Jessica miller</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-3.png" alt="Emily evans" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Emily evans</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

            <li class="testimonials-item">
              <div class="content-card" data-testimonials-item>

                <figure class="testimonials-avatar-box">
                  <img src="./assets/images/avatar-4.png" alt="Henry william" width="60" data-testimonials-avatar>
                </figure>

                <h4 class="h4 testimonials-item-title" data-testimonials-title>Henry william</h4>

                <div class="testimonials-text" data-testimonials-text>
                  <p>
                    Richard was hired to create a corporate identity. We were very pleased with the work done. She has a
                    lot of experience
                    and is very concerned about the needs of client. Lorem ipsum dolor sit amet, ullamcous cididt
                    consectetur adipiscing
                    elit, seds do et eiusmod tempor incididunt ut laborels dolore magnarels alia.
                  </p>
                </div>

              </div>
            </li>

          </ul>
          
        </section>
        
      </article>
       -->

      <!--
        - #CONTACT
      -->

      <article class="contact" data-page="contact">

        <header>
          <h2 class="h2 article-title">Contact</h2>
        </header>

        <section class="mapbox" data-mapbox>
          <figure>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3308.3200651374646!2d-6.869790585141951!3d33.98431178062462!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xda76ce7f9462dd1%3A0x2e9c39cfa1d9e8d7!2sNational%20school%20For%20Computer%20Science!5e0!3m2!1sen!2sma!4v1667599785149!5m2!1sen!2sma" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
          </figure>
        </section>

        <section class="contact-form">

          <h3 class="h3 form-title">Contact Form</h3>

          <form action="#" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" type="submit" disabled data-form-btn>
              <ion-icon name="paper-plane" style="color: white;"></ion-icon>
              <span style="color: white;">Send Message</span>
            </button>

          </form>

        </section>

      </article>

    </div>

  </main>






  <!--
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>