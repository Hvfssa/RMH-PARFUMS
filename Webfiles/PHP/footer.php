<footer>
    <?php



    if (!empty($_COOKIE["rmh"]) && $_COOKIE["rmh"] === "OK") {
        echo "The cookie has been created";
    } else {
    ?>
        <div>
            <p>This website uses cookies</p>
            <p>Authentification des utilisateurs : Les cookies sont couramment utilisés pour l'authentification des utilisateurs et la gestion
            des sessions. Lorsqu'un utilisateur se connecte à un site web, un cookie contenant un identifiant de session peut être créé.
             Ce cookie permet au serveur d'identifier l'utilisateur et de maintenir sa session pendant qu'il navigue sur les différentes pages du site.</p>
            <form action="../../actions/Produts/cookies.php" method="GET">
                <button type="submit">Accept all the cookies</button>
                <button type="submit">Refuse all the cookies</button>

            </form>
        </div>
    <?php
    }
    ?>
    <div>
        <h3>Nous contacter</h3>
        <ul>
            <li><a href="tel:0312459478" target="_blank" title="redirection vers le numéro de telephone">03 12 45 94 78</a></li>
            <li><a href="mailto:contact@rmhparfum.fr" target="_blank" title="redirection vers le mail">contact@rmhparfum.fr</a></li>
        </ul>
    </div>
    <div>
        <p id="copyright">&#169; 2023 - RMH Parfums | realize by Marie, Hafssa, et Rasha</p>
    </div>
</footer>