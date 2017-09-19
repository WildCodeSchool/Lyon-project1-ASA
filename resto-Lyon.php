<?php
    $ville = $_GET['ville'];
?> <!-- resto.php?ville=lyon -->

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
    $restaurants = include("dataresto.php");
    $restaurant = $restaurants[$ville];
?>
<!-- Conteneur General ( all the sections of the Home page ) -->
<<<<<<< HEAD
<div class="container">
    <section>
        <div>
            <h1>Manger un Bug Burger à Lyon</h1>
            <div>
                 <p class="description">Au coeur du nouveau quartier né de la réhabilitation de la prison Saint Paul, le Bug Burger vous accueille dans une ambiance chaleureuse et feutrée, idéale pour les repas en famille, entre amis ou pour une pause déjeuner conviviale et originale.</p>
            </div>
            <div class="restoImg">

            </div>
        </div>
        <?php
        // include('./includes/workInProgress.php');
        ?>
    </section>

    <section class="detail_restaurant">
        <div class="row detail_single_restaurant">
            <div class="col-md-5">
                <h2>Horaires d'ouverture :</h2>
                    <p><?php echo $restaurant["horaires"] ?></p>
            </div>
            <div class="col-md-6">
                <h2>Où nous trouver ?</h2>
=======
<div class="container-fluid">
    <section class="name_restaurant">
        <div class="restaurant_city">
            <h2 class="title_city">Manger un Bug Burger à Lyon</h2>
        </div>
        <?php
           // include('./includes/workInProgress.php');
        ?>
    </section>
    <section class="single_restaurant_map">
        <!-- INSERER UNE GOOGLE MAP CENTREE SUR LE RESTO SOLO -->

    </section>
    <section class="detail_restaurant">
        <div class="row detail_single_restaurant">
            <div class="col-md-5">
                <a class="timetable">Horaires d'ouverture :</a>
                <ul>
                    <li>Lundi : fermé</li>
                    <li>Mardi à Samedi : 11:00-14:00, 18:30-22:00</li>
                    <li>Dimanche : 18:00-22:00</li>
                </ul>
            </div>
            <div class="col-md-6">
                <h3>Bug Burger - Lyon</h3>
>>>>>>> a7731bb8347c0d7ff263af222f77857e7a581f76
                <address>
                    <span class="addr">17 rue Delandine<br>69002 Lyon</span>
                    <span class="phone">
                        <abbr title="Téléphone">Tél.</abbr>
                        <a class="phone" href="tel:0478000000"> 04 78 00 00 00</a>
                    </span>
                </address>
<<<<<<< HEAD
            </div>
            <section class="single_restaurant_map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.236524552082!2d4.824765950868314!3d45.74640397900267!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ac9e1fd2f%3A0xabc36e768b27c9a0!2sWild+Code+School!5e0!3m2!1sfr!2sfr!4v1505810718683" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
            </section>
=======
                <p class="description">Au coeur du nouveau quartier né de la réhabilitation de la prison Saint Paul, le Bug Burger vous accueille dans une ambiance chaleureuse et feutrée, idéale pour les repas en famille, entre amis ou pour une pause déjeuner conviviale et originale.</p>
            </div>

>>>>>>> a7731bb8347c0d7ff263af222f77857e7a581f76
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