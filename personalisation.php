
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $pagetitle; ?></title>
</head>
<body>
<?php

$ROOT = __DIR__;
$DS = DIRECTORY_SEPARATOR;

require_once("{$ROOT}{$DS}view{$DS}header.php");

$preference = $_POST['pref'] ;

setcookie("TestCookie", $preference, time()+3600);  /* expire dans 1 heure = 3600 secondes */

if(isset($_COOKIE["TestCookie"]))
{
    echo ( "Cookie OK");
}


require_once("{$ROOT}{$DS}view{$DS}footer.php");
?>
</body>
</html>



