<?php
// include the php script
include("include/geoip.inc");

// open the geoip database
$gi = geoip_open("include/GeoIP.dat",GEOIP_STANDARD);
$ip =$_SERVER['REMOTE_ADDR'];


// to get country code
$country_code = geoip_country_code_by_addr($gi, $_SERVER['REMOTE_ADDR']);



// to get country name
$country_name = geoip_country_name_by_addr($gi, $_SERVER['REMOTE_ADDR']);
echo "IP : ".$ip."<br/>";
echo "Country : ".$country_name." ( ".$country_code." ) ";

// close the database
geoip_close($gi);


?>