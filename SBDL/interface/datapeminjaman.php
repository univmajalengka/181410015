<!DOCTYPE html>
<html>
<head>
	<title>Data Peminjaman Perpustakaan SDN Sukahaji</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<br/>
 

 
	<h1>DATA PEMINJAMAN</h1>
</div>
	<div class="table">
		<table border="1px" width="100%" height="7%">
			<tr>
				<th>Id</th>
				<th>Kode Peminjaman</th>
				<th>Kode Peminjam</th>
				<th>Kode Buku</th>
				<th>Tanggal Pinjam</th>
				<th>Tanggal Kembali</th>
				<th>Catatan</th>
			</tr>
		<?php 
$host = mysql_connect("localhost","root","");
$db = mysql_select_db("perpustakaan_sdnsukahaji",$host);
$peminjaman = mysql_query("select * from Peminjaman");
$no = 1;
while($data=mysql_fetch_array($peminjaman)){
?>
		<tr>
				<td align="center"><?php echo $no?></td>
				<td><?php echo $data['id'];?></td>
				<td><?php echo $data['kode_peminjama'];?></td>
				<td><?php echo $data['kode_peminjam'];?></td>
				<td><?php echo $data['kode_buku'];?></td>
				<td><?php echo $data['tgl_pinjam'];?></td>
				<td><?php echo $data['tgl_kembali'];?></td>
				<td><?php echo $data['catatan'];?></td>
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
