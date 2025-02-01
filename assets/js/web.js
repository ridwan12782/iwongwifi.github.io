document.addEventListener("DOMContentLoaded", function() {
    const logo = document.getElementById("logo");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    logo.addEventListener("click", function() {
        sidebar.style.width = "250px";
    });

    closeBtn.addEventListener("click", function() {
        sidebar.style.width = "0";
    });
});

// Get the modal
var modal = document.getElementById('myModal');

// Get the image and insert it inside the modal - use its "alt" text as a caption
var images = document.querySelectorAll('.image-gallery img');
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
images.forEach(img => {
    img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
    }
});

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
    modal.style.display = "none";
}
