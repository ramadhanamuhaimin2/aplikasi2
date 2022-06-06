<?php
include_once("koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_siakad ORDER BY ID ASC");
$result2 = mysqli_query($mysqli, "SELECT * FROM tbl_nilai ORDER BY nilai_id ASC"); ?>

<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <title>Data Siakad Company</title>
</head>
<body style="background-color: aqua;">
  <?php
    require("date_now.php"); //modularitas
  ?>
  <div class="container mt-4">
    <center>
      <hr style="background-color:dodgerblue">
      <h1><b>Data Siakad New UNS</b></h1>
      <hr style="background-color:dodgerblue">
    </center>
    <div class="row">
      <div class="col">
        <a href="create_form.php">
          <button type="button" class="btn btn-primary mt-4"><b>Create data</b></button>
        </a>
      </div>
      <div class="col-xs">
        <form class="form-inline my-2 my-lg-0 " action="index_form.php" method="get">
          <input class="form-control mr-sm-2 mt-4" type="search" placeholder="Search" aria-label="Search" name="cari">
          <button class="btn btn-outline-success mt-4" type="submit"><b>Search</b></button>
        </form>
        <br>
        <?php
        if (isset($_GET['cari'])) {
          $cari = $_GET['cari'];
          echo "<b>Hasil pencarian : " . $cari . "</b>";
        }
        ?>
      </div>
      <div class="col-xs">
          <form class="form-inline my-2 my-lg-0 " action="index_form.php" method="get">
            <input type="hidden" class="form-control mr-sm-2 mt-4" name="select">
            <button class="btn btn-outline-success mt-4" type="submit"><b>Select All</b></button>
          </form>
          <br>
          <?php
          if(isset($_GET['select'])){
          $cari = $_GET['select'];
          echo "<h6><b>Data sudah terpilih !!</b></h6>"; 
          }
          ?>
      </div>
    </div>
    <div class="table-responsive">          
      <table class="table table-striped table-hover table-dark table-bordered mt-4">
        <thead>
          <tr>
            <th scope="col"><center><b>NIM</b></center></th>
            <th scope="col"><center><b>NAMA</b></center></th>
            <th scope="col"><center><b>PRODI</b></center></th>
            <th scope="col"><center><b>Kode Mata Kuliah - Nama Mata Kuliah</b></center></th>
            <th scope="col"><center><b>KELAS</b></center></th>
            <th scope="col"><center><b>SKS</b></center></th>
            <th scope="col"><center><b>OPTION</b></center></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_GET['cari'])) {
            $cari = $_GET['cari'];
            $result = mysqli_query($mysqli, "SELECT * FROM tbl_siakad
                  WHERE NIM like '%" . $cari . "%'
                  OR Nama LIKE '%" . $cari . "%'
                  OR Prodi LIKE '%" . $cari . "%'
                  OR KodeMK_NamaMK LIKE '%" . $cari . "%'
                  OR Kelas LIKE '%" . $cari . "%'
                  OR Sks LIKE '%" . $cari . "%'
                  ");
          } else {
            $result = mysqli_query($mysqli, "SELECT * FROM tbl_siakad ORDER BY ID ASC");
          }
          while ($res = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" . $res['NIM'] . "</td>";
            echo "<td>" . $res['Nama'] . "</td>";
            echo "<td>" . $res['Prodi'] . "</td>";
            echo "<td>" . $res['KodeMK_NamaMK'] . "</td>";
            echo "<td>" . $res['Kelas'] . "</td>";
            echo "<td>" . $res['Sks'] . "</td>";
            echo "<td><a href=\"edit_form.php?ID=$res[ID]\"><b>|Edit|</b></a> - <a href=\"delete.php?ID=$res[ID]\" onClick=\"return confirm('Yakin Ingin Menghapus Data?')\"><b>|Delete|</b></a> - <a href=\"cetak_id.php?ID=$res[ID]\" target=\"_blank\"><b>|Print|</b></a></td>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <h6><b>Apabila ingin export, klik "Select All" terlebih dahulu</b></h6>
      <form class="form-inline my-2 my-lg-0" action="cetak.php" 
        target="_blank"
        method="get"> 
        <input class="form-control mr-sm-2 mt-4" type="hidden" 
        name="cari" value="<?php echo $cari; ?>"></br> 
        <button class="btn btn-warning mt-4" type="submit"><b>Export to PDF</b></button>
      </form></br></br>
  </div>
  <div class="container mt-4">
    <center>
      <hr style="background-color:dodgerblue">
      <h1><b>Data Nilai Mahasiswa UNS</b></h1>
      <hr style="background-color:dodgerblue">
    </center>
    <div class="row">
      <div class="col">
        <a href="create_nilai.php">
          <button type="button" class="btn btn-primary mt-4"><b>Input Nilai</b></button>
        </a>
      </div>
      <div class="col-xs">
        <form class="form-inline my-2 my-lg-0 " action="index_form.php" method="get">
          <input class="form-control mr-sm-2 mt-4" type="search" placeholder="Search" aria-label="Search" name="cari2">
          <button class="btn btn-outline-success mt-4" type="submit"><b>Search</b></button>
        </form>
        <br>
        <?php
        if (isset($_GET['cari2'])) {
          $cari2 = $_GET['cari2'];
          echo "<b>Hasil pencarian : " . $cari2 . "</b>";
        }
        ?>
      </div>
      <div class="col-xs">
          <form class="form-inline my-2 my-lg-0 " action="index_form.php" method="get">
            <input type="hidden" class="form-control mr-sm-2 mt-4" name="select2">
            <button class="btn btn-outline-success mt-4" type="submit"><b>Select All</b></button>
          </form>
          <br>
          <?php
          if(isset($_GET['select2'])){
          $cari2 = $_GET['select2'];
          echo "<h6><b>Data sudah terpilih !!</b></h6>"; 
          }
          ?>
      </div>
    </div>
    <div class="table-responsive">          
      <table class="table table-striped table-hover table-dark table-bordered mt-4">
        <thead>
          <tr>
            <th scope="col"><center><b>NIM</b></center></th>
            <th scope="col"><center><b>NAMA</b></center></th>
            <th scope="col"><center><b>Kode Mata Kuliah - Nama Mata Kuliah</b></center></th>
            <th scope="col"><center><b>NILAI</b></center></th>
            <th scope="col"><center><b>KELAS</b></center></th>
            <th scope="col"><center><b>OPTION</b></center></th>
          </tr>
        </thead>
        <tbody>
          <?php
          if (isset($_GET['cari2'])) {
            $cari2 = $_GET['cari2'];
            $result2 = mysqli_query($mysqli, "SELECT * FROM tbl_nilai
                  WHERE NIM like '%" . $cari2 . "%'
                  OR Nama LIKE '%" . $cari2 . "%'
                  OR KodeMK_NamaMK LIKE '%" . $cari2 . "%'
                  OR Nilai LIKE '%" . $cari2 . "%'
                  OR Kelas LIKE '%" . $cari2 . "%'
                  ");
          } else {
            $result2 = mysqli_query($mysqli, "SELECT * FROM tbl_nilai ORDER BY nilai_id ASC");
          }
          while ($res = mysqli_fetch_array($result2)) {
            echo "<tr>";
            echo "<td>" . $res['NIM'] . "</td>";
            echo "<td>" . $res['Nama'] . "</td>";
            echo "<td>" . $res['KodeMK_NamaMK'] . "</td>";
            echo "<td>" . $res['Nilai'] . "</td>";
            echo "<td>" . $res['Kelas'] . "</td>";
            echo "<td><a href=\"edit_nilai.php?nilai_id=$res[nilai_id]\"><b>|Edit|</b></a> - <a href=\"delete2.php?nilai_id=$res[nilai_id]\" onClick=\"return confirm('Yakin Ingin Menghapus Data?')\"><b>|Delete|</b></a> - <a href=\"cetak_nilai.php?nilai_id=$res[nilai_id]\" target=\"_blank\"><b>|Print|</b></a></td>";
          }
          ?>
        </tbody>
      </table>
    </div>
    <h6><b>Apabila ingin export, klik "Select All" terlebih dahulu</b></h6>
      <form class="form-inline my-2 my-lg-0" action="cetak2.php" 
        target="_blank"
        method="get"> 
        <input class="form-control mr-sm-2 mt-4" type="hidden" 
        name="cari2" value="<?php echo $cari2; ?>"></br> 
        <button class="btn btn-warning mt-4" type="submit"><b>Export to PDF</b></button>
      </form></br>
  </div>
</body>
</html>