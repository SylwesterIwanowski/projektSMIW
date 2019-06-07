<?php
$response = "";

$data = fopen("data.txt", "r") or die("Unable to read data file!");
$pos = -2; // Skip final new line character (Set to -1 if not present)
$currentLine = '';

$linesToShow = 0; //enter number
$counter = 0;
  
$linesToShow--;
while ( /*$counter <= $linesToShow &&*/ -1 !== fseek($data, $pos, SEEK_END)) {
    $char = fgetc($data);
    if ("\n" == $char) {
      //$parts = explode('*', $currentLine);
      //$second = explode('$', $parts[1]);
      //$dateA = DateTime::createFromFormat('G:i:s j-n-Y', $second[0]);
      //$dateB = DateTime::createFromFormat('G:i:s j-n-Y', $parts[0]);
      
      //$response = $response . date_format($dateB,'Y-m-dTH:i:s') . '*' . date_format($dateA,'Y-m-dTH:i:s') . '$' . $second[1] . "\n";
      $response = $response . $currentLine . "\n";
      $currentLine = '';
      //$counter++;
    } else {
      $currentLine = $char . $currentLine;
    }
    $pos--;
}
fclose($data);
//$response = $response . $currentLine;  //final line
$response= substr($response . $currentLine, 0, -1); //final line
  
echo $response;
?>