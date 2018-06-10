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
<script>

function showState(Country_Id) {
   document.frm.submit();
}

function showCity(State_Id) {
   document.frm.submit();
}

</script>


<?php

$reg = new Regioni;
$loopRegioni = $reg->getRegioni();

if(isset($_POST['invia'])) {

   if($reg->ChekRegioni($_POST['Country_Id'],$_POST['state_id'])) {

    echo 'ok';
    
   }else {

       echo 'err';
   }
   

}

?>
    
<form action="" method="post" name="frm" id="frm">

<select name="Country_Id" id="Country_Id" onChange="showState(this.value);">
<option value="">--Select--</option>
<?php
for ($i=0; $i < count($loopRegioni) ; $i++) {
?>

<option value="<?php echo $loopRegioni[$i]; ?>" 
  <?php if($_REQUEST["Country_Id"] == $loopRegioni[$i])
  { echo "selected"; } ?>>
  <?php echo $loopRegioni[$i]; ?>  
  </option>

<?php
}
?>
</select>



<select name="state_id" id="state_id" onChange="showCity(this.value);">
<option value="">--Select--</option>
<?php

$loopProvince = $reg->getProvince($_REQUEST['Country_Id']);

?>
<?php for ($i=0; $i < count($loopProvince) ; $i++) { ?>

<option value="<?php echo $loopProvince[$i]; ?>" 
    <?php if($loopProvince[$i] == $_REQUEST["state_id"])
    { echo "selected"; } ?>>
    <?php echo $loopProvince[$i]; ?>  
    </option>

<?php
 }
?>
</select>


<input type="submit" value="invia" name="invia">
</form>

</body>
</html>