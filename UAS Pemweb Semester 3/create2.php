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
        if(isset($_POST['Submit2'])) {
        $NIM = mysqli_real_escape_string($mysqli, $_POST['NIM']);
        $Nama = mysqli_real_escape_string($mysqli, $_POST['Nama']);
        $KodeMK_NamaMK = mysqli_real_escape_string($mysqli, $_POST['KodeMK_NamaMK']);
        $Nilai = mysqli_real_escape_string($mysqli, $_POST['Nilai']);
        $Kelas = mysqli_real_escape_string($mysqli, $_POST['Kelas']);
        
        // checking empty fields
        if(empty($NIM) || empty($Nama) || empty($KodeMK_NamaMK) || empty($Nilai) || empty($Kelas) || (($Nilai) < 0 || ($Nilai) > 100))  {
        if(empty($NIM)) {
            echo "<b><h3><font color='red'>NIM masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Nama)) {
            echo "<b><h3><font color='red'>Nama masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($KodeMK_NamaMK)) {
            echo "<b><h3><font color='red'>KodeMK_NamaMK masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Nilai)) {
            echo "<b><h3><font color='red'>Nilai masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(empty($Kelas)) {
            echo "<b><h3><font color='red'>Kelas masih belum diisi, isi terlebih dahulu !!</font></h3></b><br/>";
        }
        if(($Nilai) < 0 || ($Nilai) > 100) {
            echo "<b><h3><font color='red'>Maaf, Nilai yang anda masukkan tidak sesuai !!</font></h3></b><br/>";
        }

        //link to the previous page
        echo "<br/><a href='javascript:self.history.back();'> << KEMBALI</a>";

        } else {
        // if all the fields are filled (not empty)
        //insert data to database
        $result2 = mysqli_query($mysqli, "INSERT INTO tbl_nilai(NIM, Nama, KodeMK_NamaMK, Nilai, Kelas) VALUES('$NIM','$Nama','$KodeMK_NamaMK','$Nilai','$Kelas')");
        
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