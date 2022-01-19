<?php

require_once("conn.php");

$sql = mysqli_query($conn, "SELECT * FROM kredit");
$data = mysqli_fetch_array($sql);

$hargaMobil = $data["harga_mobil"];
$uangMuka = $data["uang_muka"];
$tahun = $data["angsuran"] * 12;
$bunga = $data["bunga"];
$bungap = $bunga / 100;

$plafonPinjam = $hargaMobil - $uangMuka;
$angsuran = $plafonPinjam / $tahun;
$bungaPerbulan = ($plafonPinjam * $bungap) / 12;
$jumlahCicilan = $angsuran + floor($bungaPerbulan);

function rupiah($angka)
{
    $hasil = 'Rp ' . number_format($angka, 2, ",", ".");
    return $hasil;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Kredit Mobil</title>
</head>

<body>
    <h1>Hasil </h1>

    <h4>Plafon Pinjaman</h4>
    <p><?= rupiah($hargaMobil) . " - " . rupiah($uangMuka) . " = " . rupiah($plafonPinjam) ?> </p>

    <h4>Angsuran Pokok Perbulan</h4>
    <p><?= rupiah($plafonPinjam) . " / " . $tahun . " = " . rupiah(floor($angsuran)) ?></p>

    <h4>Angsuran Bunga Perbulan</h4>
    <p><?= "(" . rupiah($plafonPinjam) . " x " . $bunga . "%" . ")" . " / " . "12" . " = " . rupiah(floor($bungaPerbulan)) ?></p>

    <h4>Jumlah Cicilan perbulan</h4>
    <p><?= rupiah(floor($angsuran)) . " + " . rupiah(floor($bungaPerbulan)) . " = " . rupiah(floor($jumlahCicilan)) ?></p>

    <a href="index.php">Kembali</a>
</body>

</html>