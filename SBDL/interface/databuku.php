<!DOCTYPE html>
<html>
<head>
	<title>Data Buku Perpustakaan SDN Sukahaji</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 
	<?php 
	if(isset($_GET['pesan'])){
		$pesan = $_GET['pesan'];
		if($pesan == "input"){
			echo "Data berhasil di input.";
		}else if($pesan == "update"){
			echo "Data berhasil di update.";
		}else if($pesan == "hapus"){
			echo "Data berhasil di hapus.";
		}
	}
	?>
	<br/>
	<a class="tombol" href="inputbarang1.php">+ Tambah Data Baru</a>

	

 
	<h1>DATA BUKU</h1>
</div>
	<div class="table">
		<table border="2px" width="100%" height="7%">
			<tr>
				<th>Id</th>
				<th>Kode Buku</th>
				<th>ISBN</th>
				<th>Judul Buku</th>
				<th>Pengarang</th>
				<th>Halaman</th>
				<th>Kode Kategori</th>
				<th>Kode Rak</th>
				<th>status</th>
			</tr>
		<?php 
$host = mysql_connect("localhost","root","");
$db = mysql_select_db("perpustakaan_sdnsukahaji",$host);
$buku = mysql_query("select * from buku");
$no = 1;
while($data=mysql_fetch_array($buku)){
?>
		<<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $data['kode_buku'];?></td>
				<td><?php echo $data['isbn'];?></td>
				<td><?php echo $data['judul_buku'];?></td>
				<td><?php echo $data['pengarang'];?></td>
				<td><?php echo $data['halaman'];?></td>
				<td><?php echo $data['kode_kategori'];?></td>
				<td><?php echo $data['kode_rak'];?></td>
				<td><?php echo $data['status'];?></td>
				<td align="center">
					
		</tr>
		<?php } ?>
	</table>
	<tr>
		<th><a class="tombol" href="homeperpus.php">Kembali Ke Home</a></th>
	</tr>
</body>
</html>
<?php
?>
