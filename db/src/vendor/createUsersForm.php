<?php
require_once '../config/connect.php';
//print_r ($_POST);
$firstName = $_POST['firstName'];
$lastName = $_POST['lastName'];
$email= $_POST['email'];
$position = $_POST['position'];
$sharesAmount = $_POST['sharesAmount'];
$startDate = strtotime($_POST['startDate']);
$parentId = $_POST['parentId'];
echo "Successfully";
//mysqli_query($conn, "INSERT INTO `participants` (`id`, `firstName`, `lastName`, `email`, `position`, `sharesAmount`, `startDate`, `parentId`) VALUES (NULL, $firstName, $lastName, $email, $position, $sharesAmount, $startDate, $parentId)");

$sql = 'INSERT INTO participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (:id, :firstName, :lastName, :email, :position, :sharesAmount, :startDate, :parentId)';
$statement = $pdo->prepare($sql);
$statement->execute([
    'id' => NULL,
    'firstName' => $firstName,
    'lastName' => $lastName,
    'email' => $email,
    'position' => $position,
    'sharesAmount' => $sharesAmount,
    'startDate' => $startDate,
    'parentId' => $parentId
]);
?>