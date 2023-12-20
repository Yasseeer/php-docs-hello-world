<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web App</title>
</head>
<body>
    <h1>Welcome to Your Web App</h1>

    $con = mysqli_init();
mysqli_ssl_set($con,NULL,NULL, "{path to CA cert}", NULL, NULL);
mysqli_real_connect($conn, "art.mysql.database.azure.com", "yasser", "web@1223", "art", 3306, MYSQLI_CLIENT_SSL);

</body>
</html>
