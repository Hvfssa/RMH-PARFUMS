<?php
//Connection
require_once('../../dbConnect.php');
//require_once("./function.php");
//session_start();
if (!empty($connexion)){
    if($_POST){
    $mail = $_POST["email"];
    $pwd = $_POST["pwsd"];
    //$hash = hash("md5", $password);
    //$hashed = hash("sha256", $hash);
    $req = "SELECT * FROM users WHERE email = '$mail' AND pwd = '$pwd'";
    $exe = $connexion->prepare($req);
    if($exe != FALSE){
        $result = $exe->fetchAll(PDO::FETCH_ASSOC);    
    if(!empty($result)){
        echo "vous êtes connecté";
        
       // $_SESSION["connected"] = TRUE;
       // if($_SESSION["connected"] === TRUE){
          //  echo "connecté";
       // }
       // else{
         //   echo "erreur";
      //  }
        
    }
    }
    else{
        echo "Identifiants incorrects";
    }
}
}
else{
    echo "Vous n'êtes pas connecté";
}
?>