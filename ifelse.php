<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kategori Usia</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        /* Kotak Formulir */
        .form-container {
            background-color: #fff;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
            padding: 30px;
            text-align: center;
            max-width: 400px;
            width: 100%;
        }

        h1 {
            color: #333;
        }

        label {
            font-size: 18px;
            color: #555;
        }

        input[type="number"] {
            width: 80%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #007bff;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

        .result {
            margin-top: 20px;
            font-size: 20px;
            color: #333;
        }

        .result p {
            background-color: #e6f7ff;
            border: 2px solid #007bff;
            padding: 15px;
            border-radius: 10px;
            display: inline-block;
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h1>Masukkan Usia Anda</h1>
        <form method="post">
            <label for="age">Usia:</label><br>
            <input type="number" id="age" name="age" min="0" required><br>
            <input type="submit" value="Kategorikan Usia">
        </form>

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Mengambil input usia dari form
            $age = isset($_POST['age']) ? (int)$_POST['age'] : 0;

            echo "<div class='result'><p>";

            // Menentukan kategori usia
            if ($age >= 0 && $age <= 12) {
                echo "Kategori usia: Anak-anak";
            } elseif ($age >= 13 && $age <= 17) {
                echo "Kategori usia: Remaja";
            } elseif ($age >= 18 && $age <= 59) {
                echo "Kategori usia: Dewasa";
            } elseif ($age >= 60) {
                echo "Kategori usia: Lansia";
            } else {
                echo "Usia tidak valid.";
            }

            echo "</p></div>";
        }
        ?>
    </div>

</body>
</html>
