<?php
include_once("koneksi.php");
$result = mysqli_query($mysqli, "SELECT * FROM tbl_siakad ORDER BY ID ASC"); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <title>Data Mahasiswa</title>
</head>

<body>
    <div class="container">
        <h1>Data Mahasiswa UNS</h1>


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

        <table class="table mt-4">
            <thead class="thead-dark">
                <tr>
                    <th scope="col">NIM</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Prodi</th>
                    <th scope="col">Kode Mata Kuliah - Nama Mata Kuliah</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">SKS</th>
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
                }
                ?>
            </tbody>
        </table>

        <script>
            window.print();
        </script>
    </div>
</body>

</html>