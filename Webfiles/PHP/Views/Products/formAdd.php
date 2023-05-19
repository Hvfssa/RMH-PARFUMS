<?php require("../../header.php");
require("../../dbConnect.php"); ?>

<h2>Formulaire d'ajout de produit</h2>

<form action="../../Actions/Products/Add.php" method="POST">
    <input type="text" name="nameProduct" id="nameProduct" placeholder="Nom du produit">
    <input type="url" name="imageProduct" id="imageProduct" placeholder="Photo du produit">
    <input type="text" name="descriptionProduct" id="descriptionProduct" placeholder="Description du produit">
    <input type="radio" name="gender" id="homme" value="homme">
    <label for="homme">Homme</label>
    <input type="radio" name="gender" id="femme" value="femme">
    <label for="femme">Femme</label>
    <input type="radio" name="gender" id="non" value="non">
    <label for="non">Non-genré</label>
    <input type="text" name="marque" id="marque" placeholder="Marque du produit">
    <input type="number" name="price" id="price" step="0.01" placeholder="49.90">
    <button type="submit">Ajouter le produit</button>
</form>

<?php require("../../footer.php"); ?>