<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>Document</title>
    <style>
        .mx-auto {
            width: 700px;
            margin-top: 20px;
        }

        h2 {
            margin: 10px;
        }
    </style>
</head>
<body>
    <?php
    include 'koneksi.php';
    $nomor = $_GET['nomor'];
    $select = mysqli_query($connection, "SELECT *FROM pasien WHERE nomor='$nomor'");
    if (mysqli_num_rows($select)==0){
        echo '<script>window.history.back()</script>';
    } else {
        $d = mysqli_fetch_assoc($select);
    }
    ?>

<h2 class="text-center">Edit Data</h2>
    <div class="card mx-auto">
        <form action="edit_proses.php" method="POST">
            <div class="form-group">
                <label for="nomor">Nomor Kamar</label>
                <input type="number" class="form-control" id="nomor" name="nomor" value="<?php echo $d['nomor'];?>"required>
            </div>
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama" value="<?php echo $d['nama'];?>"required>
            </div>
            <label for="">Gender</label>
            <select id="gender" name="gender" class="form-control" required>
                <option value="">--Select Gender--</option>
                <option value="Perempuan"<?php if ($d['gender'] == 'Perempuan') {echo 'selected';}?>>Perempuan</option>
                <option value="Pria"<?php if ($d['gender'] == 'Pria') {echo 'selected';}?>>Pria</option>
            </select>
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <input type="text" class="form-control" id="alamat" name="alamat" value="<?php echo $d['alamat'];?>"required>
            </div>
            <input type="submit" name="submit" value="Simpan" class="btn btn-info">
        </form>
    </div>
</body>
</html>