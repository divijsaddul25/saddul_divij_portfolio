<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Divij Saddul Portfolio</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/styles.css">
 <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/gsap.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.1/ScrollTrigger.min.js"></script>
 

<?php
//connect to the running database server and the specific database
require_once('includes/connect.php');``



//create a query to run in SQL
$query = 'SELECT projects.id AS projects, img1 FROM projects,media WHERE project_id = projects.id ORDER BY title ASC';


//run the query to get back the content
$results = mysqli_query($connect,$query);

?>


</head>

<body>
    <header>
        <div class="logo">
            <img src="/images/divij_logo.jpg" alt="ds_logo">
        </div>
        <nav>
            <ul id="menu" class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about-me">About Me</a></li>
                <li><a href="#contact">Contact</a></li>
            
    </header>
    <main class="grid-container">
     
        <section id="divijbanner" class="col-span-full">
            <div class="intro">
                <div class="about-image">
                    <img src="/images/ds_background.png" alt="ds_picture">
                </div>
                <div class="intro-text">
                    <h1>Hello/Bonjour, I am Divij Saddul</h1>
                    <p>Multimedia Designer</p>
                    <a href="#contact" class="download-btn">Contact Me</a>

                </div>
            </div>
        </section>

        <section id="about-me" class="about-me-section">
            <div class="about-left">
                <img src="/images/divij_saddul_pic.jpg" alt="About Me Image" class="about-image">
            </div>
            <div class="about-right">
                <h2>About Me</h2>
                <p>
                    Hello! I’m Divij Saddul, a 22-year-old multimedia designer from Mauritius Island, currently studying at Fanshawe College. Bilingual in French and English, I specialize in brand identity, logo design, and UI/UX design. I’m passionate about creating innovative solutions and have a strong interest in videography. I love exploring new ideas and bringing them to life through my work.
                </p>
                <a href="/images/saddul_divij_resume.pdf" download class="download-btn">Download Resume</a> 
            </div>
        </section>
        
        

  
        <section id="projects" class="col-span-full">
            <h2>Projects</h2>
            <div class="lightbox-grid">
                <?php
                echo '<a href="case-study.php?id=' $row['project'].'">';
                <div class="lightbox-item col-span-3">
                   echo '<img src="images/zima.jpg" alt="zima">';
                </div>
                echo'</a>'
                ?>
            </div>
        </section>

       
        <section id="demo-reel" class="col-span-full">
            <h2>Demo Reel</h2>
            <video id="player" playsinline controls data-poster="/path/to/poster.jpg">
                <source src="/video/saddul_divij_demo_reel.mp4" type="video/mp4" />
              </video>
        </section>

      
        <section id="testimonials" class="col-span-full">
            <h2>Testimonials</h2>
            <div class="testimonials">
                    <div class="testimonial col-span-4">
                    <div class="testimonial-image">
                        <img src="/images/persian_testi.jpg" alt="Testimonial_Persian_Market">
                    </div>
                    <h3>Persian Market</h3>
                    <p>"Overall, the design successfully merges tradition and modernity, reflecting the cultural roots of the Persian Market while giving it a fresh, contemporary look. It’s a great representation. Thank you @divij_564"</p>
                    <p1>London_fanfare_market</p1>
                </div>
            </div>
        </section>

        
        <section id="contact" class="col-span-full">
            <h2>Contact Me</h2>
            <form action="#" method="POST" class="contact-form">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
        
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>
        
                <label for="message">Message:</label>
                <textarea id="message" name="message" required></textarea>
        
                <button type="submit">Send Message</button>
            </form>
        </section>

        <footer>
            <div class="footer-logo">
                <img src="/images/divij_logo.jpg" alt="Your Logo">
            </div>
            <div class="social-icons">
                <a href="https://github.com/divijsaddul25" target="_blank" class="social-icon">
                    <img src="/images/Icon ionic-logo-github.jpg" alt="github">
                </a>
                </a>
        </footer>
        <div id="divijscrollbasedanimation"></div>
<script src="/js/script.js"></script>
</body>


</html>
