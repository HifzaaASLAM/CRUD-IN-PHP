<?php
define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("DATABASE", "crud-app");
$connection=mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);
if(!$connection){

    die("not connected...");
}
else{
    echo "connected...";
}









?>