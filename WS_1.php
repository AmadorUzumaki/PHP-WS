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

$elements_3='{
  "jmperezperez": true,
  "thelinmichael": false,
  "wizzler": false
}';
echo "3 elements string format<br>";
echo var_dump($elements_3),"<br>";
echo print_r($elements_3), "<br>";

$result_arr_ass = json_decode($elements_3, true);
echo "jmperezperez ",$result_arr_ass["jmperezperez"],"<br>";
echo "thelinmichael ",$result_arr_ass["thelinmichael"],"<br>";
echo "wizzler ",$result_arr_ass["wizzler"],"<br>";

?>
