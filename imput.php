<?php
if (isset($_POST['Proses'])) {
    $nama = $_POST['nama'];
    echo "<b>Nama</b> : $nama";

    echo "<br></br>";
    $nis = $_POST['nis'];
    echo "<b>Nis</b> : $nis";

    echo "<br></br>";

    $alamat = $_POST['alamat'];
    echo "<b>Alamat</b> : $alamat";

    echo "<br></br>";
    $jk = $_POST['jk'];
    echo "<b>Nis</b> : $jk";

    echo "<br></br>";
    $agama = $_POST['agama'];
    echo "<b>Agama</b> : $agama";

    echo "<br></br>";
    $sekolah = $_POST['sekolah'];
    echo "<b>Sekolah</b> : $sekolah";

    echo "<br></br>";
    $email = $_POST['email'];
    echo "<b>Email</b> : $email";

    echo "<br></br>";
    $pengajar = $_POST['pengajar'];
    echo "<b>Pengajar</b> : $pengjar";

    echo "<b>Mata Pelajaran Yang Disukai</b> : <br>";
    if(isset($_POST['pel1'])){
        echo"+". $_POST['pel1'] . "<br>";
    }
    if(isset($_POST['pel2'])){
        echo"+". $_POST['pel2'] . "<br>";
    }
    if(isset($_POST['pel3'])){
        echo"+". $_POST['pel3'] . "<br>";
    }
    if(isset($_POST['pel4'])){
        echo"+". $_POST['pel4'] . "<br>";
    }
    if(isset($_POST['pel5'])){
        echo"+". $_POST['pel5'] . "<br>";
    }

    echo "<br></br>";

    $sd = $_POST['sd'];
    echo "<b>nilai Ijasah SD</b> : $_POST";
}