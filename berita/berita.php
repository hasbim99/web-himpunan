<html>
<head>
<title>HME ITENAS - View Berita</title>
	<link rel="icon" type="image/png" href="image/icontitle.png">
	<link type="text/css" rel="stylesheet" href="style2.css"/>
</head>
<body>
<div id="wrapper">
	<div id="header">
    <h1 align="center">View Berita</h1>
	<h1 align="left"><a href="editor.php">back</a></h1>
    </div>          
    <div id="wrapper_konten">
		
		<div id="right_konten">
		<?php
            // Connect to Database
		    mysql_connect("localhost", "root", "");
		    mysql_select_db("hmeitenas");

            $kueri = mysql_query(" SELECT * FROM berita");
            while ($baris=mysql_fetch_array($kueri))
            {
             //echo $baris['Waktu'];
             //$date = DateTime::createFromFormat('Y-m-d', $baris["Waktu"]);
             //echo htmlspecialchars($date->format('F Y'), ENT_QUOTES, "UTF-8");

             $formatted = date('d-M-Y H:i:s', strtotime($baris['waktu']));
             echo "<p align='right'><a href='hapus.php?judul=".$baris[1]."'> Hapus Berita..</a></p>";
			 echo $formatted;
             echo "<br>";
             echo "Judul :".$baris[1]."<br><br>";
             echo "<img src=image/".$baris['path']." width=600px>"; 
			 echo "<br><br>Berita :".$baris[2]."<br>";
             echo"<br><br><hr>";
            }
        ?>
        </div>
    </div>
</div>
</body>
</html>