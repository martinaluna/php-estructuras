<?php
$array = [1,2,3,4,5,6,7,8,9];

$a=1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach ($array as $value) :?>
    <p> <?= $value ?> - </p>
    <?php endforeach;?>
</body>
</html>

/* return in front
1-2-3-4-5-6-7-8-9 */
?>

<?php while ($a <= 10): ?>
<p> <?= $a ?> - </p>
<?php $a ++ ?>
<?php endwhile ?>
<?php

/* return in front
1-2-3-4-5-6-7-8-9-10 */