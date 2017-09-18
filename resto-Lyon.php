<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logoBUG.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Lyon | BugBurger</title>
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
<?php include("dataresto.php"); ?>
<!-- Conteneur General ( all the sections of the Home page ) -->
<div class="container-fluid">

     <section class="container">
                <section class="row">
        <div class="col-md-12">
            <!-- Contenu de la page -->
            <div class="col-md-8">
                <h1><?php echo $restaurant['lyon']['titre']?></h1>
                <p> <?php echo $restaurant['lyon']['description']?> </p>
                <h2 id="horaires">Horaires d'ouverture</h2>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.242858920429!2d4.8246366504860925!3d45.74627697900278!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ab604554f%3A0x83e3e33b33887834!2s17+Rue+Delandine%2C+69002+Lyon!5e0!3m2!1sfr!2sfr!4v1505738346379" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                <p> <?php echo $restaurant['lyon']['horaires']?> </p>
                <h2 id="adresse">Adresse</h2>
                <p> <?php echo $restaurant['lyon']['adresse']?> </p>
                <p> <?php echo $restaurant['lyon']['ville']?> </p>
                <h2 id="tel">Téléphone</h2>
            </div>

            <!-- menu de la page pour naviguer via les ancres -->
            <div class="col-md-4">
                <div class="btn-group-vertical" role="group" aria-label="...">

                    <button type="button" class="btn btn-default"><a href="#horaires">Horaires</a></button>
                    <button type="button" class="btn btn-default"><a href="#adresse">Adresse</a></button>
                    <button type="button" class="btn btn-default"><a href="#tel">Téléphone</a></button>

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