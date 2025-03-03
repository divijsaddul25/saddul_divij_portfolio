<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Study Case  Divij Saddul</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/css/casestudy.css">
    <?php 
require_once('includes/connect.php'); 
 
$query = 'SELECT * FROM projects, media WHERE project_id = projects.id AND media.id ='.$_GET['id']; 
 
$results = mysqli_query($connect,$query); 
 
$row = mysqli_fetch_assoc($results); 
 
?>
</head>

<body>

    
    <header>
        <div class="logo">
            <img src="/images/divij_logo.jpg" alt="ds_logo">
        </div>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#about-me">About Me</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <main class="grid-container">

       
        <section id="study-case-main-image">
            
            <img src="/images/<?php echo $row ['img1']" ?> alt="Study Case Main Image">
        </section>

        
        <section id="study-case-overview" class="col-span-full">
            <h2> <?php echo $row['name']; ?> </h2>
            <p>
                <?php echo $row['description']; ?>


            </p>

            <h3>Problem:</h3>
            <p>
                 <?php echo $row['problem']; ?>
            </p>
            
            <h3>Solution:</h3>
            <p>
                 <?php echo $row['solution']; ?>
            </p>
            
        </section>

        
        <section id="zima-image" class="col-span-full">
        
            <img src="/images/  <?php echo $row['img2']; ?>" alt="Project Image">
            <img src="/images/<?php echo $row['img3']; ?>" alt="Project Image">
        </section>

    </main>

  
    <footer>
        <div class="footer-logo">
            <img src="/images/divij_logo.jpg" alt="Your Logo">
        </div>
        <div class="social-icons">
            <a href="https://github.com/divijsaddul25"  class="social-icon">
                <img src="/images/Icon ionic-logo-github.jpg" alt="github">
            </a>
            </a>
        </div>
    </footer>

</body>

</html>
