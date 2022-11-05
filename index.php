<?php
if(isset($_POST['send'])){
$name=isset($_POST['fullname']) ? $_POST['fullname'] :"";
$email=isset($_POST['email']) ? $_POST['email'] :"";
$msg=isset($_POST['message']) ? $_POST['message'] :"";
$date=date('l jS \of F Y h:i:s A');
$str="*************************\n"." Date : ".$date."\n Fulname : ".$name."\n Email : ".$email."\n Message : ".$msg."\n*************************\n\n";
$monFichier = "messages.txt";
$fh = fopen($monFichier, 'a+');
fwrite($fh, $str);
fclose($fh);
header('HTTP/1.1 303 See Other');
header('Location: index.php');
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Yassine Ouhadi</title>
  <link rel="shortcut icon" href="./images/icon.png" type="image/x-icon">
  <link rel="stylesheet" href="style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
</head>
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
          <img src="./images/ana.png" alt="Yassine's picture" width="80">
        </figure>

        <div class="info-content">
          <h1 class="name" title="Yassine Ouhadi" style="color:black;">Yassine Ouhadi</h1>

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
        </ul>

        <div class="separator"></div>

        <ul class="social-list">

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
                <img src="./images/UI.png
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
                <img src="./images/2210153.png" alt="Web development icon" width="40">
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
                <img src="./images/mobile-removebg-preview.png" alt="mobile app icon" width="40">
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
                <img src="./images/prbl.png" alt="camera icon" width="40">
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
          </section>
        </div>

       

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

          <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/nv.jpg" alt="Maghrabi" loading="lazy">
                </figure>

                <h3 class="project-title">Web Music Player</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
            
            <li class="project-item  active" data-filter-item data-category="web development">
              <a href="#">

                <figure class="project-img">
                  <div class="project-item-icon-box">
                    <ion-icon name="eye-outline"></ion-icon>
                  </div>

                  <img src="./images/Screenshot from 2022-11-02 15-29-09.png" alt="Jesa" loading="lazy">
                </figure>

                <h3 class="project-title">Hydraulic calculator App</h3>

                <p class="project-category">Web development</p>

              </a>
            </li>
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

          </ul>

        </section>

      </article>


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

          <form method="post" class="form" data-form>

            <div class="input-wrapper">
              <input type="text" name="fullname" class="form-input" placeholder="Full name" required data-form-input>

              <input type="email" name="email" class="form-input" placeholder="Email address" required data-form-input>
            </div>

            <textarea name="message" class="form-input" placeholder="Your Message" required data-form-input></textarea>

            <button class="form-btn" name="send" type="submit" disabled data-form-btn>
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
  <script src="script.js"></script>

  <!--
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

</body>
</html>
