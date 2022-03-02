<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pagination dengan PHP</title>

		<!-- Load File bootstrap.min.css yang ada difolder css -->
		<link href="css/bootstrap.min.css" rel="stylesheet">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		  <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		<style>
		.align-middle{
			vertical-align: middle !important;
		}
		</style>
	</head>
	<body>
		<!-- Membuat Menu Header / Navbar -->
		<nav class="navbar navbar-inverse" role="navigation">
			<div class="container-fluid">
				<div class="navbar-header">
					<a class="navbar-brand" href="#" style="color: white;"><b>Pagination dengan PHP</b></a>
				</div>
				<p class="navbar-text navbar-right hidden-xs" style="color: white;padding-right: 10px;">
					FOLLOW US ON &nbsp;
					<a target="_blank" style="background: #3b5998; padding: 0 5px; border-radius: 4px; color: #f7f7f7; text-decoration: none;" href="https://www.facebook.com/mynotescode">Facebook</a> 
					<a target="_blank" style="background: #00aced; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://twitter.com/mynotescode">Twitter</a> 
					<a target="_blank" style="background: #d34836; padding: 0 5px; border-radius: 4px; color: #ffffff; text-decoration: none;" href="https://plus.google.com/118319575543333993544">Google+</a>
					<a target="_blank" style="background: #fff; padding: 0 5px; border-radius: 4px; color: #d34836; text-decoration: none;" href="https://www.youtube.com/channel/UCO394itv-u7Tn4CgI3bMYIg">YouTube</a>
				</p>
			</div>
		</nav>
		<?php
		include 'koneksi.php';
		?>
		
		<div style="padding: 0 15px;">
			<div class="table-responsive">
				<table class="table table-bordered">
					<tr>
						<th>No</th>
						<th class="text-center">FOTO</th>
						<th>NRP</th>
						<th>NAMA</th>
						<th>JENIS KELAMIN</th>
						<th>TELP</th>
						<th>ALAMAT</th>
						<th colspan="2">Aksi</th>
					</tr>
					
				<?php 
				  $halaman = 10;
				  $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
				  $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
				  $result = mysql_query("SELECT * FROM anggota");
				  $total = mysql_num_rows($result);
				  $pages = ceil($total/$halaman);            
				  $query = mysql_query("select * from anggota LIMIT $mulai, $halaman")or die(mysql_error);
				  $no =$mulai+1;


				  while ($data = mysql_fetch_assoc($query)) {
				?>
				<?php
					echo "<tr>";
						echo "<td>" .$no++. "</td>";
						echo "<td><img src='images/".$data['foto']."' width='100' height='100'></td>";
						echo "<td width='100'>".$data['nrp']."</td>";
						echo "<td width='150'>".$data['nama']."</td>";
						echo "<td width='50'>".$data['jenis_kelamin']."</td>";
						echo "<td width='50'>".$data['telp']."</td>";
						echo "<td>".$data['alamat']."</td>";
						echo "<td><a href='edit.php?nrp=".$data['nrp']."'>Ubah</a></td>";
						echo "<td align='left'><a href='proses_hapus.php?nrp=".$data['nrp']."'>Hapus</a></td>";
								  
					echo "</tr>";
				?>
					<?php } ?>
				  
				</table>          

				<div class="">
				  <?php for ($i=1; $i<=$pages ; $i++){ ?>
				  <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>

				  <?php } ?>
				</div>		
			</div>
		</div>
	</body>
</html>

