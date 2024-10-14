<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jeepney Fare Calculator</title>
    <style>
        body {
            font-family: 'Roboto', Arial, sans-serif;
            background: linear-gradient(135deg, #ffd700, #ff6347);
            color: #333;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.9);
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.2);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #1e3799;
            font-size: 28px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-bottom: 8px;
            font-weight: bold;
            color: #2c3e50;
        }
        input[type="number"], select {
            padding: 12px;
            margin-bottom: 20px;
            border-radius: 8px;
            border: 2px solid #3498db;
            font-size: 16px;
            transition: border-color 0.3s ease;
        }
        input[type="number"]:focus, select:focus {
            outline: none;
            border-color: #2980b9;
        }
        input[type="submit"] {
            background: linear-gradient(90deg, #3498db, #2980b9);
            color: white;
            padding: 14px;
            border: none;
            border-radius: 50px;
            cursor: pointer;
            font-size: 18px;
            font-weight: bold;
            transition: all 0.3s ease;
            text-transform: uppercase;
            letter-spacing: 1px;
        }
        input[type="submit"]:hover {
            background: linear-gradient(90deg, #2980b9, #3498db);
            transform: translateY(-2px);
            box-shadow: 0 4px 15px rgba(52, 152, 219, 0.4);
        }
        input[type="submit"]:active {
            transform: translateY(1px);
            box-shadow: 0 2px 10px rgba(52, 152, 219, 0.4);
        }
        .result {
            text-align: center;
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #27ae60;
        }
        .jeepney-icon {
            text-align: center;
            margin-bottom: 20px;
        }
        .jeepney-icon svg {
            width: 80px;
            height: 80px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="jeepney-icon">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                <path fill="#3498db" d="M488 128h-8V80c0-44.8-99.2-80-224-80S32 35.2 32 80v48h-8c-13.25 0-24 10.74-24 24v80c0 13.25 10.75 24 24 24h8v160c0 17.67 14.33 32 32 32v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h192v32c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32v-32h6.4c16 0 25.6-12.8 25.6-25.6V256h8c13.25 0 24-10.75 24-24v-80c0-13.26-10.75-24-24-24zM160 72c0-4.42 3.58-8 8-8h176c4.42 0 8 3.58 8 8v16c0 4.42-3.58 8-8 8H168c-4.42 0-8-3.58-8-8V72zm-48 328c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32zm128-112H128c-17.67 0-32-14.33-32-32v-96c0-17.67 14.33-32 32-32h112v160zm32 0V128h112c17.67 0 32 14.33 32 32v96c0 17.67-14.33 32-32 32H272zm128 112c-17.67 0-32-14.33-32-32s14.33-32 32-32 32 14.33 32 32-14.33 32-32 32z"/>
            </svg>
        </div>
        <h2>Jeepney Fare Calculator</h2>
        <form action="" method="POST">
            <label for="distance">Distance (km):</label>
            <input type="number" id="distance" name="distance" step="0.01" min="0" required>

            <label for="passengerType">Passenger Type:</label>
            <select id="passengerType" name="passengerType" required>
                <option value="regular">Regular</option>
                <option value="student">Student / Elderly</option>
            </select>

            <input type="submit" value="Calculate Fare">
        </form>

        <?php
        include 'calculatefare.php';
        ?>

    </div>
</body>
</html>