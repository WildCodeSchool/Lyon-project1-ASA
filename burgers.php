<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logoBUG.png">
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

        <h1>Découvrez nos différents burgers :</h1>

        <div class="containerBurgers">
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger">
                        <i class="fa fa-bug fa-2x" aria-hidden="true"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger" title="Ceci est la note attribué en fonction des avis de nos clients">
                        <i class="fa fa-bug fa-2x" aria-hidden="true" title="Ceci est la note attribué en fonction des avis de nos clients"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingrédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger">
                        <i class="fa fa-bug fa-2x" aria-hidden="true"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingrédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger">
                        <i class="fa fa-bug fa-2x" aria-hidden="true"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingrédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger">
                        <i class="fa fa-bug fa-2x" aria-hidden="true"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingrédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>
            <article class="itemBuger">
                <header class="headBurger">
                    <div class="nameBurger">
                        <p>Nom burger</p>
                    </div>
                    <div class="tagBurger">
                        <i class="fa fa-bug fa-2x" aria-hidden="true"></i>
                    </div>
                </header>
                <div class="infoBurgers">
                    <p class="ingredients">Les différents ingrédients</p>
                    <ul>
                        <li>Lorem</li>
                        <li>lorem</li>
                        <li>lorem</li>
                        <li>Lorem</li>
                    </ul>
                </div>
            </article>

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