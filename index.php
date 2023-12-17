<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
</head>
<body>
    <h1>Welcome to Your Web App</h1>

    <?php
    $servername = "art.mysql.database.azure.com";
    $username = "yasser";
    $password = "web@1223";
    $dbname = "art";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SHOW TABLES";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<h2>Tables in the Database:</h2>";
        echo "<ul>";
        while ($row = $result->fetch_assoc()) {
            echo "<li>" . $row['Tables_in_' . $dbname] . "</li>";
        }
        echo "</ul>";
    } else {
        echo "No tables found.";
    }

    $conn->close();
    ?>

    <p><a href="#">Other Link</a></p>
</body>
</html>
