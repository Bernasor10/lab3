    <?php
    $facebookLink = "https://www.facebook.com/maximuslincoln010/";
    $githubLink = "https://github.com/Bernasor10"; // String
    $linkedinLink = "https://www.linkedin.com/in/ronaldo-bernasorii-b987761b3/";
    $instagramLink = "https://www.instagram.com/potatolicious.10/"; // String
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" />
        <link rel="icon" href="../images/maximus.png" type="image/x-icon">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
        <link rel="icon" href="<?php echo base_url('images/maximus.png'); ?>" type="image/x-icon">
        <title>Ronaldolicious</title>
        <style>
        </style>
    </head>
    <body>
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

    <!-- Playlist Section -->
    <section id="playlist">
        <div class="playlist-header">
            <!-- New div for the header text -->
            <div class="header-text">
                <h2>My Spotify Playlist</h2>
            </div>
        </div>
        <!-- Grid Container for GIFs -->
        <div class="gif-grid">
            <!-- Chipi GIF (Left) -->
            <div class="cat-gif-container">
                <img src="<?php echo base_url('images/chipi.gif'); ?>" alt="Chipi Chapa Cat Meme GIF" class="left-cat-gif"/>
            </div>
            <!-- Cat Jam GIF (Middle) -->
            <div class="cat-gif-container">
                <img src="<?php echo base_url('images/catjam-cat.gif'); ?>" alt="Cat Jamming Meme GIF" class="middle-cat-gif"/>
            </div>
        </div>

    <!-- Grid Container for Playlists -->
    <div class="playlist-grid">
        <!-- Non-English Playlist -->
        <div class="playlist-grid-item" style="--animation-delay: 1.5s;">
            <h2>Non-English Playlist</h2>
            <iframe title="Non-English Playlist on Spotify" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/2ydHt73gEEjkTII4a7kTi8?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                <p>It seems like Spotify is blocked on your network. You can listen to the Non-English Playlist directly on Spotify when you have access.</p>
            </iframe>
        </div>
        <!-- English Playlist -->
        <div class="playlist-grid-item" style="--animation-delay: 1.5s;">
            <h2>English Playlist</h2>
            <iframe title="English Playlist on Spotify" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/4V5QIbU1nq51Z1h189b3qF?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                <p>It seems like Spotify is blocked on your network. You can listen to the English Playlist directly on Spotify when you have access.</p>
            </iframe>
        </div>
        <!-- Tagalog Playlist (Mostly) -->
        <div class="playlist-grid-item" style="--animation-delay: 1.5s;">
            <h2>Tagalog Playlist (Mostly)</h2>
            <iframe title="Tagalog Playlist on Spotify" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/0CH99T13A2ssIdkj4Vw2nN?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                <p>It seems like Spotify is blocked on your network. You can listen to the Tagalog Playlist directly on Spotify when you have access.</p>
            </iframe>
        </div>
        <!-- Study Playlist (Mostly) -->
        <div class="playlist-grid-item" style="--animation-delay: 1.5s;">
            <h2>Non-Vocal Playlist</h2>
            <iframe title="Non-Vocal Playlist on Spotify" style="border-radius:12px" src="https://open.spotify.com/embed/playlist/3bcT701qWdhJCEnZlKhVdY?utm_source=generator&theme=0" width="100%" height="352" frameBorder="0" allowfullscreen="" allow="autoplay; clipboard-write; encrypted-media; fullscreen; picture-in-picture" loading="lazy">
                <p>It seems like Spotify is blocked on your network. You can listen to the Non-Vocal Playlist directly on Spotify when you have access.</p>
            </iframe>
        </div>
    </div>

    <!-- Footer with Social Links and More -->
    <footer class="social-links-container">
        <!-- About Section -->
        <div class="footer-grid-item">
            <h4>Fun fact:</h4>
            <p>I can jump as high as a kangaroo!</p>
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
    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <head>
        <script src="https://kit.fontawesome.com/732c08c56d.js" crossorigin="anonymous"></script>
    </head>
    <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>

    </body>