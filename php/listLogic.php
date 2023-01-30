<?php
include("apiLogic.php");
// Build array of the relevant data
$showInfo = [
"country" => [$data["data"][0]['country']],
"state" => [$data["data"][0]['state']],
"city" => [$data["data"][0]['city']],
"venue" => [$data["data"][0]['venue']]
];

foreach ($showInfo as $key => $value) {
echo "<li>" . $key . ":" . $value[0] . "</li>";
}

?>