<?
error_reporting(E_ALL);
if (@$_SESSION["siteden"] == 1 && $_POST["cname"] != "" && $_POST["breed"] != "" && $_POST["age"] != "" && $_POST["weight"] != "" && $_POST["yname"] != "" && $_POST["surname"] != "" && $_POST["email"] != "" && $_POST["mobile"] != "" && $_POST["address"] != "" && isset($_POST['agree'])) {
	
	$tarih = date("Y-m-d");
	$tarih = $tarih;
	$ekle = $tarih."; ".$_POST["cname"]."; ".$_POST["breed"]."; ".$_POST["age"]."; ".$_POST["weight"]."; ".$_POST["yname"]."; ".$_POST["surname"]."; ".$_POST["email"]."; '".$_POST["mobile"]."'; ".$_POST["address"]."\n";
	$dosya = fopen ("../formlar.csv" , 'a');
	
	fwrite($dosya, $ekle);
	fclose ($dosya);
	
	echo json_encode(array(1));
} else {
	echo json_encode(array(0));
}
?>