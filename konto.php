<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Elektronika dla Ciebie</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
</head>

<body style="margin: 0">
    <section style="width: 100%; height: 100vh; text-align: center">
        <main style="padding: 30px; width: 20%; margin-left: auto; margin-right: auto; border: 2px solid #000; border-radius: 1pc">
            <form action="login.php" method="post">
                <label>Login: <input type="text" name="login"></label><br>
                <label>Hasło: <input type="password" name="haslo"></label><br>
                <?php
                if (isset($_SESSION['error'])) {
                    echo $_SESSION['error'] . "<br>";
                    unset($_SESSION['error']);
                }
                ?>
                <input type="reset" value="Wyszyść">
                <input type="submit" value="Zaloguj">
            </form>
            <br><a href="#" style="font-family: arial; text-decoration: none; font-weight: 800; color: #fff; padding: 10px; background-color: orange; border-radius: 5px; font-size: 15px">Zarejestruj</a>
        </main>
    </section>
</body>

</html>