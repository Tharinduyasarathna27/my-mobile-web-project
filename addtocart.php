<?php 
include "logging.php";

//$connection=$x->getconnection();
$connection->query( "UPDATE mobiles set mstock=mstock-1  where mid= '".$_GET['mid']."'");
 ?>