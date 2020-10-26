<?php
$username=$_POST['username'];
$pasword=$_POST['pasword'];


if(empty($username)){
	echo "mohon username diisi";
} elseif(empty($pasword)){
	echo "mohon pasword diisi";
}else{
	include "koneksi.php";
	$daftar=mysqli_query($konek,"insert into `user` values ('','$username','".$_POST['pasword']."')");
	
	
	if($daftar){
		echo "<script>alert('anda sukses masukkan data');
		location.href='daftar.php';location.href='../front-end/login.html';</script>";
	}else {
		echo "anda telah gagal memas;location.href='../front-end/login.html';kkan data, coba lagi sampai bisa".mysqli_error($konek);
	}
}

?>