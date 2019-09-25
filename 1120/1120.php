<!DOCTYPE html>

<html lang="en">

<head>
    <title>1120</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <?php
    if (!class_exists('lessc')) {
        include ('./libs/lessc.inc.php');
    }
    $less = new lessc;
    $less->compileFile('less/type-25-header.less', 'css/type-25-header.css');
    ?>
    <link href="css/type-25-header.css" rel="stylesheet" type="text/css" />
    <script src="js/jquery-2.1.4.min.js" ></script>
    <script src="js/bootstrap.js"></script>
</head>

<body>

<?php include './1120-content.php'; ?>
</body>

</html>