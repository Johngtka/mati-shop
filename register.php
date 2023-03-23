<?php
session_start();
if (!isset($_POST['login']) && !isset($_POST['haslo'])) {
    header('Location: rejestracja.php');
    exit();
} else {
    try {
        $conn = new mysqli("localhost", "root", "", "sklep");
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    } catch (mysqli_sql_exception $error) {
        echo "Błąd połączenia z bazą danych: " . $error->getCode();
        exit;
    }
}
