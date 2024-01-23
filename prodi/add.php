<?php

// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $nama_prodi = $_POST['nama_prodi'];
    // include database connection file
    require('../koneksi.php');

    // Insert user data into table
    $data = mysqli_query($conn, "INSERT INTO program_studi(`prodi_id`,`nama_prodi`) VALUES(NULL,'$nama_prodi')");
    header("Location: index.php");
    // echo "User added successfully. <a href='index.php'>View Users</a>";
}
