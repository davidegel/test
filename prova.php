<?php
include(dirname(__DIR__). '/angularjs/opt_autoload/opt_autoload.php');

use classes\Regioni;

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

$reg = new Regioni;
$loopRegioni = $reg->getRegioni();

if(isset($_GET['invia'])) {

   if($reg->ChekRegioni($_GET['regioni'],$_GET['province'])) {

    echo 'ok';
    
   }else {

       echo 'err';
   }
   

}

?>
    
<form action="" method="get">
<select id="regioni" name = "regioni">
  
  <?php for ($i=0; $i < count($loopRegioni) ; $i++) { ?>

  <option value="<?php echo $loopRegioni[$i]; ?>" 
  <?php if(isset($_GET['regioni']) && $_GET['regioni'] == $loopRegioni[$i])
  { echo "selected"; } ?>>
  <?php echo $loopRegioni[$i]; ?>  
  </option>
  
  <?php } ?>

</select>


<?php if(isset($_GET['regioni'])) { ?>

<select id="province" name = "province">
  
  <?php
  $provincia = $_GET['province'];
  $loopProvince = $reg->getProvince($_GET['regioni']);
  ?>

    <?php for ($i=0; $i < count($loopProvince) ; $i++) { ?>
    <option value="<?php echo $loopProvince[$i]; ?>" 
    <?php if(isset($provincia) && $provincia == $loopProvince[$i])
    { echo "selected"; } ?>>
    <?php echo $loopProvince[$i]; ?>  
    </option>
    <?php } ?>

</select>

<?php } ?>


<p>
<input type="submit" value="seleziona">

<?php

if (isset($_GET['regioni']) && isset($_GET['province'])) { ?>

  <input type="submit" value="invia" name = "invia"> 

<?php } ?>

</form>

</body>
</html>