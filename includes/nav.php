<nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="index.php">
                <img src="./images/logobug.png" width="70px" height="50px" alt="Logo" title="BugBurger">
            </a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a href="index.php">Accueil <span class="sr-only">(current)</span></a></li>
                <li><a href="concept.php">Notre concept</a></li>
                <li><a href="burgers.php">Nos Burgers</a></li>
                <li><a href="equipe.php">Notre équipe</a></li>
                <li><a data-target="restos.php" href="restos.php" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">Restaurants<span class="caret"></span></a>
                <ul class="dropdown-menu">
                    <li><a href="resto.php?ville=lyon">Lyon</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=laloupe">La Loupe</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=bordeaux">Bordeaux</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=toulouse">Toulouse</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=strasbourg">Strasbourg</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=paris">Paris</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=Lille">Lille</a></li>
                    <li role="separator" class="divider"></li>
                    <li><a href="resto.php?ville=orleans">Orléans</a></li>
                </ul></li>
                <li><a href="FAQ.php" class=""><i class="fa fa-question-circle" aria-hidden="true" title="FAQ"></i></a></li>
                <li><a href="#Contact"><i class="fa fa-envelope" aria-hidden="true" title="Contactez nous"></i></a></li>
            </ul>
        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>