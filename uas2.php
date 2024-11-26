<?php
// Ambil data dari form
$nama = $_POST['nama'];
$unit = $_POST['unit'];
$jabatan = $_POST['jabatan'];
$status = $_POST['status'];
$lama_kerja = $_POST['lama_kerja'];
$bpjs = $_POST['bpjs'];
$pinjaman = $_POST['pinjaman'];
$cicilan = $_POST['cicilan'];
$infaq = $_POST['infaq'];

// Tentukan gaji berdasarkan jabatan
switch ($jabatan) {
    case "Kepala Sekolah":
        $gaji = 10000000;
        break;
    case "Wakasek":
        $gaji = 7500000;
        break;
    case "Guru":
        $gaji = 5000000;
        break;
    case "Karyawan":
        $gaji = 2500000;
        break;
    default:
        $gaji = 0;
}

// Hitung bonus berdasarkan status kerja
$bonus = ($status == "Tetap") ? 1000000 : 0;

// Hitung gaji bersih
$gaji_bersih = ($gaji + $bonus) - ($bpjs + $pinjaman + $cicilan + $infaq);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Struk Gaji</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-primary"><center>Struk Gaji</center></h2>
        <div class="card">
            <div class="card-body">
                <p class="text-primary">Nama: <?= $nama ?></p>
                <p class="text-primary">Unit Pendidikan: <?= $unit ?></p>
                <p class="text-primary">Jabatan: <?= $jabatan ?></p>
                <p class="text-primary">Status Kerja: <?= $status ?></p>
                <p class="text-primary">Lama Kerja: <?= $lama_kerja ?> tahun</p>
                <p class="text-primary">Gaji: Rp <?= number_format($gaji, 0, ',', '.') ?></p>
                <p class="text-primary">Bonus: Rp <?= number_format($bonus, 0, ',', '.') ?></p>
                <p class="text-primary">BPJS: Rp <?= number_format($bpjs, 0, ',', '.') ?></p>
                <p class="text-primary">Pinjaman: Rp <?= number_format($pinjaman, 0, ',', '.') ?></p>
                <p class="text-primary">Cicilan: Rp <?= number_format($cicilan, 0, ',', '.') ?></p>
                <p class="text-primary">Infaq: Rp <?= number_format($infaq, 0, ',', '.') ?></p>
                <p class="text-primary"><strong>Gaji Bersih: Rp <?= number_format($gaji_bersih, 0, ',', '.') ?></strong></p>
            </div>
        </div>
    </div>
</body>
</html>