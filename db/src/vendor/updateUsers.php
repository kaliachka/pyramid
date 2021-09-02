<?php
    require_once '../config/connect.php';
    print_r ($_POST);
    echo $id = $_POST['id'];
    echo $firstName = $_POST['firstName'];
    echo $lastName = $_POST['lastName'];
    echo $email= $_POST['email'];
    echo $position = $_POST['position'];
    echo $sharesAmount = $_POST['sharesAmount'];
    echo $startDate = $_POST['startDate'];



//$sth = $dbh->prepare("UPDATE `category` SET `name` = :name WHERE `id` = :id");

//$sth->execute(array('name' => 'Виноград', 'id' => 22));

$sth = $pdo->prepare("UPDATE `participants` SET `firstName` = :firstName, `lastName` = :lastName, `email` = :email, `position` = :position, `sharesAmount` = :sharesAmount, `startDate` = :startDate WHERE `id` = :id" );

$sth->execute(array(
    'id' => $id,
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'position' => $position,
    'sharesAmount' => $sharesAmount,
    'startDate' => $startDate
));
?>
    
