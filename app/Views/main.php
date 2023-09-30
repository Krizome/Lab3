<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="/save" method="post">
    <label>Id</label>
    <input type="text" name="Id">
    <label>name</label>
    <input type="text" name="name">
    <label>username</label>
    <input type="text" name="username">
    <br>
    <input type="submit" value="submit"
</form>

 <table border= "1">
    <tr>
        <th>Id </th>
        <th>name </th> 
        <th>username </th>
    </tr>
   <?php foreach ($bb as $bebe): ?>
    <tr>
        <td><?= $bebe ['id']?></td>
        <td><?= $bebe ['name']?></td>
        <td><?= $bebe ['username']?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>