<?php
/*
*Unit conversion from lbs to Kgs and Miles to km
*
*@author @robiriondo
*/

//Number in pounds to be converted to kilos
$lbs = 210;
//Floating point value for the lbs to kilos conversion
$lbs_to_k = 0.453592;
//Use variables above to perform calculation
$conv = ($lbs * $lbs_to_k);
//Display the pounds to kilos
echo "Weight: " . $conv . "Kgs"; 

echo " ";

//Numbers in miles to convert to km
$miles = 218;
//Floating point value for the mile to kilometer conversion
$miles_2_km = 1.60934;
//Use the variables above to calculate the conversion 
$conv2 = ($miles * $miles_2_km);
//Display the miles to km
echo "Distance: " . $conv2 . "km";

?>
