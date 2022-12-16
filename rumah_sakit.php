<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="rumahsakit.css">
    <title>Document</title>
</head>

<body>
    <h2 class="text-center">Rumah Sakit</h2>
    <h3 class="text-center">
        <a href="tambah.php">Tambah pasien</a>
    </h3>
    <div class="container">
  <div class="row">
    <div class="col">
     <h3>
        <a href="Logout.php">Logout cuy..</a>
     </h3>
    </div>
    <div class="col-md-auto">
    <div class="card">
  <div class="card-header">
   Daftar Pasien
  </div>
  <div class="card-body">
  <table class="table">
  <thead>
    <tr>
      <th scope="col">NO</th>
      <th scope="col">Nomor Kamar</th>
      <th scope="col">NAMA</th>
      <th scope="col">Gender</th>
      <th scope="col">ALAMAT</th>
      <th scope="col">AKSI</th>
    </tr>
  </thead>
  <tbody>
    <?php 
    include_once ('koneksi.php');
    $data=mysqli_query($connection,"SELECT * FROM pasien ");
    $no=1;
    while ($d=mysqli_fetch_array($data)) {
        ?>
    <tr>
        <td><?php echo $no++;?></td>
      <td><?php echo $d['nomor'] ?></td>
      <td><?php echo $d['nama'] ?></td>
      <td><?php echo $d['gender'] ?></td>
      <td><?php echo $d['alamat'] ?></td>
      <td>
        <a href="edit.php?nomor=<?php echo $d['nomor']?>"><button type="button" class="btn btn-secondary">Edit</button></a>
        <a href="hapus.php?nomor=<?php echo $d['nomor']?>"><button type="button" class="btn btn-danger">Delete</button></a>
      </td>
    </tr>
    <?php 
    }
    ?>
  </tbody>
</table>
  </div>
</div>
    </div>
    <div class="col">
 
    </div>
  </div>
</div>
</body>