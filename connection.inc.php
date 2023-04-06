<header>
    <a href="#"><img src="./asset/imgmail.png" alt="gmail"></a>
    <nav>
        <ul>
            <li><a href="#">POUR LES PROS</a></li>
            <li><a href="./index.php">CRÉER UN COMPTE</a></li>
        </ul>
    </nav>
</header>
<body>
    <main>
        <div class="form">
            <h3>Une boîte de réception entièrement repensée</h3>
            <p>Avec les nouveaux onglets personnalisables, repérez immédiatement les nouveaux messages et choisissez
                ceux que vous souhaitez lire en priorité.</p>
            <fieldset id="connection">
                <legend>Créer un compte</legend>
                <form method="post">
                    <label for="nom">Nom<sup>*</sup></label> <br>
                    <input type="text" id="nom" name="nom" placeholder="Votre nom" aria-required="true" autofocus> <br>
                    <label for="prenom">Prénom<sup>*</sup></label> <br>
                    <input type="text" id="prenom" name="prenom" placeholder="Votre prénom" aria-required="true"> <br>
                    <label for="email">Mail<sup>*</sup></label> <br>
                    <input type="text" id="email" name="email" placeholder="Votre mail" aria-required="true"> <br>
                    <label for="password">Choisir votre mot de passe<sup>*</sup></label> <br>
                    <input type="password" id="password" name="password" placeholder="Votre mot de passe" aria-required="true"> <br>
                    <input type="submit" id="submit" value="Valider votre compte" aria-label="envoyer">
                </form>
            </fieldset>
        </div>
        <?php
            include_once "./src/connection.php"
        ?>
    </main>
</body>