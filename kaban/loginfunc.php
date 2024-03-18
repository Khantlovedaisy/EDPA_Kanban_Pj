<?php
require_once("DBConnection.php");

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    // $name = $_POST["name"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    // Perform basic validation
    if ( empty($email) || empty($password)) {
        echo '
        <script>
            window.location.href = "login.php";
            alert("All fields are required");
        </script>';
        exit;
    }

    // Check if the user already exists in the database
    $db = new DBConnection();
    $conn = $db->getConnection();
    $table = "users";
    $query = "
        SELECT * FROM $table WHERE email = '$email' AND password = '$password'
    ";
    $result = $conn->query($query);

    if ($result->num_rows > 0) {
        // If the user already exists, redirect to switch.php
        header("Location: index.php");
        exit;
     } else {
        echo  '
        <script>
            window.location.href = "login.php";
            alert("This user does not exist");
        </script>';
    }
}
?>

