<?php

require_once "koneksi.php";

?>

<!DOCTYPE html>
<html>
<head>
    <title>Slip Gaji Karyawan</title>

    <style>
        body{
            font-family: Arial;
            margin:20px;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-bottom:30px;
        }

        th,td{
            border:1px solid black;
            padding:8px;
        }

        th{
            background:#ddd;
        }

        h2{
            background:#f2f2f2;
            padding:10px;
        }
    </style>
</head>
<body>

<h1>DAFTAR SLIP GAJI KARYAWAN</h1>
<h2>Karyawan Kontrak</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Departemen</th>
    <th>Durasi Kontrak</th>
    <th>Agensi</th>
    <th>Gaji Bersih</th>
</tr>

<?php

$sql = "SELECT * FROM tabel_karyawan
        WHERE jenis_karyawan='Kontrak'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $gajiBersih =
        25 * $row['gaji_dasar_per_hari'];

    echo "
    <tr>
        <td>{$row['id_karyawan']}</td>
        <td>{$row['nama_karyawan']}</td>
        <td>{$row['departemen']}</td>
        <td>{$row['durasi_kontrak_bulan']} Bulan</td>
        <td>{$row['agensi_penyalur']}</td>
        <td>Rp ".number_format($gajiBersih,0,',','.')."</td>
    </tr>";
}

?>

</table>
<h2>Karyawan Tetap</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Departemen</th>
    <th>Tunjangan</th>
    <th>Opsi Saham</th>
    <th>Gaji Bersih</th>
</tr>

<?php

$sql = "SELECT * FROM tabel_karyawan
        WHERE jenis_karyawan='Tetap'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $gajiBersih =
        (25 * $row['gaji_dasar_per_hari'])
        + $row['tunjangan_kesehatan'];

    echo "
    <tr>
        <td>{$row['id_karyawan']}</td>
        <td>{$row['nama_karyawan']}</td>
        <td>{$row['departemen']}</td>
        <td>Rp ".number_format($row['tunjangan_kesehatan'],0,',','.')."</td>
        <td>{$row['opsi_saham_id']}</td>
        <td>Rp ".number_format($gajiBersih,0,',','.')."</td>
    </tr>";
}

?>

</table>
<h2>Karyawan Magang</h2>

<table>
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Departemen</th>
    <th>Uang Saku</th>
    <th>Sertifikat KM</th>
    <th>Gaji Bersih</th>
</tr>

<?php

$sql = "SELECT * FROM tabel_karyawan
        WHERE jenis_karyawan='Magang'";

$result = mysqli_query($conn,$sql);

while($row = mysqli_fetch_assoc($result))
{
    $gajiBersih =
        (25 * $row['gaji_dasar_per_hari']) * 0.80;

    echo "
    <tr>
        <td>{$row['id_karyawan']}</td>
        <td>{$row['nama_karyawan']}</td>
        <td>{$row['departemen']}</td>
        <td>Rp ".number_format($row['uang_saku_bulanan'],0,',','.')."</td>
        <td>{$row['sertifikat_kampus_merdeka']}</td>
        <td>Rp ".number_format($gajiBersih,0,',','.')."</td>
    </tr>";
}

?>

</table>
</body>
</html>