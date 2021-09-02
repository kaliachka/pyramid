<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Exercise</title>
    <link rel="stylesheet" type="text/css" href="../style/style.css"/>
</head>
<body>
<?php
require_once 'connect.php';
require_once '../vendor/createUsersForm.php';

require_once 'form.php';
//require_once 'update.php';
// require_once '../conditions/position.php';
?>
  <table>
        <tr>
            <th>ID</th>
            <th>firstName</th>
            <th>lastName</th>
            <th>email</th>
            <th>position</th>
            <th>sharesAmount</th>
            <th>startDate</th>
            <th>parentid</th>
        </tr>

<?php
    const President = array('1', 'Mike', 'Patterson', 'mike_pat@example.org', 'president', '1000', '1273449600', '0');
    const VisePresident = array('2', 'Kseniya', 'Kaliachka', 'kaliachka@gmail.com', 'vise president', '500', '1273536000', '1');
    ?>
        <tr>
            <td><?= President[0] ?></td>
            <td><?= President[1] ?></td>
            <td><?= President[2] ?></td>
            <td><?= President[3] ?></td>
            <td><?= President[4] ?></td>
            <td><?= President[5] ?></td>
            <td><?= President[6] ?></td>
            <td><?= President[7] ?></td>
            <td><a href = "update.php?id=<?= President[0]?>">Update</a></td>
        </tr>
        <tr>
            <td><?= VisePresident[0] ?></td>
            <td><?= VisePresident[1] ?></td>
            <td><?= VisePresident[2] ?></td>
            <td><?= VisePresident[3] ?></td>
            <td><?= VisePresident[4] ?></td>
            <td><?= VisePresident[5] ?></td>
            <td><?= VisePresident[6] ?></td>
            <td><?= VisePresident[7] ?></td>
            <td><a href = "update.php?id=<?= VisePresident[0]?>">Update</a></td>
        </tr>
        
        <a class="deleteButton" href="delete.php">Ваша ссылка</a>
        
        <?php require_once '../vendor/create.php'; ?>
    </table>
<?php 
 $sql = 'INSERT INTO participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (:id, :firstName, :lastName, :email, :position, :sharesAmount, :startDate, :parentId)';
 $statement = $pdo->prepare($sql);
 $statement->execute([
     'id' => President[0],
     'firstName' => President[1],
     'lastName' => President[2],
     'email' => President[3],
     'position' => President[4],
     'sharesAmount' => President[5],
     'startDate' => President[6],
     'parentId' => President[7]
 ]);
 $sql = 'INSERT INTO participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (:id, :firstName, :lastName, :email, :position, :sharesAmount, :startDate, :parentId)';
 $statement = $pdo->prepare($sql);
 $statement->execute([
     'id' => VisePresident[0],
     'firstName' => VisePresident[1],
     'lastName' => VisePresident[2],
     'email' => VisePresident[3],
     'position' => VisePresident[4],
     'sharesAmount' => VisePresident[5],
     'startDate' => VisePresident[6],
     'parentId' => VisePresident[7]
 ]);

//mysqli_query($connection, 'INSERT INTO participants (id, firstName, lastName, email, position, sharesAmount, startDate, parentId) VALUES (NULL, "ARR", "ARR[2]", "wdwedw@dewkdj", "ARR[4]", 5, 123432235, 0)');

?>

</body>
</html>
