<?php
$latihan  = "Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.";

function lc_first($latihan){
   $huruf = strtoupper($latihan);
   return lcfirst($huruf);
}

function uc_first($latihan){
   $huruf = strtolower($latihan);
   return ucfirst($huruf);
}


function toupper($latihan){
	return strtoupper($latihan);
}

function tolower($latihan){
	return strtolower($latihan);
}

echo "<br>", lc_first($latihan);
echo "<br>";
echo "<br>", uc_first($latihan);
echo "<br>";
echo "<br>", toupper($latihan);
echo "<br>";
echo "<br>", tolower($latihan);

?>