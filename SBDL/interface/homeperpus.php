<!DOCTYPE html>
<html>
<head>
<title>Perpustakaan SDN Lemahsugih|Selamat Datang</title>
<!-- menghubungkan dengan file css -->
<link rel="stylesheet" type="text/css" href="style.css">
<!-- menghubungkan dengan file jquery -->
<script type="text/javascript" src="jquery.js"></script>
</head>
<body>

<div class="content">
<header>
<h1 class="judul">Perpustakaan SDN Lemahsugih</h1>

</header>
 
<div class="menu">
<ul class="ul">
				<li><a href="index.php?page=homeperpus">HOME</a></li>
				<li><a href="databuku.php">DATA BUKU</a></li>
				<li><a href="datapeminjam.php">PEMINJAM</a></li>
				<li><a href="datapeminjaman.php">PEMINJAMAN</a></li>
				<li><a href="datapengembalian.php">PENGEMBALIAN</a></li>
				<li><a href="datakategorii.php">KATEGORI</a></li>
				<li><a href="datarak.php">RAK</a></li>

</div>
 
<div class="badan">
 
 
<?php 
if(isset($_GET['page'])){
$page = $_GET['page'];
 
switch ($page) {
case 'home':
include "home.php";
break;
case 'databuku':
include "databuku.php";
break;

default:
echo "<center><h3>Maaf. Halaman tidak di temukan !</h3></center>";
break;
}
}else{
include "home.php";
}
 
?>

 
</div>
</div>
</body>
</html>
