<?php
require('../koneksi.php');
// Get id from URL to delete that user
$id = $_GET['mhs_id'];
// var_dump($id);

// Delete user row from table based on given id
$result = mysqli_query($conn, "DELETE FROM mahasiswa WHERE mhs_id=$id");

// After delete redirect to Home, so that latest user list will be displayed.
header("Location:index.php");
