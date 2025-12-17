<?php
include 'db_connect.php';

// pobranie ID z URL
$id = $_GET['id'];

// pobranie danych ucznia
$result = mysqli_query($conn, "SELECT * FROM uczniowie WHERE id=$id");
$row = mysqli_fetch_assoc($result);

// zapis zmian
if (isset($_POST['zapisz'])) {

    $imie = mysqli_real_escape_string($conn, $_POST['imie']);
    $nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
    $klasa = mysqli_real_escape_string($conn, $_POST['klasa']);

    mysqli_query($conn,
        "UPDATE uczniowie 
         SET imie='$imie', nazwisko='$nazwisko'
         WHERE id=$id"
    );

    header("Location: index.php");
}
?>

<form method="POST">
    Imię:<br>
    <input type="text" name="imie" value="<?= $row['imie'] ?>"><br><br>

    Nazwisko:<br>
    <input type="text" name="nazwisko" value="<?= $row['nazwisko'] ?>"><br><br>

    <button name="zapisz">Zapisz zmiany</button>
</form>
