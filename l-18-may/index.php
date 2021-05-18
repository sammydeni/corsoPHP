<?php

$lorem = file_get_contents("https://restcountries.eu/rest/v2/region/europe");

// echo $lorem;

$json = json_decode($lorem);

echo "<ul>";
foreach ($json as $key => $paese) {
    echo "<li>".$paese->name."</li>";
}
echo "</ul>";
echo "</ul>";

// echo ($json[25]->name);
?>