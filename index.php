<?php 

$wsdl   = "http://35.196.0.9/ci-soap/index.php/GloboServer?wsdl";
$client = new SoapClient($wsdl, array('trace'=>1));  // The trace param will show you errors stack

// web service input params
$request_param = array(
	'prueba' => 10,
);

try
{
	echo "Primer request:<br>";
    $responce_param = $client->soapTest($request_param);
    echo $responce_param;
    echo "<br>Segundo request:<br>";
    $responcePruebaTec = $client->pruebaTec(10);
   	echo $responcePruebaTec;
} 
catch (Exception $e) 
{ 
    echo "<h2>Exception Error!</h2>"; 
    echo $e->getMessage(); 
}

?>