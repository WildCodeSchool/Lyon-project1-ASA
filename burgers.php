<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Burgers | BugBurger</title>
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

    <!--§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§§! -->
    <section>
        <div class="jumbotron jumbotronBurger">
            <h1>Découvrez nos différents burgers</h1>

            <p>Humm ... Yummy !!</p>
            <p>Découvrez nos burgers stars, qui allient le plaisir de déguster un bon burger composé d’ingrédients frais et bios, avec des boulettes ou des steaks d’insecte aux textures fabuleuses, développées par notre centre de recherche depuis plus de 10 ans.</p>
        </div>
        <div>
            <div>
                <i class="fa fa-bug" aria-hidden="true"> : faiblement insectisé</i>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <i class="fa fa-bug" aria-hidden="true"> : moyennement insectisé</i>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <i class="fa fa-bug" aria-hidden="true"></i>
                <i class="fa fa-bug" aria-hidden="true"> : très insectisé</i>
                <p></p>
                <p></p>

            </div>

            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/Burger_slider_1.jpg" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <h2>Le Manhattan</h2>

                            <div class="col-md-10">
                                <p>Le burger composé de grillons grillés au barbecue, de généreuses tranches de cheddar et d’une sauce westminster.</p>

                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <i class="fa fa-bug" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/Burger_slider_1.jpg" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <h2>Bug-Londoner</h2>

                            <div class="col-md-10">
                                <p>Le burger composé d’un steak de vers de farine, d’une sauce curry relevée, de poivrons, de salade et de tomates.
                                </p>

                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-bug" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/Burger_slider_1.jpg" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <h2>Le Bug Jura</h2>

                            <div class="col-md-10">
                                <p>Le burger composé de boulettes de sauterelles, de comté AOP fondu, d’oignons rouges et de sa sauce mystère.
                                </p>

                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <i class="fa fa-bug" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/Burger_slider_1.jpg" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <h2>Le Manhattan</h2>

                            <div class="col-md-10">
                                <p>Le burger composé de grillons grillés au barbecue, de généreuses tranches de cheddar, d'échalotes marinées et d’une sauce westminster.</p>

                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <i class="fa fa-bug" aria-hidden="true"></i>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="thumbnail">
                    <img src="./images/Burger_slider_1.jpg" alt="Restaurant Bug Burger" style="width:100%">
                    <div class="caption">
                        <div class="row">
                            <h2>Le Manhattan</h2>

                            <div class="col-md-10">
                                <p>Le burger composé de grillons grillés au barbecue, de généreuses tranches de cheddar, d'échalotes marinées et d’une sauce westminster.</p>

                            </div>
                            <div class="col-md-2">
                                <i class="fa fa-bug" aria-hidden="true"></i>
                                <i class="fa fa-bug" aria-hidden="true"></i>

                            </div>
                        </div>
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