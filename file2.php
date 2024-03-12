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

// Ваш SQL-запрос
$sql = "SELECT
t1.Name AS Name,
t2.Price2 AS Price2,
t2.Price2_2 AS Price2_2,
t2.Price2_3 AS Price2_3
FROM
Table1 t1
JOIN
(
    SELECT
        Product_ID,
        Price2,
        Price2 AS Price2_2,
        Price2 AS Price2_3
    FROM
        Table2
) t2 ON t1.Product_ID = t2.Product_ID
WHERE
t2.Price2 = 2000";

// Выполнение запроса
$result = $conn->query($sql);

?>

<?php ob_start(); ?>

    <div class="container mt-5">
        <h3 class="text-center">Товары по цене 2 = 2000</h3>
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Name 2</th>
                    <th>Name 3</th>
                    <th>Price2</th>
                    <th>Price2 2</th>
                    <th>Price2 3</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    // Вывод данных из базы данных
                if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Price2'] . "</td>";
                        echo "<td>" . $row['Price2_2'] . "</td>";
                        echo "<td>" . $row['Price2_3'] . "</td>";
                        echo "</tr>";
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
