<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    if(isset($_GET['nomor'])) {
        include 'koneksi.php';
        $nomor = $_GET['nomor'];
        $tes = mysqli_query($connection, "SELECT nomor FROM pasien WHERE nomor='$nomor'") or die(mysqli_error());
            if (mysqli_num_rows($tes)==0) {
                echo "<script>window.history.back()</script>";
            }
            else {
                $delete=mysqli_query($connection,"DELETE FROM pasien WHERE nomor='$nomor'");
                if ($delete){
                    echo "<h3>Data mahasiswa berhasil dihapus</h3>";
                    echo "<script>window.location =rumah_sakit.php;</script>";
                } else {
                    echo "<h2>gagal menghapus data</h2>";
                    echo "<a href = 'rumah_sakit.php'>Kembali </a>";
                }
            }
    } 
    ?>
</body>
</html>