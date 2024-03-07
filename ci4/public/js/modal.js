// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
var btn = document.querySelector(".custom-button");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// Hide the modal by default
modal.style.display = "none";

// Function to stop all videos inside the modal
function stopAllVideos() {
    var videos = modal.getElementsByTagName("video");
    for (var i = 0; i < videos.length; i++) {
        videos[i].pause();
    }
}

// Function to ensure only one video plays at a time
function playOnlyOneVideo(currentVideo) {
    var videos = modal.getElementsByTagName("video");
    for (var i = 0; i < videos.length; i++) {
        if (videos[i] !== currentVideo) {
            videos[i].pause();
        }
    }
}

// Add event listener to each video to pause others when one is played
var videos = modal.getElementsByTagName("video");
for (var i = 0; i < videos.length; i++) {
    videos[i].addEventListener('play', function() {
        playOnlyOneVideo(this);
    });
}

// When the user clicks the button, open the modal 
btn.addEventListener('click', function() {
    modal.style.display = "block";
});

// When the user clicks on <span> (x), close the modal and stop videos
span.addEventListener('click', function() {
    modal.style.display = "none";
    stopAllVideos();
});

// When the user clicks anywhere outside of the modal, close it and stop videos
window.addEventListener('click', function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
        stopAllVideos();
    }
});