<?php
include("koneksi.php");
$ID = $_GET['ID'];
$result = mysqli_query($mysqli, "DELETE FROM tbl_siakad WHERE ID=$ID");
header("Location:index_form.php");
?>