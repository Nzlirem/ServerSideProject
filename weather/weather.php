<?php
session_start();

//$id = $_SESSION['id'];

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Weather Forecast</title>
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            background: linear-gradient(to bottom, #f7f7f7, #e2e2e2);
            color: #333;
        }


         nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background: linear-gradient(to right, #a8dadc, #457b9d);
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
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

        h1 {
            text-align: center;
            margin: 40px 0;
            color: #1a237e;
            font-size: 2.5em;
            text-transform: uppercase;
            letter-spacing: 2px;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: flex-start;
            padding: 20px;
            margin-bottom: 80px;
        }

        .selection-box, .weather-box {
            width: 45%;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            background-color: #fff;
            margin: 20px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .selection-box:hover, .weather-box:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        }

        select, button, input[type="date"] {
            padding: 12px;
            font-size: 16px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 1px solid #ccc;
            width: 100%;
            box-sizing: border-box;
            display: block;
            margin-bottom: 10px;
            cursor: pointer;
            transition: all 0.3s;
        }

        select:focus, button:focus, input[type="date"]:focus {
            outline: none;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.3);
        }

        label {
            font-weight: bold;
            display: block;
            margin-bottom: 10px;
            text-align: left;
            text-transform: uppercase;
            color: #1a237e;
        }

        button {
            background: linear-gradient(to right, #a8dadc, #457b9d);
            color: #fff;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s, box-shadow 0.3s;
        }

        button:hover {
            background: linear-gradient(to right, #457b9d, #a8dadc);
            transform: translateY(-2px);
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 10px;
            text-align: center;
            border-bottom: 1px solid #ddd;
            font-size: 1em;
        }

        th {
            background: linear-gradient(to right, #a8dadc, #457b9d);
            color: white;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .selection-box, .weather-box {
                width: 90%;
            }
        }

        @media (max-width: 480px) {
            h1 {
                font-size: 2em;
            }

            select, button, input[type="date"] {
                font-size: 14px;
                padding: 8px;
            }

            th, td {
                font-size: 0.9em;
                padding: 8px;
            }            
        }
    </style>
</head>

<body>
<nav>
 <div class="menu">
        <a href="weather.php">
    <img src="weather-forecast.png" alt="Home">
    <span></span>
</a>
<a href="settings.php">
    <img src="download.png" alt="Settıngs">
    /span></span>
</a>

    </div>

    <div class="icons-container">
        <div class="icons">
            <img src="sun.png" alt="Icon 1">
            <img src="rain.png" alt="Icon 2">
            <img src="snow.png" alt="Icon 3">
        </div>
    </div>

    <div class="user-icon">
        <img src="user.png" alt="User Icon">
    </div>
</nav>

<h1>Weather Forecast</h1>
<div class="container">
    <div class="selection-box">
        <label for="cities">Please select a cıty:</label>
        <select id="cities">
            <option value="Adana">Adana</option>
            <option value="Adıyaman">Adıyaman</option>
            <option value="Afyonkarahisar">Afyonkarahisar</option>
            <option value="Ağrı">Ağrı</option>
            <option value="Amasya">Amasya</option>
            <option value="Ankara">Ankara</option>
            <option value="Antalya">Antalya</option>
            <option value="Artvin">Artvin</option>
            <option value="Aydın">Aydın</option>
            <option value="Balıkesir">Balıkesir</option>
            <option value="Bilecik">Bilecik</option>
            <option value="Bingöl">Bingöl</option>
            <option value="Bitlis">Bitlis</option>
            <option value="Bolu">Bolu</option>
            <option value="Burdur">Burdur</option>
            <option value="Bursa">Bursa</option>
            <option value="Çanakkale">Çanakkale</option>
            <option value="Çankırı">Çankırı</option>
            <option value="Çorum">Çorum</option>
            <option value="Denizli">Denizli</option>
            <option value="Diyarbakır">Diyarbakır</option>
            <option value="Edirne">Edirne</option>
            <option value="Elazığ">Elazığ</option>
            <option value="Erzincan">Erzincan</option>
            <option value="Erzurum">Erzurum</option>
            <option value="Eskişehir">Eskişehir</option>
            <option value="Gaziantep">Gaziantep</option>
            <option value="Giresun">Giresun</option>
            <option value="Gümüşhane">Gümüşhane</option>
            <option value="Hakkari">Hakkari</option>
            <option value="Hatay">Hatay</option>
            <option value="Isparta">Isparta</option>
            <option value="Mersin">Mersin</option>
            <option value="İstanbul">İstanbul</option>
            <option value="İzmir">İzmir</option>
            <option value="Kars">Kars</option>
            <option value="Kastamonu">Kastamonu</option>
            <option value="Kayseri">Kayseri</option>
            <option value="Kırklareli">Kırklareli</option>
            <option value="Kırşehir">Kırşehir</option>
            <option value="Kocaeli">Kocaeli</option>
            <option value="Konya">Konya</option>
            <option value="Kütahya">Kütahya</option>
            <option value="Malatya">Malatya</option>
            <option value="Manisa">Manisa</option>
            <option value="Kahramanmaraş">Kahramanmaraş</option>
            <option value="Mardin">Mardin</option>
            <option value="Muğla">Muğla</option>
            <option value="Muş">Muş</option>
            <option value="Nevşehir">Nevşehir</option>
            <option value="Niğde">Niğde</option>
            <option value="Ordu">Ordu</option>
            <option value="Rize">Rize</option>
            <option value="Sakarya">Sakarya</option>
            <option value="Samsun">Samsun</option>
            <option value="Siirt">Siirt</option>
            <option value="Sinop">Sinop</option>
            <option value="Sivas">Sivas</option>
            <option value="Tekirdağ">Tekirdağ</option>
            <option value="Tokat">Tokat</option>
            <option value="Trabzon">Trabzon</option>
            <option value="Tunceli">Tunceli</option>
            <option value="Şanlıurfa">Şanlıurfa</option>
            <option value="Uşak">Uşak</option>
            <option value="Van">Van</option>
            <option value="Yozgat">Yozgat</option>
            <option value="Zonguldak">Zonguldak</option>
            <option value="Aksaray">Aksaray</option>
            <option value="Bayburt">Bayburt</option>
            <option value="Karaman">Karaman</option>
            <option value="Kırıkkale">Kırıkkale</option>
            <option value="Batman">Batman</option>
            <option value="Şırnak">Şırnak</option>
            <option value="Bartın">Bartın</option>
            <option value="Ardahan">Ardahan</option>
            <option value="Iğdır">Iğdır</option>
            <option value="Yalova">Yalova</option>
            <option value="Karabük">Karabük</option>
            <option value="Kilis">Kilis</option>
            <option value="Osmaniye">Osmaniye</option>
            <option value="Düzce">Düzce</option>
        </select>

        <label for="date">Please select a date:</label>
        <input type="date" id="date">

        <label for="hours">Please select an hour:</label>
        <select id="hours">
            <option value="0">00:00</option>
            <option value="1">01:00</option>
            <option value="2">02:00</option>
            <option value="3">03:00</option>
            <option value="4">04:00</option>
            <option value="5">05:00</option>
            <option value="6">06:00</option>
            <option value="7">07:00</option>
            <option value="8">08:00</option>
            <option value="9">09:00</option>
            <option value="10">10:00</option>
            <option value="11">11:00</option>
            <option value="12">12:00</option>
            <option value="13">13:00</option>
            <option value="14">14:00</option>
            <option value="15">15:00</option>
            <option value="16">16:00</option>
            <option value="17">17:00</option>
            <option value="18">18:00</option>
            <option value="19">19:00</option>
            <option value="20">20:00</option>
            <option value="21">21:00</option>
            <option value="22">22:00</option>
            <option value="23">23:00</option>
        </select>

        <button onclick="getWeather()">Show Weather</button>
    </div>

    <div class="weather-box">
        <table id="weatherTable">
            <thead>
                <tr>
                    <th>City</th>
                    <th>Weather</th>
                    <th>Temperature (°C)</th>
                </tr>
            </thead>
            <tbody id="weatherData">
            </tbody>
        </table>
    </div>
</div>

<footer>
    &copy; 2024 Weather Forecast for Turkish Cities
</footer>

<script>
    window.onload = function() {
        var dateInput = document.getElementById("date");
        var today = new Date();
        var maxDate = new Date();
        maxDate.setDate(today.getDate() + 5);

        var todayStr = today.toISOString().split('T')[0];
        var maxDateStr = maxDate.toISOString().split('T')[0];

        dateInput.setAttribute("min", todayStr);
        dateInput.setAttribute("max", maxDateStr);
    };

	function handleWeatherResponse(response, selectedDate, selectedHour) {
		var cityName = response.city.name;
		var weatherData = response.list;
		var closestWeatherEntry = findClosestWeatherEntry(weatherData, selectedDate, selectedHour);

		if (closestWeatherEntry) {
			var weatherDescription = closestWeatherEntry.weather[0].description;
			var temperature = closestWeatherEntry.main.temp;

			// Update the HTML table
			var tableRow = "<tr><td>" + cityName + "</td><td>" + weatherDescription + "</td><td>" + temperature + "</td></tr>";
			document.getElementById('weatherData').innerHTML = tableRow;

			// Send data to save_data.php using AJAX
			var xhr = new XMLHttpRequest();
			xhr.open("POST", "save_data.php", true);
			xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
			xhr.onreadystatechange = function () {
				if (xhr.readyState === 4 && xhr.status === 200) {
					console.log(xhr.responseText); // Log the response from save_data.php
				}
			};
			var params = "city=" + encodeURIComponent(cityName) + "&date=" + encodeURIComponent(selectedDate) + "&time=" + encodeURIComponent(selectedHour) + "&weather_condition=" + encodeURIComponent(weatherDescription) + "&temperature=" + encodeURIComponent(temperature);
			xhr.send(params);
		} else {
			document.getElementById('weatherData').innerHTML = "<tr><td colspan='3'>No weather information was found for the specified date and time.</td></tr>";
		}
	}

    function findClosestWeatherEntry(weatherData, selectedDate, selectedHour) {
        var closestEntry = null;
        var closestDiff = Infinity;
        var selectedDateTime = new Date(selectedDate + 'T' + String(selectedHour).padStart(2, '0') + ':00:00');

        for (var i = 0; i < weatherData.length; i++) {
            var entry = weatherData[i];
            var entryDateTime = new Date(entry.dt * 1000);
            var diff = Math.abs(entryDateTime - selectedDateTime);

            if (diff < closestDiff) {
                closestDiff = diff;
                closestEntry = entry;
            }
        }

        return closestEntry;
    }

    function getWeather() {
        var selectedCity = document.getElementById("cities").value;
        var selectedDate = document.getElementById("date").value;
        var selectedHour = document.getElementById("hours").value;

        if (!selectedDate) {
            alert("Please select a valid date.");
            return;
        }

        var today = new Date();
        var maxDate = new Date();
        maxDate.setDate(today.getDate() + 5);
        var selectedDateTime = new Date(selectedDate);

        if (selectedDateTime > maxDate) {
            alert("You can only select dates within 5 days from now.");
            return;
        }

        var apiKey = 'b68dfce680ab62efd5dd73f33b1fb615';
        var apiUrl = 'https://api.openweathermap.org/data/2.5/forecast';
        var units = 'metric';
        var lang = 'tr';
        var url = `${apiUrl}?q=${selectedCity}&appid=${apiKey}&units=${units}&lang=${lang}`;

        fetch(url)
            .then(response => response.json())
            .then(data => {
                handleWeatherResponse(data, selectedDate, selectedHour);
            })
            .catch(error => console.log('Weather could not be taken:', error));
    }
</script>
</body>
</html>
