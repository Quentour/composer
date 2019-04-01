<!DOCTYPE html>
<html lang=en>

<head>
  <title></title>
  <meta charset="UTF-8">
</head>

<body>

<!-- autoloading -->
<?php
require '../vendor/autoload.php';

use HelloWorld\SayHello;

echo SayHello::world();


use App\Wcs\Hello;
$hello = new Hello();
echo $hello->talk();

?>	



</body>

</html>