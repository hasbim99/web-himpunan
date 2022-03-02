<html>
<head>
<title>HME ITENAS - Berita</title>
	<link rel="icon" type="image/png" href="image/icontitle.png">
	<link type="text/css" rel="stylesheet" href="style.css"/>
				<script type="text/javascript">
				function PreviewImage() {
				var oFReader = new FileReader();
				oFReader.readAsDataURL(document.getElementById("uploadImage").files[0]);

				oFReader.onload = function (oFREvent) {
				document.getElementById("uploadPreview").src = oFREvent.target.result;
				};
				};
				</script>
<style type="text/css">
<!--
.style1 {color: #FFFFFF}
.style2 {
	color: #0000FF;
	font-size: 14px;
}
-->
</style>
</head>
<body>
<div id="wrapper">
	<div id="header">
    <h1 align="center" class="style1">POSTING BERITA SEPUTAR HME ITENAS<br>
	</h1>
    </div>          
    <div id="wrapper_konten">
		<div id="left_konten">        <nav>
        <ul>
            <li><a href="editor.php" class="style2">INPUT BERITA</a>
            <li><a href="berita.php">VIEW BERITA</a>
			<li><a href="../hadmin.html">Kembali ke Halaman Admin</a>
        </ul>
        </nav>
        
        </div>
		<div id="right_konten">
			<div id="form_top_artikel"> </div>
		  <div id="form_content_artikel">
			<div id="isi_artikel">
			  <form name="visi" method="post" action="posting.php" enctype="multipart/form-data">
				  <p>JUDUL 
				    <input type="text" name="judul">
			    </p>
				  <p>ISI BERITA<br>
				    <textarea name="deskripsi" style="width:450px; height:80px"></textarea>				
			        </p>
				 <p align="center">GAMBAR<br>
				<img id="uploadPreview" style="width: 150px; height: 150px;" /><br>
				<input id="uploadImage" type="file" name="path" onchange="PreviewImage();" />
				<br>
				<br>
				<input type="submit" width="120" height="24" name="simpan" value="POSTING BERITA" >
				</p>
				</form>
				</div>
			</div>
			</div>
  </div>
</div>
</body>
</html>