<?php
// PHP Data Types
$title = "Ronaldo Bernasor II"; // String
$nickname = "Bam"; // String
$degree = "BSIT"; // String
$college = "Asia Pacific College"; // String
$greeting = "Hi! I am $title"; // String
$youtubeLink = "https://www.youtube.com/watch?v=BbeeuzU5Qc8";
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
</head>
<body>
    <div id="welcome-message" style="display: none;">
        <p>Welcome Adventurer!</p>
    </div>

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