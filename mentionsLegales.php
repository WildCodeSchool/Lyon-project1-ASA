<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="./images/logobug.png">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Mentions Légales | BugBurger</title>
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
            <h1>Mentions légales :</h1>
            <p>Le site www.lafabriquedunet.fr est édité par la société Lidera SAS, inscrite au registre du commerce et des sociétés de Paris sous le numéro RCS 827 783 531, au capital de 1000€. Le siège social est au 42 rue Maubeuge, 75018 Paris. Numéro de TVA intra-communautaire : FR 61827783531.</p>
            <p>Directeur de la publication : Yassine Hamou Tahra<br />
                Email : contact [AT] lafabriquedunet.fr</p>
            <p>Les Conditions Générales de Services de La Fabrique du Net à destination des porteurs de projets, ou des professionnels, sont disponibles depuis ce lien.</p>
            <p>Les utilisateurs, de ce site sont tenus de respecter la légalité et en particulier les dispositions de la loi Informatique et libertés dont la violation est sanctionnée pénalement. Ils doivent notamment s’abstenir, s’agissant des informations auxquelles ils accèdent, de toute collecte, captation, déformation ou utilisation et d’une manière générale de tout acte susceptible de porter atteinte à la vie privée ou à la réputation des personnes. Les utilisateurs sont informés, conformément aux dispositions de la loi Informatique et libertés qu’ils disposent d’un droit d’accès et de rectification relativement aux informations les concernant auprès de Lidera SAS.</p>
            <p>La structure générale, ainsi que les textes, composant ce site sont la propriété de la société Lidera SAS et ses partenaires. Toute représentation totale ou partielle de ce site ou d’un ou plusieurs de ses composants, par quelque procédé que ce soit, sans autorisation expresse de la société Lidera SAS est interdite et constituerait une contrefaçon sanctionnée par les articles L.335-2 et suivants du Code de la propriété intellectuelle.</p>
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
