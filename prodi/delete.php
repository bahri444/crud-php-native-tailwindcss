<?php
require('../koneksi.php');
// Get id from URL to delete that user
$id = $_GET['prodi_id'];
// var_dump($id);

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM program_studi WHERE prodi_id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
