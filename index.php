<?php

$array = array(
    1 => '100',
    2 => '200',
    3 => '300',
    4 => '400',
    5 => '500',
);

$res = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Получить значение $var из формы
    $var = $_POST['var'];

    // Проверьте, существует ли значение $var в массиве
    if (isset($array[$var])) {
        $res = "Полученное значение равно : ".$array[$var];
    } else {
        $res = "Значение $var не существует в массиве.";
    }
}

?>


<?php ob_start(); ?>
    <div class="d-flex justify-content-center" style="margin-top:100px;">
        <div class="card mb-3" style="max-width: 800px;" >
            <div class="row g-0">
                <div class="col-md-12">
                    <div class="card-body">
                        <h3 class="card-title text-center">Вывести название и стоимость товаров</h3>
                        <p class="card-text">
                            <form method="post" action="">
                                <label for="var">Введите значение $var :</label>
                                <input type="text" name="var" id="var" required>
                                <button type="submit">Получение результата</button>
                            </form>
                        </p>
                        <p class="card-text text-center">
                            <small class="text-muted">
                                <?= $res;?>
                            </small
                            >
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php 
$content=ob_get_clean(); 
require_once "layout.php";
?>