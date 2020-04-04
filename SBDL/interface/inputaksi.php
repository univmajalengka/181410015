<?php 
	$koneksi=mysqli_connect("localhost","root","","perpustakaan_sdnsukahaji");
 if (isset($_POST['id'])){
		$kb = $_POST['kode_buku'];	
		$is = $_POST['isbn'];
		$jb = $_POST['judul_buku'];
		$pn = $_POST['pengarang'];
		$hl = $_POST['halaman'];
		$kk = $_POST['kode_kategori'];
		$kr = $_POST['kode_rak'];
		$st = $_POST['status'];

		mysqli_query($koneksi,"insert into buku ('id','kode_buku','judul_buku','pengarang','halaman','kode_kategori','kode_rak','status') value('','$id','$kb','$is','$jb','$pn','$hl','$kk','$kr','$st')");

		header("location:databuku.php?pesan=input");
}

?>
