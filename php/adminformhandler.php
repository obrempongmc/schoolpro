<?php 
if($_SERVER["REQUEST_METHOD"] == "POST"){
    echo "hello"; // For debugging purposes

    $username = $_POST["username"];
    $password = $_POST["adminpassword"];
    try {
        require_once("config.php");

        $query = "INSERT INTO admintbl (username, password) VALUES (?, ?)";
        $stmt = $pdo->prepare($query);
        $stmt->execute([$username, $password]);

        $stmt = null;
        $pdo = null;
        // die(); // You might not need die() here, as it stops further execution.

        // Redirect after successful insertion
        header("location: index.php");
        exit();

    } catch (PDOException $ee) {
        echo "Connection failed: " . $ee->getMessage();
    }
} else {
    header("location: adminreg.php");
    exit();
}
?>
