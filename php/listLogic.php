<?php
include_once("apiLogic.php");

if (isset($data) && count($data["data"]) > 0) {
  if (!empty($showInfo)) {
    foreach ($showInfo as $key => $value) {
      echo "<li>" . $key . ":" . $value[0] . "</li>";
    }
  }
} else if (isset($data)) {
  echo "</h2>Sorry. Couldn't find a show on that date.</h2>";
} 

?>