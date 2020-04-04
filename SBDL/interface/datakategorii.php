<!DOCTYPE html>
<html>
<head>
	<title>Data Peminjam Perpustakaan SDN Sukahaji</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 

 
	<h1>DATA RAK</h1>
</div>
	<div class="table">
		<table border="1px" width="50%" height="7%">
			<tr>
				<th>Id</th>
				<th>Kode Kategori</th>
				<th>Nama Kategori</th>

			</tr>
		<?php 
$host = mysql_connect("localhost","root","");
$db = mysql_select_db("perpustakaan_sdnsukahaji",$host);
$kategori = mysql_query("select * from kategori_buku");
$no = 1;
while($data=mysql_fetch_array($kategori)){
?>
		<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['kode_kategori'];?></td>
				<td><?php echo $data['nama_kategori'];?></td>
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
