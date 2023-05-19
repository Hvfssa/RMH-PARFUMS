<?php require("../../header.php"); require("../../Actions/Users/function.php"); ?>

<form action="../../Actions/Users/scriptConnect.php" method="POST">
    <label for="mail">E-Mail</label>
    <input type="email" name="email" id="mail" required>
    <label for="pwd">mot de passe</label>
    <input type="password" name="pwsd" id="pwd" required>
    <button type="submit">Se connecter</button>
    <p>Nouveau chez RMH Parfums ?</p>
    <form action="./inscriptionForm.php" method="POST">
        <button type="submit">S'inscrire</button>
    </form>
</form>
<?php require("../../footer.php"); ?>