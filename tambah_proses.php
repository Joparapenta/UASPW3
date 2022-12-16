<?php
if(isset($_POST['submit'])){
    include_once 'koneksi.php';
    $nomor       = $_POST['nomor'];
    $nama        = $_POST['nama'];
    $alamat      = $_POST['alamat'];
    $gender      = $_POST['gender'];

    $ip = mysqli_query($connection, "INSERT INTO pasien VALUES ('$nomor','$nama','$gender','$alamat')");
    
        
    if($ip) {
        echo "<h3>Data berhasil ditambahkan</h3>";
        echo "<script>window.location='rumah_sakit.php'</script>";
    } else {
        echo "gagal menambahkan data";
        echo "<a href='tambah.php'>kembali</a>";
    }
} 
?>