<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div class="adding">
<h3>Add new user</h3>
<form action="../vendor/createUsersForm.php" method="post">
    <p>First Name</p>
    <input type="text" name="firstName">
    <p>Last Name</p>
    <input type="text" name="lastName">
    <p>email</p>
    <input  type="email" name="email">
    
    <p>position</p>
  <select name="position">
    <option value="president">president</option>
    <option value="vice president">vice president</option>
    <option value="manager">manager</option>
    <option value="novice" selected>novice</option>
  </select>
    <p>shares amount</p>
    <input  type="number" name="sharesAmount">
    <p>Start Date (format: 2009-11-03 11:24:00)</p>
    <input type="data" name="startDate"><br> <br>
    <button type="submit">Add new user</button> 
</div>
</body>
</html>