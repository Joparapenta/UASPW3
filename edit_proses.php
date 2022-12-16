<?php
if (isset($_POST['submit'])) 
{
    include 'koneksi.php';
    $nomor       = $_POST['nomor'];
    $nama        = $_POST['nama'];
    $alamat      = $_POST['alamat'];
    $gender      = $_POST['gender'];
    $edit        =mysqli_query($connection,"UPDATE pasien set 
    nomor='$nomor',
    nama='$nama',
    gender='$gender',
    alamat='$alamat'
    WHERE nomor='$nomor'")
    or die(mysqli_error());

    if($edit) {
        echo "<h2>data berhasil diupdate<h2>";
        echo "<script>window.location='rumah_sakit.php'</script>";
                } else {
    echo "<h2>gagal menyimpan data<h2>";
    echo "<a href =edit.php ?nomor=".$nomor."'kembali</a>";
}

} 
else 
{
    echo "<script>window.history,back()</script>";
}
?>