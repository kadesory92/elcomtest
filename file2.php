<?php
// Сведения о подключении к базе данных
// Подключение к базе данных
$dsn = 'mysql:host=localhost;dbname=dbTest4';
$username = 'root';
$password = '';

try {
    $pdo = new PDO($dsn, $username, $password);
} catch (PDOException $e) {
    echo 'Connection failed: ' . $e->getMessage();
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
$stmt = $pdo->query($sql);

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
                if ($stmt->rowCount() > 0) {
                    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                        echo "<tr>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Name'] . "</td>";
                        echo "<td>" . $row['Price2'] . "</td>";
                        echo "<td>" . $row['Price2_2'] . "</td>";
                        echo "<td>" . $row['Price2_3'] . "</td>";
                        echo "</tr>";
                    }
                    //Закрытие соединения с базой данных
                    $pdo = null;
                } else {
                    echo "<tr><td colspan='4'>Результатов не найдено</td></tr>";
                }
                //Закрытие соединения с базой данных (вынесено за пределы условия)
                $pdo = null;
                ?>
            </tbody>
        </table>
    </div>

<?php 
$content=ob_get_clean(); 
require_once "layout.php";
?>
