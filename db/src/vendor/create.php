<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
</head>
<body>
<?php
    require_once '../config/connect.php';
    
    for ($i = 3; $i <= 100; $i++) {
        $arrayNames = array("Ben", "Alex", "Brad", "Tina", "Lexi", "Alan", "Nico", "Jerremy");
        $arrayLastNames = array("Black", "White", "Kreed", "Smith", "Thompson", "Miller", "Spenser", "Anderson");
        
        $name = $arrayNames[array_rand($arrayNames, 1)];
        $surname = $arrayLastNames[array_rand($arrayLastNames, 1)];

        $email = $name . $surname . '@example.org';
        $arrayAffiliates = array(1, 2, 3, 4);
        $affilities = $arrayAffiliates[array_rand($arrayAffiliates, 1)];
        $position = "novice";
        $amount = rand(0, 500);
        
        $startDate = rand(1273438801, 1630454400);
        $parentId[$i] = rand(1, $i);

        $a = array_count_values($parentId);
        //print_r($a);
        
       
        
        for ($j = 0; $j<count($a); $j++) {
          if($a[array_keys($a)[$j]] > 4) {
            $parentId[$i]=0;
          }
        }
        
        
        ?>
            <table>
                <tr>
                    <td><?= $i ?></td>
                    <td><?= $name ?></td>
                    <td><?= $surname ?></td>
                    <td><?= $email ?></td>
                    <td><?= $position ?></td>
                    <td><?= $amount ?></td>
                    <td><?= $startDate ?></td>
                    <td><?= $parentId[$i] ?></td>
                    <td><a href = "update.php?id=<?= $i?>">Update</a></td>
                </tr>
            </table>
       
        <?php      
      $sql = 'INSERT INTO participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (:id, :firstName, :lastName, :email, :position, :sharesAmount, :startDate, :parentId)';
      $statement = $pdo->prepare($sql);
      $statement->execute([
          'id' => $i,
          'firstName' => $name,
          'lastName' => $surname,
          'email' => $email,
          'position' => $position,
          'sharesAmount' => $amount,
          'startDate' => $startDate,
          'parentId' => $parentId[$i]
      ]); 
    }
    
    ?>
    

</body>
</html>