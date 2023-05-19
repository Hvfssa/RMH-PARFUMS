<?php require("../../header.php");
require("../../Actions/Users/function.php"); ?>

<form action="../../Actions/Users/scriptInscription.php" method="POST">
    <label for="fname">FULLNAME</label>
    <input type="text" name="fName" id="fname">
    <label for="mail">E-Mail</label>
    <input type="email" name="email" id="mail">
    <label for="pwd">mot de passe</label>
    <input type="password" name="pwsd" id="pwd">
    <button type="submit">Se connecter</button>
</form>
<?php require("../../footer.php"); ?>