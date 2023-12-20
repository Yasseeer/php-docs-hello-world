<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
</head>
<body>
    <h1>Welcome to Your Web App</h1>

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
    $table_name = "artworks";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Query to select all rows from the table
    $sql = "SELECT * FROM $table_name";
    
    // Debugging: Output the SQL query
    echo "SQL Query: $sql<br>";

    $result = $conn->query($sql);

    // Debugging: Output the result of the query
    var_dump($result);

    if (!$result) {
        die("Error executing query: " . $conn->error);
    }

    if ($result->num_rows > 0) {
        echo "<h2>Contents of Table $table_name:</h2>";
        echo "<table border='1'>";
        // Display header row
        echo "<tr>";
        while ($field = $result->fetch_field()) {
            echo "<th>{$field->name}</th>";
        }
        echo "</tr>";

        // Display data rows
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            foreach ($row as $value) {
                echo "<td>$value</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
    } else {
        echo "No data found in table $table_name.";
    }

    $conn->close();
    ?>

    <p><a href="#">Other Link</a></p>
</body>
</html>


