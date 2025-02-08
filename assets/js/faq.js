document.addEventListener("DOMContentLoaded", function () {
    const logo = document.getElementById("logo");
    const sidebar = document.getElementById("sidebar");
    const closeBtn = document.getElementById("close-btn");

    // Pastikan sidebar selalu tertutup saat halaman dimuat
    sidebar.style.width = "0";

    logo.addEventListener("click", function () {
        if (sidebar.style.width === "250px") {
            sidebar.style.width = "0";
        } else {
            sidebar.style.width = "250px";
        }
    });

    closeBtn.addEventListener("click", function () {
        sidebar.style.width = "0"; // Tutup sidebar saat tombol "X" diklik
    });
});
