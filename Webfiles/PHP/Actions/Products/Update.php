<?php
//Connexion à la BDD rmh
require("../../dbConnect.php");

//Check connexion
if ($connexion) {
    //Check array POST
    if ($_POST) {
        $id= $_POST["id"];
        $name = $_POST["nameProduct"];
        $img = $_POST["imageProduct"];
        $desc = $_POST["descriptionProduct"];
        $marque = $_POST["marque"];
        $price = $_POST["price"];

        $requête = "UPDATE products SET nameProduct= '$name', imageProduct= '$img', descriptionProduct= '$desc', marque= '$marque', price= '$price' WHERE id= '$id' ";
        $exe = $connexion->query($requête);
        //Check execution
        if ($exe != FALSE) {
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
