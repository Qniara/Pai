<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Połączenie nieudane: " .mysqli_connect_error());
}
$sql = "CREATE DATABASE testDB3";
if (mysqli_query($conn, $sql)) {
    echo "Baza danych została pomyślnie utworzona pod nazwą testDB";
} else {
    echo "Błąd podczas tworzenia bazy danych: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
--------------------------------------------------------------------


<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password);
if (!$conn) {
    die("Połączenie nieudane: " .mysqli_connect_error());
}
$sql = "CREATE TABLE table(id INT AUTO_INCREMENT PRIMARY KEY, klient_id INT NOT NULL)";
if (mysqli_query($conn, $sql)) {
    echo "Tabela została pomyślnie utworzona pod nazwą table";
} else {
    echo "Błąd podczas tworzenia tabeli: " . mysqli_error($conn);
}
mysqli_close($conn);
?>
