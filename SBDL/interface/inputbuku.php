<!DOCTYPE html>
<html>
<head>
	<title>inputbuku</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<div class="judul">		
	</div>
	
	<br/>

	<a href="databuku.php">Lihat Semua Data</a>
	<br/>
	<h3>Input data baru</h3>
	<form action="inputaksi.php" method="post">
<table border="0">
	<tr>
<td align="center" colspan="3">INPUT BUKU</td>
</tr>
<tr>
<td>Id</td><td><input type="text" name="id"></td> 
</tr>
<tr>
<td>Kode Buku</td><td><input type="text" name="kode_buku"></td> 
</tr>
<tr>
<td>ISBN</td><td><input type="text" name="isbn"></td> 
</tr>
<tr>
<td>Judul Buku</td><td><input type="text" name="judul_buku"></td> 
</tr>
<tr>
<td>Pegarang</td><td><input type="text" name="pengarang"></td>
</tr>
<tr>
<td>Halaman</td><td><input type="text" name="halaman"></td>
</tr> 
<tr>
<td>Kode Kategori</td><td><input type="text" name="kode_kategori"></td> 
</tr>
<tr>
<td>Kode Rak</td><td><input type="text" name="kode_rak"></td> 
</tr>
<tr>
<td>Status</td><td><input type="text" name="status"></td> 
</tr>		
<tr>
<td><button type="id" name="id" >Submit</button>	
		</table>
	</form>
</body>
</html>