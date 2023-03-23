<?php
session_start();
unset($_SESSION['nazwa']);
header('Location: index.php');
