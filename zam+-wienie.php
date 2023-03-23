<!DOCTYPE HTML>
<html lang="pl">
<head>
    <meta charset="utf-8" />
    <title>Zamówienie Towaru</title>
    <style>
        body {
            background-color: #ffffff;
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }

        h1 {
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

        td, th {
            padding: 15px;
            border: 1px solid #ffffff;
            text-align: left;
        }

        th {
            background-color: #ffffff;
            font-size: 18px;
            font-weight: bold;
        }

        input[type="text"] {
            padding: 8px;
            font-size: 16px;
            border-radius: 5px;
            border: none;
            box-shadow: 0px 0px 5px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        input[type="submit"] {
            background-color: #f3971b;
            color: #ffffff;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            border: none;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #353535;
        }
    </style>
</head>

<body>

	<h1>Zamówienie online</h1>
	<form action="koszyk.php" method="post"> 
	    Smart Glasses (99.99 PLN/szt): 
		<input type="text" name="produkt1" />	
			<br /><br />
			Smartbuty (217.99 PLN/szt): 
		<input type="text" name="produkt2" />
			<br /><br />
			Smart Shoes (429.99 PLN/szt): 
		<input type="text" name="produkt3" />
			<br /><br />
			Interactive wall (399.99 PLN/szt): 
		<input type="text" name="produkt4" />
			<br /><br />
			Holographic Projector (699.99 PLN/szt): 
		<input type="text" name="produkt5" />
			<br /><br />
			Electronic Nanny (2999.99 PLN/szt): 
		<input type="text" name="produkt6" />
			<br /><br />
			Watch for Animals (349.99 PLN/szt): 
		<input type="text" name="produkt7" />
			<br /><br />
			Smart Jacket (549.99 PLN/szt): 
		<input type="text" name="produkt8" />
			<br /><br />
			Smart Keyboard (199.99 PLN/szt): 
		<input type="text" name="produkt9" />
			<br /><br />
		<input type="submit" value="Wyślij zamówienie" />
	</form>

</body>
</html>
