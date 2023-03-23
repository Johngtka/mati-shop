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
    $regtab = [
        'imie' => $_POST['imie'],
        'nazwisko' => $_POST['nazwisko'],
        'mail' => $_POST['mail'],
        'login' => $_POST['login'],
        'haslo' => $_POST['haslo']
    ];

    $imie = mysqli_real_escape_string($conn, $regtab['imie']);
    $nazwisko = mysqli_real_escape_string($conn, $regtab['nazwisko']);
    $mail = mysqli_real_escape_string($conn, $regtab['mail']);
    $login = mysqli_real_escape_string($conn, $regtab['login']);
    $haslo = mysqli_real_escape_string($conn, $regtab['haslo']);

    $result = $conn->query("SELECT * FROM users WHERE `login`='$login'");

    if ($result->num_rows == 1) {
        $_SESSION['groot'] = '<span style="color:red">Taki użytkownik juz istnieje</span>';
        header('Location: rejestracja.php');
        exit();
    } else {
        unset($_SESSION['groot']);
        $conn->query("INSERT INTO users VALUES (NULL,'$imie','$nazwisko','$mail','$login','$haslo')");
        $conn->close();
        header('Location: konto.php');
        exit();
    }
}
