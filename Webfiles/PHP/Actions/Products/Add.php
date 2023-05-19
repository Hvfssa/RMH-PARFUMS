<?php
//Connexion à la BDD
require("../../../PHP/dbConnect.php");
//Ajout de produit
if (!empty($connexion)) {
    if ($_POST) {
        $name = $_POST["nameProduct"];
        $img = $_POST["imageProduct"];
        $desc = $_POST["descriptionProduct"];
        $gender = $_POST["gender"];
        $marque = $_POST["marque"];
        $price = $_POST["price"];

        $req = "INSERT INTO products (nameProduct, imageProduct, descriptionProduct, gender, marque, price) 
        VALUES ('$name', '$img', '$desc','$gender','$marque','$price')";
        $exe = $connexion->query($req);
        if ($exe != false) {
            header('Location: ../../../../index.php');
?>
            <p class="vert"><?= "L'ajout a fonctionné"; ?></p>
        <?php
        }
    } else {
        ?>
        <p class="rouge"><?= "L'ajout a échoué"; ?></p>
    <?php
    }
} else {
    ?>
    <p class="rouge"><?= "La connexion à la BDD a échoué"; ?></p>
<?php
}

?>