<?php
// Connexion à la BDD
require("../../dbConnect.php");

//Check connexion
if (!empty($connexion)) {
    //Check Array POST
    if ($_POST) {
        $id = $_POST["id"];
        $requête = "DELETE FROM products WHERE id= '$id' ";
        $exe = $connexion->query($requête);
        if ($exe != FALSE) {
            // echo "Suppression good";
            header("Location: ../../../../index.php");
        } else { ?>
            <p class="rouge"><?= "execution failed"; ?></p>
        <?php
        }
    } else { ?>
        <p class="rouge"><?= "Array POST not found"; ?></p>
    <?php
    }
} else { ?>
    <p class="rouge"><?= "connexion to rmh failed"; ?></p>
<?php
}
