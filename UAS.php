<?php
ini_set("display_errors","");
// Data klasemen
$klasemen = array(
    array(
        "nama_negara" => "Uzbekistan U-23",
        "pertandingan" => 3,
        "menang" => 3,
        "seri" => 0,
        "kalah" => 0,
        "poin" => 9
    ),
    array(
        "nama_negara" => "Vietnam U-23",
        "pertandingan" => 3,
        "menang" => 2,
        "seri" => 0,
        "kalah" => 1,
        "poin" => 6
    ),
    array(
        "nama_negara" => "Kuwait U-23",
        "pertandingan" => 3,
        "menang" => 1,
        "seri" => 0,
        "kalah" => 2,
        "poin" => 3
    ),
    array(
        "nama_negara" => "Malaysia U-23",
        "pertandingan" => 3,
        "menang" => 0,
        "seri" => 0,
        "kalah" => 3,
        "poin" => 0
    )
);

// Input data
$nama_negara = $_POST["nama_negara"];
$pertandingan = $_POST["pertandingan"];
$menang = $_POST["menang"];
$seri = $_POST["seri"];
$kalah = $_POST["kalah"];
$poin = $_POST["poin"];
$nama_operator = $_POST["nama_operator"];
$nim_mahasiswa = $_POST["nim_mahasiswa"];

// Hitung poin baru
$poin_baru = $menang * 3 + $seri * 1 + $kalah * 0;

// Tambahkan data baru ke klasemen
if (isset($nama_negara) && isset($pertandingan) && isset($menang) && isset($seri) && isset($kalah) && isset($poin) && isset($nama_operator) && isset($nim_mahasiswa)) {
    $data_baru = array(
        "nama_negara" => $nama_negara,
        "pertandingan" => $pertandingan,
        "menang" => $menang,
        "seri" => $seri,
        "kalah" => $kalah,
        "poin" => $poin_baru
    );
    array_push($klasemen, $data_baru);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Klasemen Piala Asia U-23 Qatar Group D</title>
</head>
<body>
    <h1>INDAH DWI FEBRIANI</h1>
    <h1>201011401029</h1>
    
    <table border="1" cellspacing="0" cellpadding="5">
        <tr>
            <th>Negara</th>
            <th>P</th>
            <th>M</th>
            <th>S</th>
            <th>K</th>
            <th>Poin</th>
        </tr>
        <?php foreach ($klasemen as $data) { ?>
        <tr>
            <td><?php echo $data["nama_negara"]; ?></td>
            <td><?php echo $data["pertandingan"]; ?></td>
            <td><?php echo $data["menang"]; ?></td>
            <td><?php echo $data["seri"]; ?></td>
            <td><?php echo $data["kalah"]; ?></td>
            <td><?php echo $data["poin"]; ?></td>
        </tr>
        <?php } ?>
    </table>

    <h2>Input Data Baru</h2>
    <form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
        <label for="nama_negara">Nama Negara:</label>
        <select id="nama_negara" name="nama_negara">
            <option
