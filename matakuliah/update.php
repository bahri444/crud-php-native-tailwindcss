<?php
require_once('../koneksi.php');
if (isset($_POST['simpan_data'])) {
    $mk_id = $_POST['mk_id'];
    $prodi_id = $_POST['prodi_id'];
    $kode_mk = $_POST['kode_mk'];
    $nama_mk = $_POST['nama_mk'];
    $jumlah_sks = $_POST['jumlah_sks'];

    // var_dump($mk_id, $prodi_id, $kode_mk, $nama_mk, $jumlah_sks);
    // die;
    // update user data// Insert data into table matakuliah
    $data = mysqli_query($conn, "UPDATE matakuliah SET prodi_id='$prodi_id',kode_mk='$kode_mk',nama_mk='$nama_mk',jumlah_sks='$jumlah_sks' WHERE mk_id='$mk_id'");
    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
