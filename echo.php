<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Kahve Dükkanı Stok Yönetimi</title>
    <style>
        body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    align-items: center;
}

h2 {
    margin-top: 20px;
    color: #333;
}

form {
    background-color: #fff;
    padding: 20px;
    border-radius: 8px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    margin-bottom: 20px;
    width: 100%;
    max-width: 400px;
}

form label {
    display: block;
    margin-bottom: 10px;
    font-weight: bold;
    color: #555;
}

form input[type="text"],
form input[type="number"],
form input[type="date"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border-radius: 4px;
    border: 1px solid #ccc;
}

form input[type="submit"] {
    background-color: #5cb85c;
    color: white;
    padding: 10px 15px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    transition: background-color 0.3s;
}

form input[type="submit"]:hover {
    background-color: #4cae4c;
}

table {
    border-collapse: collapse;
    width: 100%;
    max-width: 800px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

table, th, td {
    border: 1px solid #ddd;
    padding: 8px;
}

th {
    background-color: #f2f2f2;
    text-align: left;
    color: #333;
}

tr:nth-child(even) {
    background-color: #f9f9f9;
}

tr:hover {
    background-color: #f1f1f1;
}

td form {
    display: inline;
}


    </style>
</head>
<body>
    <h2>Stok Ekle</h2>

    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);

    $servername = "****";
    $username = "****";
    $password = "****";
    $dbname = "****"; 

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Bağlantı başarısız: " . $conn->connect_error);
    }


    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        var_dump($_POST);

        if (isset($_POST['update'])) {
            $id = $_POST['id'];
            $product_name = $_POST['product_name'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];

            $sql = "UPDATE Stok SET product_name='$product_name', amount=$amount, date='$date' WHERE id=$id";
            echo $sql . "<br>"; 

            if ($conn->query($sql) === TRUE) {
                echo "Kayıt başarıyla güncellendi.<br><br>";
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }
        } elseif (isset($_POST['delete'])) {
            $id = $_POST['id'];

            $sql = "DELETE FROM Stok WHERE id=$id";
            echo $sql . "<br>"; 

            if ($conn->query($sql) === TRUE) {
                echo "Kayıt başarıyla silindi.<br><br>";
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }
        } else {
            $product_name = $_POST['product_name'];
            $amount = $_POST['amount'];
            $date = $_POST['date'];

            $sql = "INSERT INTO Stok (product_name, amount, date) VALUES ('$product_name', $amount, '$date')";
            echo $sql . "<br>"; 

            if ($conn->query($sql) === TRUE) {
                echo "Yeni kayıt başarıyla eklendi.<br><br>";
            } else {
                echo "Hata: " . $sql . "<br>" . $conn->error;
            }
        }
    }
    ?>

    <form action="" method="post">
        <label for="product_name">Ürün Adı:</label>
        <input type="text" id="product_name" name="product_name" required><br><br>
        <label for="amount">Miktar:</label>
        <input type="number" id="amount" name="amount" required><br><br>
        <label for="date">Tarih:</label>
        <input type="date" id="date" name="date" required><br><br>
        <input type="submit" value="Ekle">
    </form>

    <h2>Stok Durumu</h2>

    <?php
    $sql = "SELECT id, product_name, amount, date FROM Stok";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<table border='1'>
        <tr>
        <th>ID</th>
        <th>Ürün Adı</th>
        <th>Miktar</th>
        <th>Tarih</th>
        <th>Güncelle</th>
        <th>Sil</th>
        </tr>";

        while($row = $result->fetch_assoc()) {
            echo "<tr>
            <form action='' method='post'>
            <td><input type='hidden' name='id' value='" . $row["id"] . "'>" . $row["id"] . "</td>
            <td><input type='text' name='product_name' value='" . $row["product_name"] . "'></td>
            <td><input type='number' name='amount' value='" . $row["amount"] . "'></td>
            <td><input type='date' name='date' value='" . $row["date"] . "'></td>
            <td><input type='submit' name='update' value='Güncelle'></td>
            <td><input type='submit' name='delete' value='Sil'></td>
            </form>
            </tr>";
        }
        echo "</table>";
    } else {
        echo "Veri bulunamadı.";
    }

    $conn->close();
    ?>

</body>
</html>
