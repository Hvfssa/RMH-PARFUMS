<?php require("./Webfiles/PHP/header.php");
session_start(); ?>
<main>
    <?php require("./Webfiles/PHP/Actions/Products/Create.php"); ?>
    <h2>Nos best sellers</h2>
    <div class="container">
        <?php
        //connexion à la BDD rmh
        require("./Webfiles/PHP/dbConnect.php");

        //Nos cookies
        setcookie("rmh", "OK", time() + 2592000, "/");
        //Check connexion
        if (!empty($connexion)) {
            // echo "succés";
            $requête = "SELECT * FROM Products";
            $exe = $connexion->query($requête);
            if ($exe != FALSE) {
                //echo "execution successfull";
                $result = $exe->fetchAll(PDO::FETCH_ASSOC);
                foreach ($result as $singleTuple) { ?>
                    <div class="card">

                        <?php
                        if (!empty($_SESSION) && $_SESSION["connected"] === TRUE) { ?>
                            <form action="./Webfiles/PHP/Actions/Products/Delete.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $singleTuple["id"]; ?>">
                                <button type="submit">X</button>
                            </form>
                            <form action="./Webfiles/PHP/Views/Products/formUpdate.php" method="POST">
                                <input type="hidden" name="id" value="<?php echo $singleTuple["id"]; ?>">
                                <button type="submit">Edit</button>
                            </form>
                        <?php
                        } else {
                            echo "Connectez-vous";
                        }
                        ?>

                        <img src="<?= $singleTuple["imageProduct"]; ?>" alt="Illustartion de <?php echo $singleTuple["imageProduct"]; ?>">
                        <p class="prix"><?php echo $singleTuple["price"]; ?></p>
                        <p class="product"><?php echo $singleTuple["nameProduct"]; ?></p>
                        <p class="product"><?php echo $singleTuple["marque"]; ?></p>
                        <p class="product"><?php echo $singleTuple["gender"]; ?></p>
                        <p class="product"><?php echo $singleTuple["descriptionProduct"]; ?></p>
                        <button type="submit">Acheter</button>
                    </div>
                <?php
                }
            } else { ?>
                <p class="rouge"><?= "ERROR d'execution de la requête"; ?></p>
            <?php
            }
        } else { ?>
            <p class="rouge"><?= "ERROR de connexion à la BDD"; ?></p>
        <?php
        }
        ?>
    </div>
</main>
<?php require("./Webfiles/PHP/footer.php"); ?>