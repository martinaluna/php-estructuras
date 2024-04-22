<?php include './template/Layout/Nav.php'; ?>


<h1> home.php </h1>

<?php

    $mysqlPDO = new PDO("mysql:host={$_ENV['DDBB_HOST']};dbname={$_ENV['DDBB_DBNAME']};");
    $test = $mysqlPDO ->query("SELECTR * FROM 'users'");

    $data_array = [];
    foreach ($test as $value) {
        $data_array[] = $value;
        var_dump($value);
    }

    var_dump($data_array);