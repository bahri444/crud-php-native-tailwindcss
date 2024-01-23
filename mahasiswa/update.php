<?php
require_once('../koneksi.php');
if (isset($_POST['submit'])) {
    $id = $_POST['mhs_id'];
    $prodi_id = $_POST['prodi_id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $telepon = $_POST['telepon'];
    $semester = $_POST['semester'];
    // update user data
    var_dump($id, $prodi_id, $nim, $nama, $alamat, $gender, $telepon, $semester);
    $result = mysqli_query($conn, "UPDATE mahasiswa SET prodi_id='$prodi_id',	nim='$nim',	nama='$nama',	alamat='$alamat',	gender='$gender',	telepon='$telepon',	semester='$semester' WHERE mhs_id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
