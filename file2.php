<?php
// Сведения о подключении к базе данных
$servername = "localhost";
$username = "root";
$password = '';
$dbname = "dbTest4";

// Создать соединение
$conn = new mysqli($servername, $username, $password, $dbname);

// Проверьте подключение
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// SQL-запрос для извлечения данных
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
                    // Вывод данных из базы данных
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
                    echo "<tr><td colspan='4'>Результатов не найдено</td></tr>";
                }
                ?>
            </tbody>
        </table>
    </div>

    <?php
    // Закройте подключение к базе данных
    $conn->close();
    ?>

<?php 
$content=ob_get_clean(); 
require_once "layout.php";
?>
