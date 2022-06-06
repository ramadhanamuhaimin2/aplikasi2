<?php
include("koneksi.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Checking Data</title>
</head>
<body>
    <?php
        if(isset($_POST['Submit'])) {
        $NIM = mysqli_real_escape_string($mysqli, $_POST['NIM']);
        $Nama = mysqli_real_escape_string($mysqli, $_POST['Nama']);
        $Prodi = mysqli_real_escape_string($mysqli, $_POST['Prodi']);
        $KodeMK_NamaMK = mysqli_real_escape_string($mysqli, $_POST['KodeMK_NamaMK']);
        $Kelas = mysqli_real_escape_string($mysqli, $_POST['Kelas']);
        $Sks = mysqli_real_escape_string($mysqli, $_POST['Sks']);
        
        // checking empty fields
        if(empty($NIM) || empty($Nama) || empty($Prodi) || empty($KodeMK_NamaMK) || empty($Kelas) || empty($Sks)) {
        if(empty($NIM)) {
            echo "<b><h3><font color='red'>NIM masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Nama)) {
            echo "<b><h3><font color='red'>Nama masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Prodi)) {
            echo "<b><h3><font color='red'>Prodi masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($KodeMK_NamaMK)) {
            echo "<b><h3><font color='red'>KodeMK_NamaMK masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Kelas)) {
            echo "<b><h3><font color='red'>Kelas masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Sks)) {
            echo "<b><h3><font color='red'>Sks masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'> << KEMBALI</a>";

        } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result = mysqli_query($mysqli, "INSERT INTO tbl_siakad(NIM, Nama, Prodi, KodeMK_NamaMK, Kelas, Sks) VALUES('$NIM','$Nama','$Prodi','$KodeMK_NamaMK','$Kelas','$Sks')");
        
        //display success message
        echo "<b><center>"; 
        echo "<h1><font color='blue'>SELAMAT, DATA ANDA TELAH DIMASUKKAN !!!</h1>";
        echo "<h3><br/><a href='index_form.php'> >> Klik untuk melihat data anda << </a></h3>";
        echo "</center></b>";
        }
        }
    ?>
</body>
</html>