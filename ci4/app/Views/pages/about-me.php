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
        <link rel="icon" href="<?php echo base_url('images/maximus.png'); ?>" type="image/x-icon">
        <title>Ronaldolicious</title>
        <style>
        </style>
    </head>
    <body>

    <!-- About Section -->
    <section id="about">
        <div class="about-grid">
            <div>
                <h3 class="about-header"><i class="fas fa-user"></i> About Me</h3>
                <p class="about-description">
                    I was born in <strong><em>December 10, 2001</em></strong>, I am currently <strong><em>22 years old</em></strong> and my Junior High School journey includes four years at 
                    <em>Santa Clara Parish School</em> in Pasay City and I graduated Senior High School at <em>Asia Pacific College</em>.
                    One of my hobbies is <strong><em>cycling</strong></em>. I picked it up during the pandemic as a way to stay active. It was just me, my bike, and the open road every morning. But now, with my schedule getting busier, I don't get to cycle as much. Even so, whenever 
                    I find some free time, I enjoy going for a ride. It's always a <strong><em>good time</strong></em>.
                </p>
                </div>            
            <div>
                <h3 class="about-header"><i class="fas fa-heart"></i> Hobbies & Interests</h3>
                <ul class="about-list">
                    <li><strong>Binge-watching K-dramas</strong> is something I really enjoy. It is a great way 
                        to <em>unwind</em> and get lost in different stories</li>
                    <li>I enjoy <strong>listening to K-pop and Western music</strong>.</li>
                    <li><strong>In my younger days, I used to play video games competitively,</strong> such as Valorant, CODM, Wildrift, and Cytus, which I really enjoyed. It was a <em>fun experience</em>.</li>
                    <li><strong>Cat and dog lover</strong>. I used to have dogs and cats before, even a snake
                        🐍
                    </li>
                    <li>Memes</li>
                </ul>
            </div>
            <div>
                <h3 class="about-header"><i class="fas fa-utensils"></i> My top 10 favorite foods</h3>
                <ol class="ol-about-list">
                    <li>French fries 🍟</li>
                    <li>Munggo 🥣</li>
                    <li>Chicken fillet 🍗</li>
                    <li>Medium steak 🥩</li>
                    <li>Lasagna 🍝</li>
                    <li>Salad 🥗</li>
                    <li>Pasta 🍝</li>
                    <li>Siomai rice 🍚</li>
                    <li>Sinigang na baboy 🍲🐷</li>
                    <li>Bulalo 🥩</li>
                </ol>
                
            </div>
            <div>
                <h3 class="about-header"><i class="fas fa-thumbs-down"></i> Things that I hate</h3>
                <ul class="about-list">
                    <li><strong>Eating my potatoes</strong> without my permission</li>
                    <li>People who <i>judge quickly</i> without knowing the full story.</li>
                    <li>Spreading false informations</li>
                </ul>
                <!-- Adding the GIF -->
                <img src="<?php echo base_url('images/saitama.gif'); ?>" alt="Saitama GIF" class="Saitama, the one punch man" />
            </div>
        </div>
        <div class="about-grid transparent-grid">
            <div class="about-gif-container">
                <img src="<?php echo base_url('images/huh-cat-meme.gif'); ?>" alt="Huh Cat Meme">
            </div>
            <div class="quote-container quote1 flip-card" onclick="flipCard(this)">
                <div class="flip-card-inner">
                    <div class="flip-card-front">
                        <!-- Front content goes here -->
                        <p class="quote-text">Click or hover to reveal the quote!</p>
                    </div>
                    <div class="flip-card-back">
                        <blockquote class="quote-text">
                            "When you find your path, you must not be afraid. You need to have sufficient courage to make mistakes. Disappointment, defeat, and despair are the tools God uses to show us the way."
                        </blockquote>
                        <cite>- Paulo Coelho</cite>
                    </div>                
                </div>
            </div>
            <div class="quote-container quote2 flip-card" onclick="flipCard(this)">
                <div class="flip-card-inner">
                    <div class="flip-card-front">

                        <p class="quote-text">Click or hover to reveal the quote!</p>
                    </div>
                    <div class="flip-card-back">
                        <blockquote class="quote-text">
                            "Do not stop when you are tired, stop when you are done."
                        </blockquote>
                        <cite>- Johnny</cite>
                    </div>
                    
                </div>
            </div>
            <div class="about-gif-container">
                <img src="<?php echo base_url('images/dog-suspiciouslook.gif'); ?>" alt="A dog with a suspicious look on its face">
                
            </div>
            <button type="button" class="custom-button">Click to see more</button>
        </div>

    <!-- The Modal -->
    <div id="myModal" class="modal">
    <!-- Modal content -->
    <div class="modal-content">
        <span class="close">×</span>
        <p>My Gameplay Throwbacks, Travels, and Pets</p>
        <!-- Add your videos here -->
        <div class="video-container">
    <div>
        <p>Codename: Zero (Cytus)</p>
        <video controls>
        <source src="<?php echo base_url('images/codename_zero.mp4'); ?>" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        <p>May 13, 2015</p>
    </div>
    <div>
        <p>L2B (Cytus)</p>
        <video controls>
        <source src="<?php echo base_url('images/l2b.mp4'); ?>" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        <p>March 23, 2015</p>
    </div>
    <div>
        <p>Call of Duty Mobile lucky shot</p>
        <video controls>
        <source src="<?php echo base_url('images/tsamba.mp4'); ?>" type="video/mp4">
        Your browser does not support the video tag.
        </video>
        <p>November 21, 2021</p>
    </div>
    <div>
        <p>Taiwan</p>
        <a href="<?php echo base_url('images/taiwan.jpg'); ?>" target="_blank">
            <img src="<?php echo base_url('images/taiwan.jpg'); ?>" alt="Taiwan">
        </a>
        <p>January 29 - February 2, 2020</p>
    </div>
    <div>
        <p>Bohol</p>
        <a href="<?php echo base_url('images/bohol.jpg'); ?>" target="_blank">
            <img src="<?php echo base_url('images/bohol.jpg'); ?>" alt="Bohol">
        </a>
        <p>September 27 - September 30, 2023</p>
    </div>
    <div>
        <p>My pets</p>
        <a href="<?php echo base_url('images/pets.png'); ?>" target="_blank">
            <img src="<?php echo base_url('images/pets.png'); ?>" alt="My pets">
        </a>
    </div>
</div>
</div>
</div>

    </section>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <head>
        <script src="https://kit.fontawesome.com/732c08c56d.js" crossorigin="anonymous"></script>
    </head>
    <script src="<?php echo base_url('js/resourcesManager.js'); ?>"></script>
    </body>
    </html>