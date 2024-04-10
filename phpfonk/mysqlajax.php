<?
error_reporting(E_ALL);
@session_start();
$url = $_SESSION["url"];
if (isset($_SESSION["siteden"])) {
	$dosya = $_POST["dosya"];
	require_once("../phpfonk/".$dosya.".php");
}
?>