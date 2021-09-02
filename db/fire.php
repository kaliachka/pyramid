 <?php

// $servername = "localhost";
// $username = "homestead";
// $password = "kseniya";
// $dBName = "exercise";

// $conn = new mysqli($servername, $username, $password, $dBName);
// if ($conn->connect_error) {
//     die("connection failed: " .$conn->connect_error);
// }
// echo "Connection successfully";

for ($i=0; $i<12; $i++) {
    echo $parentID[$i] = rand(1,3) . " ";
    }
    $a = array_count_values($parentID);
    //print_r($a);
    
    echo "<br />";
    
    for ($i = 0; $i<count($a); $i++) {
      if($a[array_keys($a)[$i]] <= 4) {
        
        //$parentID[$i]=0;
      }
    }
    echo "<br />" . "<br />";
    for ($i = 0; $i<count($parentID); $i++) {
      echo $parentID[$i] . " ";
    }
?>
 