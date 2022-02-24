<?php
//koneksi ke database
$Host = "localhost";
$User = "root";
$Pass = "";
$Db_name = "batara";
$mysqli = new mysqli( $Host, $User, $Pass, $Db_name );
//deteksi error
if ($mysqli->connect_error){
echo "Gagal terkoneksi ke database : (".$mysqli->connect_error.")";
}
?>
