<?php include 'TP3Controler2.php' ?>
<!doctype html>
<html lang=fr dir="ltr">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="assets/libraries/bootstrap-4.3.1-dist/css/bootstrap.min.css" />
        <link href="assets/css/style.css" rel="stylesheet" />
        <title>Part10 TP3</title>
    </head>
    <body>
        <div class="container">
            <h1 class="text-center">Anciens élèves</br>Campus de Soissons</h1>
            <div class="row">
                <!-- version avec variables dynamiques -->
                <?= showThem(); ?>
                <!-- version avec tableau de dimension 2 -->
                <?= showThem2($myPortraits); ?>
            </div>
            <footer>
                <h3 class="text-center">Merci de votre attention !</h3>
            </footer>
        </div><!-- fin container-->
        <script src="assets/libraries/jquery/jquery-3.4.1.min.js"></script>
        <script src="assets/libraries/bootstrap-4.3.1-dist/js/bootstrap.min.js" rel="stylesheet"></script>
        <script src="assets/js/script.js"></script>
    </body>
</html>
