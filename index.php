<?php
include "koneksi.php";

if (isset($_POST['simpan'])) {

    $nama = $_POST['nama'];
    $jurusan = $_POST['jurusan'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUES(
        '',
        '$nama',
        '$jurusan',
        '$alamat'
    )");
}

$data = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>

    <style>

        body{
            font-family: Arial;
            background: linear-gradient(to right,#141e30,#243b55);
            padding:40px;
            color:white;
        }

        .container{
            width:80%;
            margin:auto;
            background:white;
            color:black;
            padding:30px;
            border-radius:15px;
            box-shadow:0 0 20px rgba(0,0,0,0.5);
        }

        h1{
            text-align:center;
            color:#243b55;
        }

        input, textarea{
            width:100%;
            padding:12px;
            margin-top:10px;
            margin-bottom:20px;
            border-radius:10px;
            border:1px solid #ccc;
        }

        button{
            background:#243b55;
            color:white;
            padding:12px 25px;
            border:none;
            border-radius:10px;
            cursor:pointer;
        }

        button:hover{
            background:#141e30;
        }

        table{
            width:100%;
            border-collapse:collapse;
            margin-top:30px;
        }

        table th{
            background:#243b55;
            color:white;
            padding:12px;
        }

        table td{
            padding:12px;
            border-bottom:1px solid #ccc;
        }

        tr:hover{
            background:#f1f1f1;
        }

    </style>

</head>
<body>

<div class="container">

    <h1>Input Data Mahasiswa</h1>

    <form method="POST">

        <input type="text" name="nama" placeholder="Nama Mahasiswa" required>

        <input type="text" name="jurusan" placeholder="Jurusan" required>

        <textarea name="alamat" placeholder="Alamat"></textarea>

        <button type="submit" name="simpan">
            Simpan Data
        </button>

    </form>

    <table>

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Alamat</th>
        </tr>

        <?php
        $no = 1;

        while($d = mysqli_fetch_array($data)){
        ?>

        <tr>
            <td><?= $no++; ?></td>
            <td><?= $d['nama']; ?></td>
            <td><?= $d['jurusan']; ?></td>
            <td><?= $d['alamat']; ?></td>
        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>
