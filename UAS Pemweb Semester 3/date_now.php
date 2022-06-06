<?php
    date_default_timezone_set('Asia/Jakarta');
    $waktu_lengkap = date('N j/n/Y H:i:s'); //function date()
    echo "<b>"; 
    echo tampil_waktu($waktu_lengkap);
    echo "</b>";
    function tampil_waktu($waktu_lengkap)
    {
        $nama_bulan = array(
            1 =>   'Januari',
            'Februari',
            'Maret',
            'April',
            'Mei',
            'Juni',
            'Juli',
            'Agustus',
            'September',
            'Oktober',
            'November',
            'Desember'
        );

        $nama_hari = array(
            1 =>    'Senin',
            'Selasa',
            'Rabu',
            'Kamis',
            'Jumat',
            'Sabtu',
            'Minggu'
        );

        $pisah_waktu = explode(" ", $waktu_lengkap);
        $hari = $pisah_waktu[0];
        $tanggal = $pisah_waktu[1];
        $jam = $pisah_waktu[2];

        $hari_baru = $nama_hari[$hari];
        $pisah_tanggal = explode("/", $tanggal);
        $tanggal_baru = $pisah_tanggal[0] . " " . $nama_bulan[$pisah_tanggal[1]] . " " . $pisah_tanggal[2]; //function 

        return $hari_baru . ", " . $tanggal_baru . " Pukul " . $jam . " WIB"; //function 
    }
    ?>