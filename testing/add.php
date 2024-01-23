<!-- id	nim	nama	alamat	gender	telepon	foto	prodi	semester	tahun_masuk	 -->
<?php
require_once('../koneksi.php');
// Check If form submitted, insert form data into users table.
if (isset($_POST['submit'])) {
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $gender = $_POST['gender'];
    $telepon = $_POST['telepon'];
    $prodi = $_POST['prodi'];
    $semester = $_POST['semester'];
    $tahun_masuk = $_POST['tahun_masuk'];
    $foto = $_FILES['foto']['name'];
    // $getFileName = $_FILES["foto"]["name"];
    // // get the image extension
    // $GetExtension = substr($getFileName, strlen($getFileName) - 4, strlen($getFileName));
    // // allowed extensions
    // $allowed_extensions = array(".jpg", "jpeg", ".png", ".svg");
    // // Validation for allowed extensions .in_array() function searches an array for a specific value.
    // if (!in_array($GetExtension, $allowed_extensions)) {
    //     echo "<script>alert('ekstensi foto yang diupload bukan jpg / jpeg/ png /svg');</script>";
    // } else {
    //     //rename the image file
    //     $imgnewfile = md5($getFileName) . time() . $GetExtension;

    //     // code untuk memindahkan file foto ke folder myfoto
    //     move_uploaded_file($_FILES["foto"]["tmp_name"], "/myfoto/" . $imgnewfile);

    //     // Query for data insertion
    //     $query = mysqli_query($conn, "INSERT INTO mahasiswa VALUES(NULL, '$nim','$nama',    '$alamat',    '$gender',    '$telepon',    '$imgnewfile',    '$prodi',    '$semester',    '$tahun_masuk')");
    //     if ($query) {
    //         echo "<script>alert('You have successfully inserted the data');</script>";
    //         echo "<script type='text/javascript'> document.location ='index.php'; </script>";
    //     } else {
    //         echo "<script>alert('Something Went Wrong. Please try again');</script>";
    //     }
    // }


    // CEK DATA TIDAK BOLEH KOSONG
    if (empty($foto)) {
        if (empty($foto)) {
            echo "<font color='red'>Kolom Gambar tidak boleh kosong.</font><br/>";
        }

        // KEMBALI KE HALAMAN SEBELUMNYA
        echo "<br/><a href='javascript:self.history.back();'>Kembali</a>";
    } else {
        // JIKA SEMUANYA TIDAK KOSONG
        $filetmpname = $_FILES['foto']['tmp_name'];

        // FOLDER DIMANA GAMBAR AKAN DI SIMPAN
        $folder = 'image/';
        // GAMBAR DI SIMPAN KE DALAM FOLDER
        move_uploaded_file($filetmpname, $folder . $foto);

        // MEMASUKAN DATA DATA + NAMA GAMBAR KE DALAM DATABASE
        $result = mysqli_query($conn, "INSERT INTO mahasiswa VALUES(NULL, '$nim','$nama',    '$alamat',    '$gender',    '$telepon',    '$foto',    '$prodi',    '$semester',    '$tahun_masuk')");

        // MENAMPILKAN PESAN BERHASIL
        echo "<font color='green'>Data Berhasil ditambahkan.";
        echo "<br/><a href='index.php'>Lihat Hasilnya</a>";
    }
}
