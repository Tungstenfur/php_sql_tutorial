<?php
    include 'db_connect.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $imie = mysqli_real_escape_string($conn, $_POST['imie']);
        $nazwisko = mysqli_real_escape_string($conn, $_POST['nazwisko']);
        if(!empty($imie) && !empty($nazwisko)) {
            $sql = "INSERT INTO uczniowie (imie, nazwisko) VALUES ('$imie', '$nazwisko')";
            if (mysqli_query($conn, $sql)) {
                echo "Dodano nowy rekord";
            } else {
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }    
        }
    }
    mysqli_close($conn);
?>