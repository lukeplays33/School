

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php // Database credentials 
$host = "localhost"; // Change this to your MySQL host 
$dbname = "phples"; // Change this to your MySQL database name 
$username = "root"; // Change this to your MySQL username 
$password = ""; // Change this to your MySQL password 
// Connect to MySQL database using PDO 
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);
?>
</body>
</html>