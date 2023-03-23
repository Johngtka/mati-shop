<?php
session_start();
if (isset($_SESSION['nazwa'])) {
    $user = $_SESSION['nazwa'];
} else {
?>
    error
<?php
    exit;
}
