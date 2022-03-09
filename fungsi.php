<?php 

function sapa($nama){
	$sapa = "Selamat Datang $nama";
	return $sapa;
}

echo sapa("Baihaki");
echo "<br>";
echo sapa("Adit");
echo "<br>";
echo sapa("Dodit");
?>