<?php //include(dirname(__DIR__). '/angularjs/template/includes/autoload.php'); ?>
<?php
include(dirname(__DIR__). '/angularjs/opt_autoload/opt_autoload.php');
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

$database = new Database;
$db = $database->getConnection();

$articoli = new Helper($db);
$statement = $articoli->getUser();
$articoli->setMode();
    
    while ($result = $statement->fetch()) {
          
        echo $result['email'];
    }

if($articoli->OneInsert() > 0) {

    echo 'ok inserito';
}

?>

</body>
</html>