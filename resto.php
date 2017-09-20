<?php
$ville = $_GET['ville'];
?>

<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
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
<?php
$restaurants = include("includes/dataresto.php");
$restaurant = $restaurants[$ville];
?>
<!-- Conteneur General ( all the sections of the Home page ) -->
<<<<<<< HEAD
<div class="container-fluid">
    <section>
        <div class="jumbotron jumbotronResto">
            <div class="container">
                <h1>Manger un Bug Burger à <?php echo $restaurant['ville'] ?></h1>
                <p>Au coeur du nouveau quartier né de la réhabilitation de la prison Saint Paul, le Bug Burger vous accueille dans une ambiance chaleureuse et feutrée, idéale pour les repas en famille, entre amis ou pour une pause déjeuner conviviale et originale.</p>
            </div>
        </div>
            <div class="restoImg">
                <section>

                    <div class="col-md-4">
                        <h2>Horaires d'ouverture :</h2>
                        <p><?php echo $restaurant["horaires"] ?></p>
                    </div>

                    <div class="col-md-4">
                        <h2>Où nous trouver:</h2>
                        <p><?php echo $restaurant["adresse"] ?></p>
                        <p><?php echo $restaurant["ville"] ?></p>
                        <p><?php echo $restaurant["tel"] ?></p>
                    </div>

                    <div class="col-md-4">
                        <h2>Nos spécificités :</h2>
                        <p>Wi-Fi gratos et bonne humeur !</p>
                    </div>
                </section>

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