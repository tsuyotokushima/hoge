<!-- php  -->
<meta  charset="utf-8">
<form action = "mission_2-4.php" method = "post">
<input type = "text" name ="message" value = ""><br/>
<input type = "submit" >
</form>


<?php
if (!empty($_POST["message"])){
	
	$filename ="mission_2-4.txt";
	$hensu=$_POST["message"];
	$fp=fopen($filename,"a");//書き込み用ファイルを開く
	fwrite ($fp,$hensu."\n");//追記
	$fp=fopen($filename,"r");//読み取りモードにする
	
	$fileline = file($filename);
	foreach ($fileline as $value){
	echo $value."<br>";
	}
fclose($fp);
}
?>
