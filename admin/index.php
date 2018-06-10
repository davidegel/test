<?php include(dirname(__DIR__). '/../angularjs/template/includes/autoload.php'); ?>
<?php

use classes\OOP\Articoli;
use tools\Helper;
use classes\DB\DB as Database;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$articoli = new Articoli;

$database = new Database;
$db = $database->getConnection();

$articoli = new Helper($db);

?>

</body>
</html>