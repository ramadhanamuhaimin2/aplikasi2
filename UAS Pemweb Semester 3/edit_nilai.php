<?php
include("koneksi.php"); ?>

<?php
  if (isset($_POST['update2'])) {
    $nilai_id = mysqli_real_escape_string($mysqli, $_POST['nilai_id']);
    $NIM = mysqli_real_escape_string($mysqli, $_POST['NIM']);
    $Nama = mysqli_real_escape_string($mysqli, $_POST['Nama']);
    $KodeMK_NamaMK = mysqli_real_escape_string($mysqli, $_POST['KodeMK_NamaMK']);
    $Nilai = mysqli_real_escape_string($mysqli, $_POST['Nilai']);
    $Kelas = mysqli_real_escape_string($mysqli, $_POST['Kelas']);

    // checking empty fields
    if (empty($NIM) || empty($Nama) || empty($KodeMK_NamaMK) ||  empty($Nilai) || empty($Kelas) || (($Nilai) < 0 || ($Nilai) > 100)) {
      if (empty($NIM)) {
        echo "<font color='red'>NIM masih belum diisi</font><br/>";
      }
      if (empty($Nama)) {
        echo "<font color='red'>Nama masih belum diisi</font><br/>";
      }
      if (empty($KodeMK_NamaMK)) {
        echo "<font color='red'>KodeMK_NamaMK masih belum diisi</font><br/>";
      }
      if (empty($Nilai)) {
        echo "<font color='red'>Nilai masih belum diisi</font><br/>";
      }
      if (empty($Kelas)) {
        echo "<font color='red'>Kelas masih belum diisi</font><br/>";
      }
      if(($Nilai) < 0 || ($Nilai) > 100) {
        echo "<b><h3><font color='red'>Maaf, Nilai yang anda masukkan tidak sesuai !!</font></h3></b><br/>";
      }
    } else {
      //updating the table
      $result2 = mysqli_query($mysqli, "UPDATE tbl_nilai SET NIM='$NIM', Nama='$Nama', KodeMK_NamaMK='$KodeMK_NamaMK', Nilai='$Nilai', Kelas='$Kelas' WHERE nilai_id=$nilai_id");
      //redirectig to the display page. In our case, it is index_form.php
      header("Location: index_form.php");
    }
  }
?>

<?php
  //getting id from url
  $nilai_id = $_GET['nilai_id'];
  //selecting data associated with this particular id
  $result2 = mysqli_query($mysqli, "SELECT * FROM tbl_nilai WHERE nilai_id=$nilai_id");
  while ($res = mysqli_fetch_array($result2)) {
    $NIM = $res['NIM'];
    $Nama = $res['Nama'];
    $KodeMK_NamaMK = $res['KodeMK_NamaMK'];
    $Nilai = $res['Nilai'];
    $Kelas = $res['Kelas'];
    }
?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <!--meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"> -->
  <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	<link href="form3.css" rel="stylesheet" type="text/css">
  <!-- Bootstrap CSS -->
  <!--link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous"> -->

  <title>Data Nilai Mahasiswa</title>
</head>

<body>
  <?php
    require("date_now.php"); //modularitas
  ?>
  <center>
        <?php
          $kata1 = "daftar kode mata kuliah dan nama mata kuliah";
          $kata2 = "universitas sebelas maret"; 
          $baru1 = strtoupper($kata1); //STRTOUPPER
          $baru2 = ucwords($kata2); //ucwords
          echo "<h2>"; 
          echo "$baru1";
          echo "</br>"; 
          echo "$baru2"; 
          echo "</h2>";    
        ?>

        <?php
        $barang = [ //ARRAYS
          "B001" => [
            "Nama Mata Kuliah" => 'Praktikum Pemrograman Web',
            "Kelas" => 'D',
            "SKS" => 2,
          ],
          "B002" => [
            "Nama Mata Kuliah" => 'Praktikum Multimedia',
            "Kelas" => 'D',
            "SKS" => 2,
          ],
          "B003" => [
            "Nama Mata Kuliah" => 'Praktikum Jaringan Komputer',
            "Kelas" => 'D',
            "SKS" => 2,
          ],
          "B004" => [
            "Nama" => 'Pemrograman Web',
            "Kelas" => 'C',
            "SKS" => 1,
          ],
          "B005" => [
            "Nama" => 'Multimedia',
            "Kelas" => 'C',
            "SKS" => 1,
          ],
          "B006" => [
            "Nama" => 'Bahasa Indonesia',
            "Kelas" => 'D',
            "SKS" => 2,
          ],
          "B007" => [
            "Nama" => 'Aplikasi Mikrokontroller',
            "Kelas" => 'C',
            "SKS" => 1,
          ],
          "B008" => [
            "Nama" => 'Praktikum Aplikasi Mikrokontroller',
            "Kelas" => 'D',
            "SKS" => 2,
          ],
          "B009" => [
            "Nama" => 'Proses Bisnis dan SIM',
            "Kelas" => 'C',
            "SKS" => 1,
          ],
          "B010" => [
            "Nama" => 'Praktikum Proses Bisnis dan SIM',
            "Kelas" => 'D',
            "SKS" => 2,
          ]
        ];
        ?>
        <table height='320px' , width='700px' border="5" , style="text-align: center;">
          <thead>
            <tr>
              <th bgcolor=#D3D3D3>No</th>
              <th bgcolor=#D3D3D3>Kode Mata Kuliah</th>
              <th bgcolor=#D3D3D3>Nama Mata Kuliah</th>
              <th bgcolor=#D3D3D3>Kelas</th>
              <th bgcolor=#D3D3D3>SKS</th>
            </tr>
          </thead>
          <tbody>
            <?php $i = 0;
            foreach ($barang as $key => $value) : ?> 
              <tr> 
                <td><?= $i + 1 ?></td>
                <td><?= $key ?></td>
                <?php foreach ($value as $key1 => $value) : ?> 
                  <td><?= $value ?></td>
                <?php endforeach ?>
              </tr>
            <?php $i++; 
            endforeach ?> 
          </tbody>
        </table> </br>
  </center>
  <center>
    <h1>Form Edit Nilai Mahasiswa</h1></br>
    <form id=biodata method="post" action="edit_nilai.php" name="form1" enctype="multipart/form-data">
      <fieldset>
        <ol>
          <li>
            <label for="nama_sales"><b>NIM</b></label>
            <input type="NIM" class="form-control" name="NIM" value="<?php echo $NIM; ?>">
          </li>
          <li>
            <label for="region"><b>Nama</b></label>
            <input type="Nama" class="form-control" name="Nama" value="<?php echo $Nama; ?>">
          </li>
        </ol>
      </fieldset>
      <fieldset>
        <ol>
          <li>
            <label for="KodeMK_NamaMK"><b>Kode-Nama (MK)</b></label>
              <select id=KodeMK_NamaMK name='KodeMK_NamaMK' style="width: 206px; height: 28px;"value="<?php echo $KodeMK_NamaMK; ?>">
                <option value='B001 - Praktikum Pemrograman Web'>B001 - Praktikum Pemrograman Web</option>
                <option value='B002 - Praktikum Multimedia'>B002 - Praktikum Multimedia</option>
                <option value='B003 - Praktikum Jaringan Komputer'>B003 - Praktikum Jaringan Komputer</option>
                <option value='B004 - Pemrograman Web'>B004 - Pemrograman Web</option>
                <option value='B005 - Multimedia'>B005 - Multimedia</option>
                <option value='B006 - Bahasa Indonesia'>B006 - Bahasa Indonesia</option>
                <option value='B007 - Aplikasi Mikrokontroller'>B007 - Aplikasi Mikrokontroller</option>
                <option value='B008 - Praktikum Aplikasi Mikrokontroller'>B008 - Praktikum Aplikasi Mikrokontroller</option>
                <option value='B009 - Proses Bisnis dan SIM'>B009 - Proses Bisnis dan SIM</option>
                <option value='B010 - Praktikum Proses Bisnis dan SIM'>B010 - Praktikum Proses Bisnis dan SIM</option>
              </select>
          </li>
        </ol>
      </fieldset>
      <fieldset>
        <ol>
          <li>
            <label for="Nama"><b>Nilai</b></label>
            <input type="text" name="Nilai" value="<?php echo $Nilai; ?>">
          </li>   
          <li>
            <label for="Kelas"><b>Kelas</b></label>
            <select id=Kelas name='Kelas' style="width: 206px; height: 28px;"value="<?php echo $Kelas; ?>">
                          <option value='C'>C</option>
                          <option value='D'>D</option>
              </select>
          </li>
        </ol>
      </fieldset>
      <input type="hidden" name="nilai_id" value=<?php echo $_GET['nilai_id']; ?>></br>
      <a href="edit_nilai.php"><button type="submit" name="update2" class="btn btn-primary">Update</button></br>
      <a href="index_form.php"><button type="button" class="btn btn-success">Home</button></a>
    </form>
    <h4><b>Note : Harap cek terlebih dahulu sebelum anda klik "Update" !!!</b></h4>
  </center>

  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) 
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
  -->
  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
  -->
</body>

</html>