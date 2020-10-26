<?php
$username=$_POST['username'];
$pasword=$_POST['pasword'];
if(empty($username) && empty($pasword)){
	$pesan="maaf anda harus mengisi username dan pasword";
	include "../front-end/login.html";
}elseif(empty($username)){
	$pesan="maaf anda harus mengisi username";
	include "../front-end/login.html";
}elseif(empty($pasword)){
	$pesan="maaf anda harus mengisi password";
	include "../front-end/login.html";
}else{
	include "koneksi.php";
	$cek=mysqli_query($konek,"select * from user where nama='$username' and pasword='".$_POST['pasword']."'");
	
	if(mysqli_num_rows($cek)>0){
		session_start();
		$data_cek=mysqli_fetch_array($cek);
		$_SESSION['nama_pelanggan']=$data_cek['nama_pelanggan'];
		$_SESSION['username']=$_POST['username'];
		$_SESSION['pasword']=$_POST['pasword'];
		$_SESSION['id_pelanggan']=$data_cek['id_pelanggan'];
		$_SESSION['login_user']=true;
		header('location:../front-end/home.html');
	}else{
		$pesan="username dan password salah";
		include "../front-end/login.html";
		
	}
}
?>