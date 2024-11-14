<?php
// Include the database connection file
include 'connexion.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $class = $_POST['class'];
    $email = $_POST['email'];
    $password = $_POST['pw']; // Note: You should hash passwords for security, but for simplicity, we'll leave it as is for now

    // SQL query to insert data into the database
    $query = "INSERT INTO enseignant (nom, prenom, matier, email, password) VALUES ('$nom', '$prenom', '$class', '$email', '$password')";

    // Execute the query
    if ($mysqli->query($query) === TRUE) {
        // Display JavaScript alert
        echo "<script>alert('prof ajouter avec succes');</script>";
        // Redirect to a success page using JavaScript after the alert is displayed
        echo "<script>window.location.href = 'insertp.html';</script>";
        exit;
    } else {
        // If insertion fails, display an error message
        echo "Error: " . $query . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}
?>
