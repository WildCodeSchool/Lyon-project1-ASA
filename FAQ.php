<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>FAQ | BugBurger</title>
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

    <section>
        <div class="container containerFAQ">
            <h1>Foire Aux Questions</h1>
            <p>Nous avons répondu à vos questions les plus pertinentes ... et courantes !</p>
            <details open>
                <summary><h2>Est-ce que les insectes peuvent nous rendre malades ?</h2></summary>
                <fieldset>
                    <legend>Les nôtres sont vaccinés contre la plupart des maladies, pas de problèmes !</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>A partir de quel âge peut-on manger des burgers aux insectes ?</h2></summary>
                <fieldset>
                    <legend>On conseille d'attendre un âge suffisant pour manger autre chose que des purées (nous ne vendons pas de purées d'insectes).</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>Est-ce que les végétariens peuvent manger des insectes ?</h2></summary>
                <fieldset>
                    <legend>La consommation d’insectes semble être proche des motivations des végétariens, cependant les différents régimes végétariens ne prévoient pas de consommation d’insectes pour le moment.
                    </legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>Quel est l’insecte le plus adapté à une première dégustation ?</h2></summary>
                <fieldset>
                    <legend>Les grillons et les vers de farine sont des espèces faciles à préparer et à cuisiner. Ils ont aussi l’avantage d’être nutritif et délicieux.</legend>
                </fieldset>
            </details>


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