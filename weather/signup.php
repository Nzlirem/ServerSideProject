<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "weather_app";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("No connection to database: " . $conn->connect_error);
    }

    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];

    $sql = "INSERT INTO users (username, email, password, regist_date) VALUES ('$username', '$email', '$password', NOW())";

    if ($conn->query($sql) === TRUE) {
        echo "<p>Registration successful! <a href='login.php'>You can log in by clicking here</a>.</p>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
	
	<style>
	
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}
	
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
		
		nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #a8dadc, #457b9d);
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }
		
		nav a {
			color: #fff;
			text-decoration: none;
			margin: 0 20px;
			font-size: 12px;
			text-transform: uppercase;
			transition: color 0.3s, text-shadow 0.3s;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		nav a span {
			margin-top: 5px;
		}


        nav a:hover {
            color: #ffeb3b;
            text-shadow: 0 0 8px #ffeb3b;
        }

		.menu {
            display: flex;
        }

        .menu a {
			color: #fff;
			text-decoration: none;
			margin: 0 20px;
			font-size: 12px;
			text-transform: uppercase;
			transition: color 0.3s, text-shadow 0.3s;
			display: flex;
			flex-direction: column;
			align-items: center;
		}

		.menu a span {
			margin-top: 5px;
		}

		
		.menu a img {
			width: 35px;
			height: 35px;
		}


        .menu a:hover {
            color: #ffeb3b;
            text-shadow: 0 0 8px #ffeb3b;
        }
		
		.icons-container {
			flex: 1;
			display: flex;
			justify-content: center;
			align-items: center;
		}

		.icons {
			width: 30px;
			height: 30px;
			display: flex;
			align-items: center;
			margin-left: -280px;
		}

		.icons img {
			width: 30px;
			height: 30px;
			margin: 0 15px;
			cursor: pointer;
			transition: transform 0.3s;
		}

		
		.user-icon {
			width: 25px;
			height: 25px;
			display: flex;
			align-items: center;
		}

		.user-icon img {
			width: 25px;
			height: 25px;
			cursor: pointer;
			transition: transform 0.3s;
		}

		

		footer {
			background: linear-gradient(to right, #a8dadc, #457b9d);
			color: #fff;
			text-align: center;
			padding: 12px 0;
			position: fixed;
			bottom: 0;
			width: 100%;
			box-shadow: 0 -4px 8px rgba(0, 0, 0, 0.2);
		}

		.container {
			width: 400px;
			margin: 50px auto;
			background-color: #fff;
			padding: 20px;
			border-radius: 15px;
			box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.3);
		}

		h2 {
			text-align: center;
			color: #333;
		}

		label {
			font-weight: bold;
			color: #555;
		}

		input[type="text"],
		input[type="password"],
		input[type="email"] {
			width: calc(100% - 12px);
			padding: 8px;
			margin-bottom: 10px;
			border: 1px solid #ccc;
			border-radius: 4px;
		}

		button[type="submit"] {
			width: 100%;
			padding: 10px;
			background-color: #457b9d;
			color: #fff;
			border: none;
			border-radius: 4px;
			cursor: pointer;
		}

		button[type="submit"]:hover {
			background-color: #0056b3;
		}

		.error-message {
			color: red;
			text-align: center;
			margin-top: 10px;
		}
		
		
    </style>
</head>
<body>
<nav>
    <div class="menu">
        <a href="weather.php" >
            <img src="weather-forecast.png" alt="Home">
            <span></span>
        </a>
        <a href="settings.php" ">
            <img src="download.png" alt="Settings">
            <span></span>
        </a>
    </div>
    <div class="icons-container">
        <div class="icons">
            <img src="sun.png" alt="Icon 1">
            <img src="rain.png" alt="Icon 2">
            <img src="snow.png" alt="Icon 3">
        </div>
    </div>
    <div class="user-icon" >
        <img src="user.png" alt="User Icon">
    </div>
</nav>
<div class="container">
<h2>Sign Up</h2>
<br><br>
    <form action="signup.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Sign Up</button>
    </form>
</div>
<footer>
    &copy; 2024 Weather Forecast for Turkish Cities
</footer>
</body>
</html>

	
</body>
</html>

