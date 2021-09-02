<?php

for ($i=0; $i<12; $i++) {
echo $parentID[$i] = rand(1,3) . " ";

$a = array_count_values($parentID);
//print_r($a);

echo "<br />";

for ($j = 0; $j<count($a); $j++) {
  if($a[array_keys($a)[$j]] > 4) {
    $parentID[$j]=0;
  }
}
// while($number = current($parentID)) {
//   if($a[array_keys($a)[$i]] > 4) {
    
//   }
// }
echo "<br />" . "<br />";
for ($k = 0; $k<count($parentID); $k++) {
  echo $parentID[$k] . " ";
}
}

?>
