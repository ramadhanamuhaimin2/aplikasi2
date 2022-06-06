<?php
include("koneksi.php");
$nilai_id = $_GET['nilai_id'];
$result2 = mysqli_query($mysqli, "DELETE FROM tbl_nilai WHERE nilai_id=$nilai_id");
header("Location:index_form.php");
?>