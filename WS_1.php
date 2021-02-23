<?php
/*
https://developer.spotify.com/console/get-playlist-follower-contains
JSON array format 1 element
[
  true
]
JSON array format 3 elements
[
  true,
  false,
  false
]

ids
jmperezperez,thelinmichael,wizzler

JSON object format 1 element
{
  "jmperezperez": true
}
JSON object format 3 elements
{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}
JSON string format 1 element
"{
  "jmperezperez": true
}"
JSON string format 3 elements

"{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}"

*/

$jmperezperez = array(true);

echo "PHP array<br>";
echo var_dump($jmperezperez),"<br>";
echo print_r($jmperezperez), "<br>";

$jmperezperez_json=json_encode($jmperezperez);

echo "JSON array format<br>";
echo var_dump($jmperezperez_json),"<br>";
echo print_r($jmperezperez_json), "<br>";

$php_array = array(true, false, false);

echo "PHP array<br>";
echo var_dump($php_array),"<br>";
echo print_r($php_array),"<br>";

?>
