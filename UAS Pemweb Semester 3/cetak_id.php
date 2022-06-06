<?php
include("koneksi.php");?>

<?php
//getting url 
$ID=$_GET["ID"]; 
//selecting data asociated with this particular id 
$result = mysqli_query($mysqli, "SELECT * FROM tbl_siakad WHERE ID=$ID");
while ($res = mysqli_fetch_array($result)) {
$NIM = $res['NIM'];
$Nama = $res['Nama'];
$Prodi = $res['Prodi'];
$KodeMK_NamaMK = $res['KodeMK_NamaMK'];
$Kelas = $res['Kelas'];
$Sks = $res['Sks'];
}?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
  </head>
  <body>
    <h1>Data Mahasiswa UNS</h1>

    <div class="container" style="border-style: solid;">
        <h1 class="mt-4">Kartu Rencana Studi</h1>
        <hr>
        <br>
        <div class="row">
            <div class="col-3"><p>NIM</p></div>
            <div class="col-9">: <?php echo $NIM;?></div>
        </div>
        <div class="row">
            <div class="col-3"><p>NAMA</p></div>
            <div class="col-9">: <?php echo $Nama;?></div>
        </div>
        <div class="row">
            <div class="col-3"><p>PRODI</p></div>
            <div class="col-9">: <?php echo $Prodi;?></div>
        </div>
        <div class="row">
            <div class="col-3"><p>Kode MK - Nama MK</p></div>
            <div class="col-9">: <?php echo $KodeMK_NamaMK;?></div>
        </div>
        <div class="row">
            <div class="col-3"><p>KELAS</p></div>
            <div class="col-9">: <?php echo $Kelas;?></div>
        </div>
        <div class="row">
            <div class="col-3"><p>SKS</p></div>
            <div class="col-9">: <?php echo $Sks;?></div>
        </div>
    </div>
    <br>
    <br>
    <script>
        window.print(); 
    </script>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>