<?
error_reporting(E_ALL);
@session_start();
$url = 'https';
$url .= "://";
if ($_SERVER["SERVER_PORT"] != "80") {
	$url .= $_SERVER["SERVER_NAME"];
} else {
	$url .= $_SERVER["SERVER_NAME"];
}
$url = $url."/fitbowl/";
$_SESSION["url"] = $url;
$_SESSION["siteden"] = 1;
$sayfaDizi=explode("/", @$_GET["sayfa"]);
$sayfa = @$sayfaDizi[0];
$title = "Karaca | Fitbowl";
$aciklama = "Karaca | Fitbowl";
if ($sayfa == "") {
	$sayfa = "ana-sayfa";
}
if ($sayfa != "ana-sayfa") {
	$sayfa = "ana-sayfa";
}
if ($sayfa == "tesekkurler") {
	$title = "Karaca | Fitbowl";
}
?>
<!DOCTYPE html>
<html>
    <head>
    	<meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="author" content="Maya Web">
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" />
	    <link rel="shortcut icon" href="<?=$url;?>favicon.ico" />
        <title><? echo $title ?></title>
        <meta name="title" content="<? echo $title ?>" />
        <meta name="Description" content="<? echo $aciklama ?>" />
        <meta name="google" content="notranslate">
        <meta name="Robots" content="index, follow">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <?
		require ("assets/css/ust.php");
        require ("assets/js/ust.php");
		include("assets/css/alt.php");
        include("assets/js/alt.php");
        ?>
        <script>
            url = "<?=$url;?>";
        </script>
    </head>
    <body>
    	<div id="results"><div class="alert" id="alert"></div></div>
    	<?
		include("icerik/".$sayfa.".php");
        include("assets/js/function.php");
        ?>
    </body>
</html>