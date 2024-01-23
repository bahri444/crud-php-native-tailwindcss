<?php
require('../koneksi.php');
if (isset($_POST['update'])) {
    $id = $_POST['prodi_id'];
    $nama_prodi = $_POST['nama_prodi'];

    // update user data
    $result = mysqli_query($conn, "UPDATE program_studi SET nama_prodi='$nama_prodi' WHERE prodi_id=$id");

    // Redirect to homepage to display updated user in list
    header("Location: index.php");
}
