    <!DOCTYPE html>
    <html lang="en">
    <head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <link rel="stylesheet" href="<?php echo base_url('css/links.css'); ?>" />
      <link rel="stylesheet" href="<?php echo base_url('css/style.css'); ?>" />
      <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link rel="icon" href="<?php echo base_url('images/maximus.png'); ?>" type="image/x-icon">
      <title>Ronaldolicious' Resources</title>
    </head>
    <body>
      <video autoplay muted loop id="background-wallpaper">
        <source src="<?php echo base_url('images/thelive-wallpaper02.mp4'); ?>" type="video/mp4">
        Your selected browser does not support the video tag.
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

      <!-- Resources Section -->
      <section class="resources">
          <div class="resource-section">
              <div><h1>References</h1></div>
              <div id="educational-platforms"><h2>Educational Platforms</h2><ul class="resource-list"></ul></div>
              <div id="social-media-icons"><h2>Icons:</h2><ul class="resource-list"></ul></div>
              <div id="live-wallpaper-background"><h2>Live Wallpaper Background:</h2><ul class="resource-list"></ul></div>
              <div id="personal-website-inspiration"><h2>Personal Website Inspiration:</h2><ul class="resource-list"></ul></div>
              <div id="color-palettes"><h2>Text Color Palettes:</h2><ul class="resource-list"></ul></div>
              <div id="typing-animation-tutorial"><h2>Typing Animation Tutorial:</h2><ul class="resource-list"></ul></div>
              <div id="social-media-border-color"><h2>Social Media Border Color Code:</h2><ul class="resource-list"></ul></div>
              <div id="gifs"><h2>GIFs:</h2><ul class="resource-list"></ul></div>
              <div id="other-medias"><h2>Other Media(s):</h2><ul class="resource-list"></ul></div>
          </div>
      </section>

      <footer>
        <div class="copyright">
          © 2023 Ronaldo Bernasor II. All Rights Reserved. Crafted for WEBPROG Portfolio.
        </div>
      </footer>
      <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>
    </body>
    </html>