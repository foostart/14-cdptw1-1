<!DOCTYPE html>

<html lang="en">

    <head>
        <title>1125</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" />
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('less/25-4.less', 'css/25-4.css');
        ?>
        <link href="css/25-4.css" rel="stylesheet"  />
        <script src="js/jquery.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/custom.min.js"></script>
    </head>

    <body>

    <?php include './1125-content.php'; ?>
    </body>

</html>