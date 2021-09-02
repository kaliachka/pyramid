<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
<?php
require_once '../vendor/updateUsers.php';
$servername = "localhost";
$username = "homestead";
$password = "kseniya";
$dBName = "exercise";

   // require_once 'connect.php';
    $conn = new mysqli($servername, $username, $password, $dBName);
    if ($conn->connect_error) {
        die("connection failed: " .$conn->connect_error);
    }
    echo "Connection successfully";
    $id = $_GET['id'];
    $participant = mysqli_query($conn, "SELECT * FROM `participants` WHERE `id` = '$id'");
    $participant = mysqli_fetch_assoc($participant);
   // print_r($participant);

    //$stmt = $db->prepare("SELECT * FROM table WHERE id =  ");
    // $stmt->bindValue(1, $id, PDO::PARAM_INT);
    // $stmt->bindValue(2, $name, PDO::PARAM_STR);
    // $stmt->execute();
    // $rows = $stmt->fetchAll(PDO::FETCH_ASSOC)
?>



<div class="adding">
<h3> Update user</h3>
<form action="../vendor/updateUsers.php" method="post">
    <p>First Name</p>
    <input type="text" name="firstName" value="<?= $participant['firstName']?>">
    <p>Last Name</p>
    <input type="text" name="lastName" value="<?= $participant['lastName']?>">
    <p>email</p>
    <input  type="email" name="email" value="<?= $participant['email']?>">
    
    <p>position</p>
  <select name="position">
      
    <option value="vice president">vice president</option>
    <option value="president">president</option>
    <option value="manager">manager</option>
    <option value="novice" >novice</option>
    value="<?= $participant['position']?>"
  </select>
    <p>shares amount</p>
    <input  type="number" name="sharesAmount" value="<?= $participant['sharesAmount']?>">
    <p>Start Date (format: 2009-11-03 11:24:00)</p>
    <input type="data" name="startDate" value="<?= $participant['startDate']?>"><br> <br>
    <button type="submit">Update user</button> 

</form>
</div>
</body>
</html>