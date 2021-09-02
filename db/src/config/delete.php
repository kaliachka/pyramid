<?php
for ($i=1; $i<=100; $i++) {

$sql = 'DELETE FROM participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (:id, :firstName, :lastName, :email, :position, :sharesAmount, :startDate, :parentId)';
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
echo "База данных удалена";
?>