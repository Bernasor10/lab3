<?php
// PHP Data Types
$title = "Ronaldo Bernasor II"; // String
$nickname = "Bam"; // String
$degree = "BSIT"; // String
$college = "Asia Pacific College"; // String
$greeting = "Hi! I am $title"; // String
$youtubeLink = "https://www.youtube.com/watch?v=BbeeuzU5Qc8";
$facebookLink = "https://www.facebook.com/maximuslincoln010/";
$githubLink = "https://github.com/Bernasor10"; // String
$linkedinLink = "https://www.linkedin.com/in/ronaldo-bernasorii-b987761b3/";
$instagramLink = "https://www.instagram.com/potatolicious.10/"; // String
$age = 22; // Integer
$isStudent = true; // Boolean
$favoriteActivities = array("Cycling", "Watching Movies", "Playing Video Games"); // Array

function displayFavoriteActivities($activities) {
    echo "<ul>";
    foreach ($activities as $activity) {
        echo "<li>$activity</li>";
    }
    echo "</ul>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="<?php echo base_url('images/maximus.png'); ?>" type="image/x-icon">
    <title><?php echo $title; ?></title>
    <style>
        /* Add your CSS here */
    </style>
</head>
<body>
    <div id="welcome-message" style="display: none;">
        <p>Welcome Adventurer!</p>
    </div>
    <video autoplay muted loop id="background-wallpaper">
    <source src="<?php echo base_url('images/thelive-wallpaper02.mp4'); ?>" type="video/mp4">
    Your current browser does not support the video tag.
</video>
<div class="overlay"></div>

    <div id="mySidebar" class="sidebar">
        <!-- Close Button -->
        <a href="javascript:void:0" class="closebtn" onclick="closeSidebar()"></a>
        
    <!-- Video -->
    <img id="somsomi" src="<?php echo base_url('images/somsomiii.gif'); ?>" width="100%" style="position: relative;" 
    alt="Jeon Somi Happy happy">
    
<!-- Container for Navigation Links -->
<div class="sidebar-nav-links">
    <a href="<?php echo base_url('home'); ?>"><i class="fas fa-home"></i> Home</a>
    <a href="<?php echo base_url('about-me'); ?>"><i class="fas fa-user"></i> About Me</a>
    <a href="<?php echo base_url('playlist'); ?>"><i class="fas fa-music"></i> Playlist</a>
    <a href="<?php echo base_url('contact-me'); ?>"><i class="fas fa-envelope"></i> Contact</a>
    <a href="<?php echo base_url('resources'); ?>"><i class="fas fa-book"></i> Resources</a>
</div>
</div>


<!-- Navigation Bar -->
<nav class="navbar">
<a id="logo" href="<?php echo base_url('home'); ?>">
    <div class="logo">호날두</div>
</a>
<div class="menu-toggle">
    <span class="bar"></span>
    <span class="bar"></span>
    <span class="bar"></span>
</div>
<ul class="nav-links">
    <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
    <li><a href="<?php echo base_url('about-me'); ?>">About Me</a></li>
    <li><a href="<?php echo base_url('playlist'); ?>">Playlist</a></li>
    <li><a href="<?php echo base_url('contact-me'); ?>">Contact</a></li>
    <li><a href="<?php echo base_url('resources'); ?>">Resources</a></li>
</ul>
</nav>

<!-- Home Section -->
<section id="home">
    <div class="main-content">
        <div class="main-content-grid">
            <div class="text-container">
                <?php
                echo "<h1 class='header'><span class='type' data-text='Hi, I am $title'>$greeting</span></h1>";
                echo "<h2 class='subheader'><span class='type1' data-text='Potato Lover'></span></h2>";
                echo "<p>";
                echo "My nickname is <strong>$nickname</strong>. I <em>love</em> potatoes and enjoy them in all varieties.<br>";
                echo "Currently pursuing my studies in <strong>$degree</strong> at <em>$college</em>, and<br>";
                echo "this is my <strong>first time</strong> creating a website. I am also <em>excited</em> about this new learning experience.<br>";
                echo "I chose $degree because I have always been <em>fascinated</em> by computers and the <strong>endless<br>
                possibilities</strong> they offer. I am $age years old and a full-time student.<br>";  
                echo "If you want to know more about me, just click <strong class='highlight-video'>Learn More</strong class='highlight-video'><br>";
                echo "or <strong class='highlight-video'>Introduction Video</strong> 😄😄";
                echo "</p>";            
                echo "<a href='about-me' class='button'>Learn More</a>";
                echo "<a href='$youtubeLink' class='button'>Introduction Video</a>";
                echo "<div id='time'></div>";
                echo "<div id='gif-container'>";
                echo "<img src='".base_url('images/jujutsukaisen.gif')."' alt='Jujutsu Kaisen GIF' class='gif'>";
                echo "<img src='".base_url('images/pewpew.gif')."' alt='Pew Pew GIF' class='gif'>";
                echo "<img src='".base_url('images/valorant.gif')."' alt='Valorant GIF' class='gif'>";
                echo "<img src='".base_url('images/corgi.gif')."' alt='Corgi GIF' class='gif'>";
                echo "</div>";
                ?>
            </div>
            <div class="image-container">
                <img src="<?php echo base_url('images/me.jpg'); ?>" alt="Image of mine" class="right-side-image" />
            </div>
        </div>
    </div>

<!-- Footer with Social Links and More -->
<footer class="social-links-container">
    <!-- About Section -->
    <div class="footer-grid-item">
        <h4>Fun fact:</h4>
        <p>I can maintain a typing speed of 76 words per minute for a straight 5 minutes!</p>
    </div>

        <!-- Navigation Links -->
        <div class="footer-grid-item">
            <h4>Quick Links</h4>
            <ul>
                <li><a href="<?php echo base_url('home'); ?>">Home</a></li>
                <li><a href="<?php echo base_url('about-me'); ?>">About Me</a></li>
                <li><a href="<?php echo base_url('playlist'); ?>">Playlist</a></li>
                <li><a href="<?php echo base_url('contact-me'); ?>">Contact</a></li>
                <li><a href="<?php echo base_url('resources'); ?>">Resources</a></li>
            </ul>
            </div>

    <?php
// Define social media links
$facebookLink = "https://www.facebook.com/maximuslincoln010/";
$githubLink = "https://github.com/Bernasor10";
$linkedinLink = "https://www.linkedin.com/in/ronaldo-bernasorii-b987761b3/";
$instagramLink = "https://www.instagram.com/potatolicious.10/";
?>
<!-- Social Media Links -->
<div class="footer-grid-item">
    <h4>Connect with Me</h4>
    <div class="social-links">
        <?php
        // Array of social links
        $socialLinks = [
            'facebook' => $facebookLink,
            'github' => $githubLink,
            'linkedin' => $linkedinLink,
            'instagram' => $instagramLink
        ];

        // Loop through social links and display them with existing CSS classes
        foreach ($socialLinks as $network => $link) {
            echo "<a href='{$link}' target='_blank'><span class='icon'><i class='bx bxl-{$network} bxl'></i></span></a>";
        }
        ?>
    </div>
</div>
</footer>
<!-- End of Footer -->

</section>
<!-- End of Home Section -->
<!-- Swiper JS -->
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <head>
        <script src="https://kit.fontawesome.com/732c08c56d.js" crossorigin="anonymous"></script>
    </head>
    <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>
    <script src="<?php echo base_url('js/codes.js'); ?>"></script>
        
</body>
</html>