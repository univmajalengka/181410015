<!DOCTYPE html>
<html>
<head>
	<title>Data Peminjam Perpustakaan SDN Sukahaji</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 

 
	<h1>DATA PEMINJAM</h1>
</div>
	<div class="table">
		<table border="1px" width="100%" height="7%">
			<tr>
				<th>Id</th>
				<th>Kode Peminjam</th>
				<th>Nama Peminjam</th>
				<th>Alamat</th>
				<th>Telepon</th>
			</tr>
		<?php 
$host = mysql_connect("localhost","root","");
$db = mysql_select_db("perpustakaan_sdnsukahaji",$host);
$peminjam = mysql_query("select * from Peminjam");
$no = 1;
while($data=mysql_fetch_array($peminjam)){
?>
		<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $data['kode_peminjam'];?></td>
				<td><?php echo $data['nama_peminjam'];?></td>
				<td><?php echo $data['alamat'];?></td>
				<td><?php echo $data['telepon'];?></td>
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
