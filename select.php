<?php 
include 'db_connect.php';
$sql = "SELECT * FROM uczniowie";
$result = mysqli_query($conn, $sql);

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['imie'] . "</td>";
    echo "<td>" . $row['nazwisko'] . "</td>";
    echo "<td><a href=\"update.php?id=" . $row['id'] . "\">Edytuj</a></td>";
    echo "<td><a href=\"delete.php?id=" . $row['id'] . "\">Usuń</a></td>";
    echo "</tr>";
}
mysqli_close($conn);
?>