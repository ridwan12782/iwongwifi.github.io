document.addEventListener("DOMContentLoaded", function() {
    const logo = document.getElementById("logo");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    // Pastikan sidebar selalu tertutup saat halaman dimuat
    sidebar.style.width = "0";

    logo.addEventListener("click", function() {
        if (sidebar.style.width === "250px") {
            sidebar.style.width = "0"; // Tutup sidebar jika sudah terbuka
        } else {
            sidebar.style.width = "250px"; // Buka sidebar jika tertutup
        }
    });

    closeBtn.addEventListener("click", function() {
        sidebar.style.width = "0"; // Tutup sidebar saat tombol "X" diklik
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
