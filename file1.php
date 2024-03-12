<?php

$arr = array(
    100 => "Ижевск",
    200 => "Москва",
    300 => "Питер",
    400 => "Пермь",
    500 => "Челябинск",
    700 => "Екатеринбург",
    800 => "Самара",
    900 => "Сочи",
    1000 => "Новосибирск",
);

$new = array();

foreach ($arr as $key => $value) {
    if ($key % 3 === 0) {
        $new[$key] = $value;
    }
}

?>
<?php ob_start(); ?>

<div class="d-flex justify-content-center" style="margin-top:100px;">
    <div class="card mb-3" style="max-width: 800px;" >
        <div class="row g-0">
            <div class="col-md-12">
                <div class="card-body">
                    <h3 class="card-title text-center">Новая таблица городов (ключи, кратные 3) :</h3>
                    <p class="card-text">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>Ключ массива</th>
                                <th>Название города</th>
                            </tr>
                            <?php
                            foreach ($new as $key => $value) {
                                echo "<tr><td>$key</td><td>$value</td></tr>";
                            }
                            ?>
                        </table>
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