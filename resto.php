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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css"/>
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
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
$restaurants = include("./includes/dataresto.php");
$restaurant = $restaurants[$ville];
?>
<!-- Conteneur General ( all the sections of the Home page ) -->

<div class="container-fluid">
<section>
        <div class="jumbotron jumbotronResto">
            <div class="container">
                <h1><?php echo $restaurant['titre']; ?></h1>
                <p><?php echo $restaurant['descriptionlg']; ?></p>
            </div>
        </div>

        <div class="restoImg">


                <div class="col-md-4">
                    <h2>Horaires :</h2>
                    <p><?php echo $restaurant["horaires"] ?></p>
                </div>

                <div class="col-md-4">
                    <h2>Où nous trouver:</h2>
                    <p><?php echo $restaurant["adresse"] . " à " . $restaurant["ville"] . "<br>" . $restaurant["tel"] ?></p>
                </div>

                <div class="col-md-4">
                    <h2>Nos spécificités :</h2>
                    <p>Wi-Fi gratos et bonne humeur !</p>
                </div>


        </div>

        <section>
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2784.2428589204287!2d4.824636650585173!3d45.74627697900265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f4ea4ab604554f%3A0x83e3e33b33887834!2s<?php echo str_replace(" ", "+", $restaurant['adresse'])?>+<?php echo $restaurant['cp']. "+" . $restaurant['ville']?>!5e0!3m2!1sfr!2sfr!4v1506003409500"
                    width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
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