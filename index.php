<?php
include_once './app/controller/form.php';
include_once './app/controller/table.php';
include_once './app/php/php.php';

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-grid.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap-reboot.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/bootstrap.css">
    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="./assets/css/style.css">
    <title>Bootstrap template</title>
</head>
<body class="d-flex justify-content-center flex-column align-items-center">
<section class="p-5">
    <?php insert_user_form($conn); ?>
</section>
<section class="p-5">
    <?php delete_user_form($conn); ?>
</section>
<section class="p-5">
    <?php edit_user_form($conn); ?>
</section>
<section class="d-flex justify-content-center m-5">
    <?php
    $sql = "SELECT * FROM `users`";
    table(get($conn, $sql));
    ?>
</section>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
</body>
</html>