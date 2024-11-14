<?php
include 'connexion.php';


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM enseignant WHERE email='$username' AND password='$password'";
    $result = $mysqli->query($query); 


    if ($result && $result->num_rows == 1) {

        header("Location: prof.php");
        exit;
    } else {
        echo "<script>
        alert('Invalid credentials');
        window.location.href = 'prof.html'; 
      </script>";
    }
}
?>
