<?php include "header.php";?>
<div class="container-fluid ">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="col-md-12 mx-auto text-center"><!-- Awal Kolom Pertama -->
			<div class="panel panel-default">
				<div class="panel-body">
                <?php

$sql = "SELECT * FROM berita";
$hasil = mysqli_query($koneksi, $sql);

while ($row = $hasil->fetch_assoc()) {

?>
<h3 class="glyphicon glyphicon-envelope"><strong>Berita</strong></h3>
<h1><?php echo $row['judul_berita']; ?></h1>
<img src="<?php echo $row['foto_berita']; ?>" alt="<?php echo $row['judul_berita']; ?>">

</div>
<?php

}

?>

</div>
</div>
</div>

<?php include "footer.php";?>