<!-- id	nim	nama	alamat	gender	telepon	foto	prodi	semester	tahun_masuk	 -->
<?php
require_once('../koneksi.php');
// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $prodi_id = $_POST['prodi_id'];
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $telepon = $_POST['telepon'];
    $semester = $_POST['semester'];
    // var_dump(NULL, $nim, $nama, $alamat, $gender, $telepon, $prodi_id, $semester, $tahun_masuk);
    // Query for data insertion
    // mhs_id	prodi_id	nim	nama	alamat	gender	telepon	semester
    $query = mysqli_query($conn, "INSERT INTO mahasiswa VALUES(NULL, '$prodi_id','$nim','$nama','$alamat','$gender','$telepon','$semester')");
    if ($query) {
        echo "<script>alert('You have successfully inserted the data');</script>";
        echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    } else {
        echo "<script>alert('Something Went Wrong. Please try again');</script>";
    }
}
