<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "dbTest4";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL query to retrieve data
$sql = "SELECT T1.Name AS Name, T2.Price2, T2.Price2 AS 'Price2 2', T2.Price2 AS 'Price2 3'
        FROM Table1 T1
        JOIN Table2 T2 ON T1.Product_ID = T2.Product_ID
        WHERE T2.Price2 = 2000";

$result = $conn->query($sql);

?>

<?php ob_start(); ?>

    <div class="container mt-5">
        <h3 class="text-center">Товары по цене 2 = 2000</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price2</th>
                    <th>Price2 2</th>
                    <th>Price2 3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Output data from the database
                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                    echo "<tr>
                            <td>{$row['Name']}</td>
                            <td>{$row['Price2']}</td>
                            <td>{$row['Price2 2']}</td>
                            <td>{$row['Price2 3']}</td>
                        </tr>";
                    }
                } else {
                    echo "<tr><td colspan='4'>No results found</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Close the database connection
    $conn->close();
    ?>

<?php 
$content=ob_get_clean(); 
require_once "layout.php";
?>
