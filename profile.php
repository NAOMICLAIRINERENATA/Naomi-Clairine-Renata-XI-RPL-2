<?php
  // Definisikan variabel untuk informasi profil kami
  $nama = "Naomi Clairine Renata"; // Ganti dengan nama Anda
  $umur = 16; // Ganti dengan umur Anda
  $sekolah = "Smkn 2 Bandung"; // Ganti dengan sekolah Anda
  $cita_cita = "Proplayer Eupeup"; // Ganti dengan cita-cita Anda

  // Definisikan path ke foto profil kami
  $foto = "WhatsApp Image 2024-10-15 at 11.13.23.jpeg"; // Ganti dengan nama file foto Anda
?>

<!-- Struktur HTML untuk halaman profil kami -->
<html>
  <head>
    <title>Profil Saya</title>
  </head>
  <body>
    <h1>Profil Saya</h1>
    <img src="<?php echo $foto; ?>" alt="WhatsApp Image 2024-10-15 at 11.13.23.jpeg">
    <p>Nama: <?php echo $nama; ?></p>
    <p>Umur: <?php echo $umur; ?></p>
    <p>Sekolah: <?php echo $sekolah; ?></p>
    <p>Cita-cita: <?php echo $cita_cita; ?></p>
  </body>
</html>