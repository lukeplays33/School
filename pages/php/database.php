

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

try {
$pdo = new PDO("mysql:host=$host; dbname=$dbname", $username, $password);

// Prepare SQL query to fetch all data from the "users" table 
$query= "SELECT FROM gebruikers";
$statement = $pdo->prepare($query); // Execute the query Sstatement->execute(); // Fetch all rows as an associative and nummeric array 
$users = $statement->fetchAll(); // Check if there are any users 
if (count($users) > 0) { // Output the data 
    foreach ($users as $user) {
         echo "User ID: $user[0]." . 'Username:' . $user['username'] . ", password:" . $user['password']."<br>";
    }
    } else { // Add other fields as needed 
        echo "No users found in the database.";
    }
} catch (Exception $e) {
    echo $e->getMessage();
}
?>
</body>
</html>