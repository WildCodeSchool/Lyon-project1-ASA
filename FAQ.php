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
                <summary><h2>1: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>2: Voici ma réponse : blablablablabla</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>3: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>Voici ma réponse : blablablablabla</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>4: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>Voici ma réponse : blablablablabla</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>5: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>6: Voici ma réponse : blablablablabla</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>7: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>Voici ma réponse : blablablablabla</legend>
                </fieldset>
            </details>
            <details open>
                <summary><h2>8: Ma question est la suivante : blablaba</h2></summary>
                <fieldset>
                    <legend>Voici ma réponse : blablablablabla</legend>
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