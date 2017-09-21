<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Equipe | BugBurger</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="styleOthers/equipe.css">
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
    <section>
    <div class="jumbotron jumbotronEquipe">
        <div class="container">
            <h1>Une équipe soudée autour de l'insecte</h1>

            <p>Un travail de fourmi qui porte ses burgers.</p>
        </div>
    </div>
    <section class="containerFounder">
        <div class="row">
            <section class="jumbotron jumbotronDamien">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-6">
                            <img src="images/damien.jpg" alt="Founder 1">

                            <h2>Damien Damien</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deleniti, dicta dolore, ducimus facilis harum inventore ipsa maiores.</p>
                        </div>
                        <div class="col-md-6">
                            <img src="images/laurent.jpg" alt="Founder 1">

                            <h2>Damien Damien</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Architecto deleniti, dicta dolore, ducimus facilis harum inventore ipsa maiores.</p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </section>
    <section class="containerTeam">

        <div class="row">
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/chief.jpg" alt="photo1 equipe">
                    <div class="caption">
                        <h3>Louis Tremblay</h3>
                        <p class="Jobs">Chef création</p>
                        <p><i class="fa fa-quote-left" aria-hidden="true"> J'aime les burgers et les insectes, ça tombe bien !</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/manager.jpg" alt="photo2 equipe">
                    <div class="caption">
                        <h3>Louis Gagnon</h3>
                        <p class="Jobs">Restaurant Manager</p>
                        <p><i class="fa fa-quote-left" aria-hidden="true"> Ma vie, c'est le burger et j'aime le partager.</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/manager2.jpg" alt="photo3 equipe">
                    <div class="caption">
                        <h3>Quentin Roy</h3>
                        <p class="Jobs">Restaurant Manager</p>
                        <p><i class="fa fa-quote-left" aria-hidden="true"> J'aime quand on me dit que c'est délicieux !</i></p>
                    </div>
                </div>
            </div>
            <div class="col-md-3">
                <div class="thumbnail">
                    <img src="./images/eleveurs.jpg" alt="photo4 equipe">
                    <div class="caption">
                        <h3>Eve et André Fortin</h3>
                        <p class="Jobs">Eleveurs d'insectes</p>
                        <p><i class="fa fa-quote-left" aria-hidden="true"> Nos insectes, on les élève comme nos enfants !</i></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
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