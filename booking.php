<?php
// Ambil data dari URL query string
$nama_pemesan = $_GET['nama_pemesan'];
$jenis_kelamin = $_GET['jenis_kelamin'];
$nomor_identitas = $_GET['nomor_identitas'];
$tipe_kamar = $_GET['tipe_kamar'];
$durasi = $_GET['durasi'];
$diskon = 0;
$tanggal_pesan = isset($_GET['tanggal_pesan']) ? $_GET['tanggal_pesan'] : 'Tidak Diketahui'; // Check if tanggal_pesan is set

// Hitung diskon jika durasi lebih dari 3 hari
if ($durasi > 3) {
    $diskon = $_GET['diskon'];
}

$total_bayar = $_GET['total_bayar'];
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ringkasan Pemesanan - Hotel Kami</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Ringkasan Pemesanan</h2>

        <p><strong>Nama Pemesan:</strong> <?php echo $nama_pemesan; ?></p>
        <p><strong>Jenis Kelamin:</strong> <?php echo $jenis_kelamin; ?></p>
        <p><strong>Nomor Identitas:</strong> <?php echo $nomor_identitas; ?></p>
        <p><strong>Tipe Kamar:</strong> <?php echo $tipe_kamar; ?></p>
        <p><strong>Durasi Menginap:</strong> <?php echo $durasi; ?> hari</p>

        <!-- Menampilkan diskon jika ada -->
        <p><strong>Diskon:</strong> Rp <?php echo number_format($diskon, 0, ',', '.'); ?></p>

        <p><strong>Total Bayar:</strong> Rp <?php echo number_format($total_bayar, 0, ',', '.'); ?></p>
        
        <!-- Menampilkan tanggal pesanan jika tersedia -->
        <p><strong>Tanggal Pemesanan:</strong> <?php echo date('d-m-Y', strtotime($tanggal_pesan)); ?></p>

        <div class="back-button">
            <a href="index.php">
                <button type="button">Kembali ke Beranda</button>
            </a>
        </div>
    </div>
</body>
</html>
