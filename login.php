<?php
session_start();
if (!isset($_POST['login']) || !isset($_POST['haslo'])) {
    header('Location: konto.php');
} else {
    $login = $_POST['login'];
    $pass = $_POST['haslo'];
    try {
        $conn = new mysqli("localhost", "root", "", "sklep");
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
    } catch (mysqli_sql_exception $error) {
        echo "Błąd połączenia z bazą danych: " . $error->getCode();
        exit;
    }

    // Zabezpieczenie przed atakami SQL Injection
    $username = mysqli_real_escape_string($conn, $login);
    $password = mysqli_real_escape_string($conn, $pass);

    $result = $conn->query("SELECT * FROM users WHERE `login`='$username' AND haslo='$password'");

    // Sprawdzenie, czy zapytanie zwróciło jakieś wyniki
    if ($result->num_rows == 1) {
        $_SESSION['nazwa'] = [
            'log' => $username,
            'pass' => $password,
        ];
        $conn->close();
        header('Location: index.php');
    } else {
        $_SESSION['error'] = '<span style="color: red">Zły login lub hasło</span>';
        header('Location: konto.php');
        exit;
    }
}
