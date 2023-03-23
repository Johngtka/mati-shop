<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>Elektronika dla Ciebie</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
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
</head>

<body style="margin: 0">
    <section>
        <main>
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
            <br><a href="rejestracja.php">Zarejestruj</a>
        </main>
    </section>
</body>

</html>