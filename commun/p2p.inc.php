<footer>
    <h2>teeTIM</h2>
    <div class="contenu">
        <section class="achats">
            <h3><?php $_pp->achats->titre; ?></h3>
            <nav>
                <a href="faq.php" class="faq"><?php $_pp->achats->navFaq; ?></a>
                <a href="livraison.php" class="livraison"><?php $_pp->achats->navLivraison; ?></a>
                <a href="conditions.php" class="conditions"><?php $_pp->achats->navCondition; ?></a>
                <a href="confidentialite.php" class="confidentialite"><?php $_pp->achats->navConfid; ?></a>
            </nav>
        </section>
        <section class="apropos">
            <h3></h3>
            <nav>
                <a href="compagnie.php" class="faq"></a>
                <a href="equipe.php" class="livraison"></a>
                <a href="emploi.php" class="conditions"></a>
            </nav>
        </section>
        <section class="coordonnees">
            <h3></h3>
            <nav>
                <span><b>1 866 888 6666</b></span>
                <span>aide@teetim.ca</span>
            </nav>
        </section>
    </div>
    <p class="da">&copy;teeTIM 2023-<?php echo date('Y') ?></p>
</footer>
</div>
</body>

</html>