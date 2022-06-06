<!doctype html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
	  <link href="form3.css" rel="stylesheet" type="text/css">
    <title>Form Input</title>
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
        <form id=biodata method="post" action="create.php" name="form1" enctype="multipart/form-data">
          <h1><center>Form Input Mahasiswa</center></h1></br>
          <fieldset>
            <ol>
              <li>
                  <label for="NIM"><b>NIM</b></label>
                  <input type="text" name="NIM">
              </li>
              <li>
                  <label for="Nama"><b>NAMA</b></label>
                  <input type="text" name="Nama">
              </li>
            </ol>
          </fieldset>
          <fieldset>
            <ol>
              <li>
                  <label for="level"><b>PRODI</b></label>
                    <select id=kota name='Prodi' style="width: 206px; height: 28px;">
                      <option value='(D3) Teknik Informatika'>(D3) - Teknik Informatika</option>
                      <option value='(D3) Farmasi'>(D3) - Farmasi</option>
                      <option value='(S1) Teknik Informatika'>(S1) - Teknik Informatika</option>
                      <option value='(S1) Kedokteran'>(S1) - Kedokteran</option>
                    </select>
              </li>
              <li>
                  <label for="KodeMK_NamaMK"><b>Kode - Nama MK</b></label>
                     <select id=KodeMK_NamaMK name='KodeMK_NamaMK' style="width: 206px; height: 28px;">
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
                  <label for="Kelas"><b>KELAS</b></label>
                    <select id=Kelas name='Kelas' style="width: 206px; height: 28px;">
                      <option value='C'>C</option>
                      <option value='D'>D</option>
                    </select>
              </li>
              <li>
                  <label for="Sks"><b>SKS</b></label>
                    <select id=Sks name='Sks' style="width: 206px; height: 28px;">
                      <option value='1'>1</option>
                      <option value='2'>2</option>
                    </select>
              </li>
            </ol>
          </fieldset></br>
          <a href="create.php"><button type="submit" name="Submit" class="btn btn-primary">Submit</button></br>
          <a href="index_form.php"><button type="button" class="btn btn-success">Home</button>
        </form>
      </center>
  </body>
</html>