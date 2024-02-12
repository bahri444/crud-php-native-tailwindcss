<?php

if (isset($_POST['simpan_data'])) {
    $prodi_id = $_POST['prodi_id'];
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $jumlah_sks = $_POST['jumlah_sks'];

    // include file koneksi database
    require('../koneksi.php');
    // var_dump($prodi_id, $kode_mk, $nama_mk, $jumlah_sks);

    // Insert data into table matakuliah
    $data = mysqli_query($conn, "INSERT INTO matakuliah
    (`mk_id`,`prodi_id`,`kode_mk`,`nama_mk`,`jumlah_sks`)
    VALUES(NULL,'$prodi_id','$kode_mk','$nama_mk',
    '$jumlah_sks')");
    header("Location: index.php");
    // echo "User added successfully. <a href='index.php'>View matakuliah</a>";
}
