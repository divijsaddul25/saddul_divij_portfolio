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
            <img src="/images/zima___logo.jpg" alt="Study Case Main Image">
        </section>

        
        <section id="study-case-overview" class="col-span-full">
            <h2>Zima Rebrand</h2>
            <p>
                In this team-based assignment, my partner and I rebrand Zima, a brand known for its Slavic-inspired refreshing drinks. Our goal is to create a modern image that honors the brand’s heritage.

We research Zima’s history and target audience, leading to a fresh logo that reflects its core values. Using Cinema 4D, we create a 3D packaging model and an animated presentation in Adobe Premiere Pro.

We develop detailed wireframes and prototypes in Adobe XD to ensure a smooth user experience. Finally, we build an interactive website with a user-friendly interface using HTML, CSS, and JavaScript.

This approach revitalizes the Zima brand and provides us with valuable experience in branding and web development.


            </p>

            <h3>Problem:</h3>
            <p>
                As we worked on rebranding Zima, we encountered a major hurdle: how to refresh the brand without losing its rich Slavic heritage. The existing logo and color palette, while iconic, didn’t connect with younger, trend-conscious consumers. We needed to modernize the look but still honor the brand’s roots in a way that felt authentic.
            </p>
            
            <h3>Solution:</h3>
            <p>
                To solve this, we took a deep dive into Zima’s history and analyzed its target market to ensure we stayed true to its origins while appealing to a new generation. We maintained subtle references to its Slavic heritage through clean, minimalistic design choices and integrated modern, vibrant colors alongside a redesigned logo. This approach allowed us to strike the perfect balance between honoring the brand's legacy and giving it a fresh, contemporary identity that resonated with today’s audience.
            </p>
            
        </section>

        
        <section id="zima-image" class="col-span-full">
        
            <img src="/images/zima_2.jpg" alt="Project Image">
            <img src="/images/zima copy.jpg" alt="Project Image">
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
