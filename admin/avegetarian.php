<?php 
session_start();
require '../config/connect_vege.php';
$vege = query ("SELECT * FROM vegetarian");


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Sehat Yuk - Admin Panel</title>
	<link rel="stylesheet" href="admin.css">
</head>
<body>

<div class="topbar">
	<a href="admin.php">ADMIN PANEL</a>
</div>

<div class="konten">
	<a href="tambah_vege.php">Tambah data</a>
	<table border="1" cellpadding="10" cellspacing="0">
		<tr>
			<td>No</td>
			<td>Aksi</td>
			<td>Gambar</td>
			<td>Nama Makanan</td>
			<td>Konten</td>
		</tr>
	<?php $i=1; ?>
	<?php foreach ($vege as $veg) : ?>
		<tr>
			<td><?php echo $i; ?></td>
			<td><a href="ubah_vege.php?id=<?php echo $veg ["id"];?>">Ubah</a> |
				<a href="hapus_vege.php?id=<?php echo $veg ["id"];?>">Hapus</a>
			</td>
			<td>
				<img src="../pic/<?php echo $veg ["gambar"]; ?>" width="50"></td>
			<td><?php echo $veg ["nama"] ?></td>
			<td><?php echo $veg ["konten"] ?></td>
		</tr>
	<?php $i++; ?>
	<?php endforeach ?>
	</table>
</div>

<div class="sidebar">
	<div class="admin"><a href="adaftar.php">Daftar Admin</a></div>
	<div class="bestseller"><a href="abestseller.php">Best Seller</a></div>
	<div class="berita"><a href="aberita.php">Berita</a></div>
	<div class="karbohidrat"><a href="akarbohidrat.php">Karbohidrat</a></div>
	<div class="kalori"><a href="akalori.php">Kalori</a></div>
	<div class="protein"><a href="aprotein.php">Protein</a></div>
	<div class="vegetarian"><a href="avegetarian.php">Vegetarian</a></div>
	<div class="logout"><a href="../logout.php">Logout</a></div>
</div>


</body>
</html>