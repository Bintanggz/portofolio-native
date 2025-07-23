<?php
  //mysql_connect("localhost","root","");
  //mysql_select_db("sabon");
  
$servername = "localhost";
$database = "portofolio";
$username = "root";
$password = "";
 

$conn = mysqli_connect($servername, $username, $password, $database);
// mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
//echo "Koneksi berhasil";
//mysqli_close($conn);
?>