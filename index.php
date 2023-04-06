<?php
    session_start();
?>
<?php
    include_once "./src/header.inc.php" 
?>
<body>
    <main>
        <section>
            <h2>Retrouvez la fluidité et la <br>simplicité de Gmail sur<br>tous vos appareil</h2>
            <a href="#connection">CRÉER UN COMPTE</a>
        </section>
        <?php
            include_once "./src/inscription.inc.php"
        ?>
        <?php
            include_once "./src/inscription.php"
        ?>
        <?php
            include_once "./src/button.inc.php"
        ?>
    </main>
</body>
</html>