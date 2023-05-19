<?php require("../../header.php");

//Connexion à la BDD rmh
require("../../dbConnect.php");
//Check connexion
if ($connexion) {
    //Check Array POST
    if ($_POST) {
        $id = $_POST["id"];
        $requête = "SELECT * FROM products WHERE id= '$id' ";
        $exe = $connexion->query($requête);
        //Chexk execution
        if ($exe != FALSE) {
            $result = $exe->fetchAll(PDO::FETCH_ASSOC); ?>
            <form action="../../Actions/Products/Update.php" method="POST">
                <input type="hidden" name="id" value="<?= $result["0"]["id"]; ?>">
                <input type="text" name="nameProduct" value="<?= $result["0"]["nameProduct"]; ?>">
                <input type="url" name="imageProduct" value="<?= $result["0"]["imageProduct"]; ?>">
                <input type="text" name="descriptionProduct" value="<?= $result["0"]["descriptionProduct"]; ?>">
                <input type="text" name="marque" value="<?= $result["0"]["marque"]; ?>">
                <input type="number" name="price" value="<?= $result["0"]["price"]; ?>">
                <button type="submit">Modifier le produit</button>
            </form>
        <?php
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










?>