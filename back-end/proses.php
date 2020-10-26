<?php
include "koneksi.php";

$ambil = mysql_query($koneksi, "select nama from user where id_user ='$_SESSION[id_user]'")
if($ambil){
echo "<script> alert('sukses update');location.href='../forot-end/home.php';</script>";
}
?>