<?php 
include 'root.php';
$act=$_GET['action'];

if ($act=="addCoordinat") {
	$root->addCoordinat($_POST["city"],$_POST["latitude"],$_POST["longitude"],$_POST["category_map"]);
}

if ($act=="addcategory") {
	$root->addCategory($_POST["category_map"],$_POST["category_name"],$_POST["color_name"]);
}

if ($act=="editcoordinat") {
	$root->editCoordinat($_POST["city"],$_POST["latitude"],$_POST["longitude"],$_POST["category_map"],$_POST["id"]);
}
if ($act=="editcategory") {
	$root->editCategory($_POST["category_map"],$_POST["category_name"],$_POST["color_name"],$_POST["id_category"]);
}

if ($act=="deletecoordinat") {
	$root->delete_coordinat($_GET["id"]);
}

if ($act=="deletecategory") {
	$root->delete_category($_GET["id_category"]);
}


// if ($act=="logout") {
// 	session_start();
// 	session_destroy();
// 	header("location:index.php");
// }
// if ($act=="tambah_keranjang") {
// 	$root->tambah_keranjang($_POST["jumlah"],$_POST["id"],$_POST["id_customer"]);
// }
// if ($act=="hapus_keranjang") {
// 	$root->hapus_keranjang($_GET["id"]);
// }
// if ($act=="selesai_keranjang") {
// 		$key=rand();
// 	$root->selesai_keranjang($_GET["id"],$key);
// }
// if ($act=="konfirmasi") {
// 	$root->konfirmasi($_POST["id_transaksi"],$_FILES['foto']['name'],$_FILES['foto']['tmp_name'],$_FILES['foto']['type']);
// }
// if ($act=="hapus_transaksii") {
// 	$root->hapus_transaksii($_GET["id"]);
// }
// if ($act=="daftar") {
// 	$koneksi=new mysqli('localhost', 'root', '', 'codeloka');
// 	mysqli_query($koneksi,"insert into customer set username='$_POST[username]',password='$_POST[password]',nama='$_POST[nama]',alamat='$_POST[alamat]',telfon='$_POST[telfon]'");

// 	header("location:index.php");
// }
// if ($act=="sudahterima") {
// 	mysqli_query("update transaksi set status='Sudah Diterima Konsumen' where id_transaksi='$_GET[id_transaksi]'");
// 	header("location:transaksi.php");



?>