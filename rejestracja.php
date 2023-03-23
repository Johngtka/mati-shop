<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        section {
            width: 100%;
            height: 100vh;
            text-align: center;
        }

        main {
            padding: 30px;
            width: 15%;
            margin-left: auto;
            margin-right: auto;
            border: 2px solid #000;
            border-radius: 1pc;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="email"],
        input[type="password"] {
            padding: 5px;
            margin-bottom: 10px;
            border-radius: 5px;
            border: 1px solid #ccc;
        }

        input[type="reset"],
        input[type="submit"] {
            padding: 5px 15px;
            margin-right: 10px;
            border-radius: 5px;
            border: none;
            cursor: pointer;
        }

        input[type="reset"] {
            background-color: #ccc;
        }

        input[type="submit"] {
            background-color: orange;
            color: #fff;
        }

        a {
            font-family: Arial;
            text-decoration: none;
            font-weight: 800;
            color: #fff;
            padding: 5px;
            background-color: orange;
            border-radius: 5px;
            font-size: 15px;
        }
    </style>
    <title>Rejestracja</title>
</head>

<body style="margin: 0">
    <section>
        <main>
            <form action="register.php" method="post">
                <label>Imie: <input type="text" name="imie" required></label><br>
                <label>Nazwisko: <input type="text" name="nazwisko" required></label><br>
                <label>Email: <input type="email" name="mail" required></label><br>
                <label>Login: <input type="text" name="login" required></label><br>
                <label>Hasło: <input type="password" name="haslo" required></label><br>
                <?php
                if (isset($_SESSION['groot'])) {
                    echo $_SESSION['groot'] . "<br>";
                    unset($_SESSION['groot']);
                }
                ?>
                <input type="reset" value="Wyszyść">
                <input type="submit" value="Zarejestruj">
            </form>
            <br><a href="index.php">Powrót</a>
        </main>
    </section>
</body>

</html>