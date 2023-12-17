<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Process the form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $subscribe = isset($_POST["subscribe"]) ? $_POST["subscribe"] : "No";
    $gender = $_POST["gender"];

    // You can perform additional server-side validation here

    // Respond with JSON data (you can customize this based on your needs)
    echo json_encode([
        "name" => $name,
        "email" => $email,
        "age" => $age,
        "subscribe" => $subscribe,
        "gender" => $gender
    ]);
}
?>
