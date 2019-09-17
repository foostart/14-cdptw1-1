<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';
preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('less/1137.less', 'css/1137.css');
?>
<!DOCTYPE html>
<html lang="en">
    <head>


        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Bootstrap 101 Template</title>
        <link href="<?php echo $url_path ?>/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="<?php echo $url_path ?>/css/1137.css" rel="stylesheet" type="text/css"/>
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/1137.less', 'css/1137.css');
        ?>
        
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/owl.carousel.min.css">
         
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/owl.theme.default.min.css">
    
        <script src="<?php echo $url_path ?>/js/jquery.min.js"></script>
      
        <script src="<?php echo $url_path ?>/js/owl.carousel.js"></script>
   
    </head>
    <body>
    <script>
            $(document).ready(function () {
                var owl = $('.owl-carousel');
                owl.owlCarousel({
                loop:true,
                margin:10,
                nav:true,
                dots: false,
                navContainer: '.customNav',
                navText: [$('.prev'), $('.next'), ],
                responsive:{
                    1000: {
                        items:1
                    },
                     390: {
                        items:1
                    }
                    
                }
                })

            })
        </script>
        <?php include '../1137/1137-content.php'; ?>

    </body>
</html>
