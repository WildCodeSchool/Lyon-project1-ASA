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
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="well-lg">
                        <form id="Contact">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="subject">Pourquoi voulez nous contactez : </label>
                                        <select id="subject" name="subject" class="form-control" required="required">
                                            <option value="na" selected="">Raison de votre message :</option>
                                            <option value="service">General Customer Service</option>
                                            <option value="suggestions">Suggestions</option>
                                            <option value="product">Product Support</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="name">
                                            Email Address</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span>
                                        </span>
                                            <input type="text" class="form-control" id="name" placeholder="Vos Nom et Prénom" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email">
                                            Email Address</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span>
                                        </span>
                                            <input type="email" class="form-control" id="email" placeholder="Enter email" required="required" /></div>
                                    </div>
                                    <div class="form-group">
                                        <label for="Tel">
                                            Your phone number</label>
                                        <div class="input-group">
                                        <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span>
                                        </span>
                                            <input type="tel" class="form-control" id="Tel" placeholder="Entré votre numéro" required="required" /></div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">
                                            Message</label>
                                        <textarea name="message" id="message" class="form-control" rows="9" cols="25" required="required"
                                                  placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <button type="submit" class="btn btn-primary pull-right" id="btnContactUs">
                                        Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <div id="endPage" class="mainFooter">
        <ul class="navFooter">
            <li>Acceuil</li>
            <li>Concept</li>
            <li>Equipe</li>
            <li>FAQ</li>
            <li>Mentions Légales</li>
        </ul>
        <ul class="navFooter">
            <li>Lyon</li>
            <li>Bordeaux</li>
            <li>Paris</li>
            <li>Toulouse</li>
            <li>Lille</li>
            <li>Strasbourg</li>
            <li>Orléans</li>
            <li>La Loupe</li>
        </ul>
    </div>
    <div class="Signature">
        <p>© Copyrights BugBurger - 2017</p>
    </div>
</footer>
