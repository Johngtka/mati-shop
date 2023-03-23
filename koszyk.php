<?php
require_once('control.php');
?>
<!DOCTYPE HTML>
<html lang="pl">

<head>
    <meta charset="utf-8" />
    <title>Podsumowanie zamówienia</title>
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h2 {
            margin-top: 50px;
            font-size: 28px;
        }

        table {
            margin: 50px auto;
            border-collapse: collapse;
            width: 80%;
            max-width: 600px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
        }

        td,
        th {
            padding: 15px;
            border: 1px solid #ffffff;
            text-align: left;
        }

        th {
            background-color: #ffffff;
            font-size: 18px;
            font-weight: bold;
        }

        a {
            display: inline-block;
            margin-top: 50px;
            background-color: #f3971b;
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 15px 30px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #353535;
        }
    </style>
</head>

<body>

    <?php
    $produkt1 = isset($_POST['produkt1']) ? $_POST['produkt1'] : 0;
    $produkt2 = isset($_POST['produkt2']) ? $_POST['produkt2'] : 0;
    $produkt3 = isset($_POST['produkt3']) ? $_POST['produkt3'] : 0;
    $produkt4 = isset($_POST['produkt4']) ? $_POST['produkt4'] : 0;
    $produkt5 = isset($_POST['produkt5']) ? $_POST['produkt5'] : 0;
    $produkt6 = isset($_POST['produkt6']) ? $_POST['produkt6'] : 0;
    $produkt7 = isset($_POST['produkt7']) ? $_POST['produkt7'] : 0;
    $produkt8 = isset($_POST['produkt8']) ? $_POST['produkt8'] : 0;
    $produkt9 = isset($_POST['produkt9']) ? $_POST['produkt9'] : 0;

    // Check if the value is empty, and set it to 0 if it is
    $produkt1 = empty($produkt1) ? 0 : $produkt1;
    $produkt2 = empty($produkt2) ? 0 : $produkt2;
    $produkt3 = empty($produkt3) ? 0 : $produkt3;
    $produkt4 = empty($produkt4) ? 0 : $produkt4;
    $produkt5 = empty($produkt5) ? 0 : $produkt5;
    $produkt6 = empty($produkt6) ? 0 : $produkt6;
    $produkt7 = empty($produkt7) ? 0 : $produkt7;
    $produkt8 = empty($produkt8) ? 0 : $produkt8;
    $produkt9 = empty($produkt9) ? 0 : $produkt9;

    $suma = 99.99 * $produkt1 + 217.99 * $produkt2 + 429.99 * $produkt3 + 429.99 * $produkt4 + 429.99 * $produkt5 + 429.99 * $produkt6 + 429.99 * $produkt7 + 429.99 * $produkt8 + 429.99 * $produkt9;
    ?>

    <h2>Podsumowanie zamówienia</h2>

    <table>
        <tr>
            <th>Produkt</th>
            <th>Cena</th>
            <th>Ilość</th>
        </tr>
        <tr>
            <td>Smart Glasses</td>
            <td>99.99 PLN/szt</td>
            <td><?php echo $produkt1; ?></td>
        </tr>
        <tr>
            <td>Smartbuty</td>
            <td>217.99 PLN/szt</td>
            <td><?php echo $produkt2; ?></td>
        </tr>
        <tr>
            <td>Smart Shoes</td>
            <td>429.99 PLN/szt</td>
            <td><?php echo $produkt3; ?></td>
        </tr>
        <tr>
            <td>Interactive wall</td>
            <td>399.99 PLN/szt</td>
            <td><?php echo $produkt4; ?></td>
        </tr>
        <tr>
            <td>Holographic Projector</td>
            <td>699.99 PLN/szt</td>
            <td><?php echo $produkt5; ?></td>
        </tr>
        <tr>
            <td>Electronic Nanny</td>
            <td>2999.99 PLN/szt</td>
            <td><?php echo $produkt6; ?></td>
        </tr>
        <tr>
            <td>Watch for Animals</td>
            <td>349.99 PLN/szt</td>
            <td><?php echo $produkt7; ?></td>
        </tr>
        <tr>
            <td>Smart Jacket</td>
            <td>549.99 PLN/szt</td>
            <td><?php echo $produkt8; ?></td>
        </tr>
        <tr>
            <td>Smart Keyboard</td>
            <td>199.99 PLN/szt</td>
            <td><?php echo $produkt9; ?></td>
        </tr>
        <td colspan="9">SUMA</td>
        <td><?php echo $suma; ?> PLN</td>
        </tr>
    </table>

    <a href="index.php">Powrót do sklepu</a>

</body>

</html>