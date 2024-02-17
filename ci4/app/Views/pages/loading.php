<!DOCTYPE html>
<html>
<head>
    <title>Loading</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/favico.js/0.3.10/favico.min.js"></script>
    <link rel="icon" href="<?php echo base_url('images/spinner.gif'); ?>" type="image/x-icon">
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background: #000;
            overflow: hidden;
        }
        
        #bg-video {
            position: fixed;
            top: 50%;
            left: 50%;
            z-index: -100;
            transform: translate(-50%, -50%);
            object-fit: contain;
            width: 100%;
            height: 100%;
        }
    </style>
<script>
    var i = 0;
    var txt = 'Loading . . .';
    var speed = 200;
    var baseURL = "<?php echo base_url(); ?>";
    
    function animateTitle() {
        if (i < txt.length) {
            document.title = txt.substring(0, i+1);
            i++;
            setTimeout(animateTitle, speed);
        } else {
            document.title = 'Loading';
            i = 0;
            setTimeout(animateTitle, speed);
        }
    }
    
    window.onload = function() {
        animateTitle();
        setTimeout(function() {
            window.location.href = baseURL + "home";  // Redirect to website.html after 10 seconds
        }, 10000);

        // Check if the viewport is less than or equal to 430 pixels wide
        if (window.matchMedia("(max-width: 912px)").matches) {
            // If true, load the mobile video
            document.getElementById("bg-video").src = baseURL + "images/loading-background1.mp4";
        } else {
            // If not, load the desktop video
            document.getElementById("bg-video").src = baseURL + "images/loading-background.mp4";
        }
    };
</script>
</head>
<body>
    <video autoplay muted id="bg-video">
        Your selected browser does not support HTML5 video.
    </video>
</body>
</html>