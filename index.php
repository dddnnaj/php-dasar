<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php dasar</title>
</head>
<body>
    <?php $nama= "dadan";
          $umur= "16"
          ?>
    <h1>selamat datang <td><?php echo $nama?></td></h1>
    <h1>umur<?php echo $umur?></h1>
</body>
</html>
<?php
$nilai = 75;

if ($nilai  >= 75) {
    echo "selamat, kamu lulus";
}