<footer class="Well-endPage">
    <section id="Contact" class="Contact">

        <!-- includes Form.php -->
        <div class="well-lg">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12 col-lg-12">
                        <h1>Contactez nous !<small>Vous trouverez la plupart des réponses dans la <a href="#FAQ">FAQ</a></small></h1>
                    </div>
                </div>
            </div>
        </div>

        <!--  Contact form  -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well-lg">
                        <form id="Contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Objet du message</label>
                                        <select id="subject" name="subject" class="form-control" required="required">
s                                            <option value="Restaurant">Question sur un restaurant</option>
                                            <option value="Aventure">Participez à l'aventure</option>
                                            <option value="Presse">Presse</option>
                                            <option value="Suggestions">Suggestions</option>
                                            <option value="Partenariat">Partenariat</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">
                                            Email Address</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                        </span>
                                            <input type="text" class="form-control" id="name" placeholder="Prénom et nom" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Votre email</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                            <input type="email" class="form-control" id="email" placeholder="Votre adresse email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Tel">
                                            Votre numéro de téléphone</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
                                            <input type="tel" class="form-control" id="Tel" placeholder="Votre numéro" required="required" max="10"/>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-success pull-right" id="btnContactUs">Envoyer !</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!--  Footer of page   -->
    <div id="endPage" class="mainFooter">
        <ul class="navFooter">
            <li><a href="index.php">Accueil</a></li>
            <li><a href="concept.php">Concept</a></li>
            <li><a href="burgers.php">Burgers</a></li>
            <li><a href="equipe.php">Equipe</a></li>
            <li><a href="FAQ.php">FAQ</a></li>
            <li><a href="mentionsLegales.php">Mentions Légales</a></li>
        </ul>
        <ul class="navFooter">
            <li><a href="resto.php?ville=lyon">Lyon</a></li>
            <li><a href="resto.php?ville=bordeaux">Bordeaux</a></li>
            <li><a href="resto.php?ville=paris">Paris</a></li>
            <li><a href="resto.php?ville=toulouse">Toulouse</a></li>
            <li><a href="resto.php?ville=Lille">Lille</a></li>
            <li><a href="resto.php?ville=strasbourg">Strasbourg</a></li>
            <li><a href="resto.php?ville=orleans">Orléans</a></li>
            <li><a href="resto.php?ville=laloupe">La Loupe</a></li>
        </ul>
        <div class="Signature">
            <p>© Copyrights BugBurger - 2017</p>
        </div>
    </div>
</footer>
