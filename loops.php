<?php
  $count = 0; 
  while($count < 3) {
    echo "count: $count <br>";
    $count++;
  }

  do {
    echo "count: $count <br>";
    $count++;
  } while($count < 2);

  for($i=1; $i<=3; $i++){
    echo "count: $i <br>";
  }

  $names = array("Tom", "Dick", "Harry");

  // Loop through names array
  foreach($names as $value){
    echo "$value <br>";
  }
?>