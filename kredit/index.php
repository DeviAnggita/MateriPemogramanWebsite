<?php

require_once("conn.php");

if (isset($_POST["submit"])) {
    $harga = $_POST["hargaMobil"];
    $uangMuka = $_POST["uangMuka"];
    $angsuran = $_POST["angsuran"];
    $bunga = $_POST["bunga"];

    $ambil = mysqli_query($conn, "SELECT * FROM `kredit`");
    $result = mysqli_fetch_row($ambil);

    if ($result == 0) {
        echo "kosong";
        $sql = "INSERT INTO `kredit` (`harga_mobil`, `uang_muka`, `angsuran`, `bunga`) 
                VALUES ('$harga', '$uangMuka', '$angsuran', '$bunga')";
        mysqli_query($conn, $sql);
    } else {
        echo "ada isi";
        mysqli_query($conn, "UPDATE kredit SET harga_mobil = '$harga', uang_muka = '$uangMuka', angsuran = '$angsuran', bunga = '$bunga'");
    }

    header("Location: tampil.php");
    exit;
}


// $conn->close();
?>




<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Simulasi Kredit Mobil</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="box-form">

        <div class="title-form">
            <h1>Simulasi Kredit Mobil</h1>
        </div>
        <div class="content-form">
            <form method="POST" action="">
                <table>
                    <tr>
                        <td>Harga Mobil</td>
                        <td>:</td>
                        <td><input type="text" name="hargaMobil" required></td>
                    </tr>
                    <tr>
                        <td>Uang Muka</td>
                        <td>:</td>
                        <td><input type="text" name="uangMuka" required></td>
                    </tr>
                    <tr>
                        <td>Lama Angsuran (Tahun)</td>
                        <td>:</td>
                        <td><select name="angsuran">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                            </select></td>
                    </tr>

                    <tr>
                        <td>Bunga (%)</td>
                        <td>:</td>
                        <td><select name="bunga" required>
                                <option value="5">5%</option>
                                <option value="6">6%</option>
                                <option value="7">7%</option>
                                <option value="8">8%</option>
                                <option value="9">9%</option>
                                <option value="10">10%</option>
                            </select></td>
                    </tr>
                    <td>
                        <button type="submit" name="submit">Submit</button>
                        <button type="reset" name="reset">Reset</button>
                    </td>
                    </tr>
                </table>
            </form>
        </div>
    </div>
</body>

</html>