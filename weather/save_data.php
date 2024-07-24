<?php

session_start();

$id = $_SESSION['id'];
$username = $_SESSION["username"];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['city'], $_POST['date'], $_POST['time'], $_POST['weather_condition'], $_POST['temperature'])) {
        $city = $_POST['city'];
        $date = $_POST['date'];
        $time = $_POST['time'];
        $weather_condition = $_POST['weather_condition'];
        $temperature = $_POST['temperature'];

        // Establishing connection to the database
        $servername = "localhost"; // Change this to your database server name
        $usrname = "root"; // Change this to your database username
        $password = ""; // Change this to your database password
        $dbname = "weather_app"; // Change this to your database name

        // Create connection
        $conn = new mysqli($servername, $usrname, $password, $dbname);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        // Prepare and execute SQL statement to insert data into the database
        $stmt = $conn->prepare("INSERT INTO query_of_weather (user_id,user_name, city, date, time, weather_condition, temperature) VALUES (?,?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("isssssd",$id, $username, $city, $date, $time, $weather_condition, $temperature);

        // Assuming you have a user name, otherwise, you can leave it as an empty string or set it as per your requirements

        if ($stmt->execute()) {
            echo "Weather data saved successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        // Closing the connection
        $stmt->close();
        $conn->close();
    } else {
        echo "Missing required fields";
    }
} else {
    echo "Invalid request method";
}
?>