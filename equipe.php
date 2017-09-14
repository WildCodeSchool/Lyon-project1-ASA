<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Equipe | BugBurger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<header>
    <!-- includes NavigationBar -->

    <?php

    include('./includes/nav.php');

    ?>

</header>

<!-- Conteneur General ( all the sections of the Home page ) -->
<div class="container-fluid">
    <section class="container">
        <h2>Rencontrez notre équipe</h2>
        <div class="row">
            <div class="col-md-6">
                <div class="col-md-4">
                    <img class="founder-photo" src="" alt="picture founder" title="His name">
                </div>
                <div class="col-md-7">
                    <p><span class="founder-name">Bernard Nardbé, </span>chercheur en insectes,</p>
                    <i class="fa fa-quote-left" aria-hidden="true"> Je suis passionné depuis toujours par les insectes ! A 5 ans, je les écrasais avec les doigts, à 50 ans, je les sers à manger !</i>
                </div>
            </div>
            <div class="col-md-6">
                <div class="col-md-4">
                    <img class="cofounder-photo" src="" alt="picture cofounder" title="His name">
                </div>
                <div class="col-md-7">
                    <p><span class="cofounder-name">Hippolyte Rametoujours, </span>startupeur à vie,</p>
                    <i class="fa fa-quote-left" aria-hidden="true"> J’adore les nouveaux challenges, surtout quand ils font parler de moi.</i>
                </div>
            </div>
        </div>

    </section>
    <section class="container">

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="https://s20.postimg.org/vvz43okv1/gallery_1.jpg" alt="photo1 equipe">
                    <div class="caption">
                        <h3>Géo Trouvetout</h3>
                        <p> Chief <br/> Toute ma vie j'ai rêvé d'être une hôtesse de l'air</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="https://s20.postimg.org/vvz43okv1/gallery_1.jpg" alt="photo1 equipe">
                    <div class="caption">
                        <h3>Je Menfous </h3>
                        <p>Restaurant Manager <br/> Ma vie, c'est le burger</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="https://s20.postimg.org/vvz43okv1/gallery_1.jpg" alt="photo1 equipe">
                    <div class="caption">
                        <h3>Gustave Flaubert </h3>
                        <p>Sales Force<br/>Moi, ce que j'aime c'est écrire</p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="https://s20.postimg.org/vvz43okv1/gallery_1.jpg" alt="photo1 equipe">
                    <div class="caption">
                        <h3>Gaston Lagaffe </h3>
                        <p>Service Courrier<br/>M'enfin !</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div> <!-- End container General -->


<!-- Includes footer ( with form contact ) -->

<?php

include('./includes/footer.php');

?>

<script src='script/app.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>