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

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <head>
        <script src="https://kit.fontawesome.com/732c08c56d.js" crossorigin="anonymous"></script>
    </head>
    <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>

    </body>