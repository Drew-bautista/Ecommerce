<?php
$host = "mysql.railway.internal";  // Palitan kung iba ang host sa Railway
$port = 3306;                      // Default MySQL port
$dbname = "railway";     // Palitan ng tamang database name
$username = "root";        // Palitan ng username mula Railway
$password = "dQZkrYPhOtqUDcChjzMjKkperiBTSuWU";        // Palitan ng password mula Railway

try {
    $conn = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo " Database Connected Successfully!";
} catch(PDOException $e) {
    echo " Connection failed: " . $e->getMessage();
}
?>
