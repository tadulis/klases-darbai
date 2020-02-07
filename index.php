<?php
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
<body class="d-flex justify-content-center flex-wrap">

<?php for ($x=1; $x<=$pilnuDeziuKiekis; $x++): ?>
    <div class="alaus-deze"></div>
<?php endfor; ?>

<?php for ($x=1; $x<=$likeButeliai; $x++): ?>
    <div class="alaus-butelys"></div>
<?php endfor; ?>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script type="text/javascript" src="./assets/js/jquery.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.bundle.js"></script>
<script type="text/javascript" src="./assets/js/bootstrap.js"></script>
</body>
</html>