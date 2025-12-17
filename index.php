<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP MySQLi Tutorial</title>
</head>
<body>
    
<h1>PHP MySQLi Tutorial</h1>
<form method="POST" action="insert.php">
    <p>Podaj imię i nazwisko:</p>
    <input type="text" name="imie" placeholder="Imię">
    <input type="text" name="nazwisko" placeholder="Nazwisko">
    <button type="submit">Wyślij</button>
</form>
<table border="1">
    <tr>
        <th>Imię</th>
        <th>Nazwisko</th>
        <th>Edytuj</th>
        <th>Usuń</th>
    </tr>
<?php include 'select.php'; ?>

</table>
</body>
</html>