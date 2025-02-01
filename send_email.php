<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Memuat autoload PHPMailer
require 'vendor/autoload.php'; // Pastikan untuk menyesuaikan jalur ke file autoload PHPMailer

// Memeriksa apakah formulir telah dikirimkan
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Memeriksa apakah semua kolom yang diperlukan diisi
    if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['message'])) {
        // Konfigurasi untuk mengirim email
        $mail = new PHPMailer(true);
        try {
            // Pengaturan server
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // Ubah ke alamat server SMTP Anda
            $mail->SMTPAuth   = true;
            $mail->Username   = 'ridwanspeed8@gmail.com'; // Ubah ke alamat email Anda
            $mail->Password   = 'ndgq dhzs ytsn itxq'; // Ubah ke kata sandi email Anda
            $mail->SMTPSecure = 'ssl'; // Jika menggunakan SSL, ubah menjadi 'ssl'
            $mail->Port       = 465; // Port SMTP, sesuaikan jika perlu

            // Email pengirim
            $mail->setFrom('ridwanspeed8@gmail.com', 'Ridwan'); // Ubah ke alamat email Anda dan nama pengirim
            $mail->addAddress('cs@iwingwifi.biz.id', 'cs Iwonks WiFi'); // Ubah ke alamat email dan nama penerima

            // Konten
            $mail->isHTML(true); // Set email sebagai format HTML
            $mail->Subject = 'Pesan dari Formulir Kontak';
            $mail->Body    = "Nama: {$_POST['name']}<br>Email: {$_POST['email']}<br>Pesan: {$_POST['message']}";

            // Mengirim email
            $mail->send();
            $message = 'Pesan Anda telah terkirim. Terima kasih telah menghubungi kami!';
            $message_type = 'success';
        } catch (Exception $e) {
            $message = "Terjadi kesalahan saat mengirim pesan: {$mail->ErrorInfo}";
            $message_type = 'error';
        }
    } else {
        $message = "Mohon lengkapi semua kolom.";
        $message_type = 'error';
    }
} else {
    $message = "Akses tidak sah.";
    $message_type = 'error';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - I Net</title>
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/pesan.css">
</head>
<body>
    <header id="header">
        <div class="logo-container">
            <a href="#" class="logo" id="logo">
                <img src="assets/images/logo.png" alt="Logo I Net" onclick="toggleNav()">
            </a>
            <span class="site-title">I Net</span>
        </div>
    </header>
    <nav id="sidebar">
        <a href="javascript:void(0)" class="close-btn" id="close-btn" onclick="toggleNav()">&times;</a>
        <a href="index.html">Beranda</a>
        <a href="paket_layanan.html">Paket Layanan</a>
        <a href="faq.html">FAQ</a>
        <a href="kontak.html">Kontak</a>
    </nav>
    <div class="container">
        <h2>Kontak I Net</h2>
        <div class="message">
            <p>Selamat datang di halaman kontak I Net. Kami siap membantu Anda dengan layanan internet kami yang handal dan stabil. Jangan ragu untuk menghubungi kami melalui alamat email <a href="mailto:info@rtrwnet.com">cs@iwongwifi.biz.id</a> untuk pertanyaan atau bantuan terkait layanan kami.</p>
            <p>Jika Anda memiliki pertanyaan lebih lanjut mengenai paket layanan atau mengalami masalah teknis, kunjungi juga halaman <a href="faq.html">FAQ</a> kami untuk informasi yang mungkin dapat membantu.</p>
            <p>Kami berkomitmen untuk memberikan pengalaman internet yang optimal bagi pelanggan kami. Terima kasih telah memilih I Net sebagai penyedia layanan internet Anda.</p>
        </div>
    </div>
    <script src="assets/js/index.js"></script>
</body>
</html>
