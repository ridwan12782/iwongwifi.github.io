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
