<?php require("../../dbConnect.php");

//Check connexion
if(!empty($connexion)){
    $fname= $_POST["fName"];
    $mail= $_POST["email"];
    $pwd= $_POST["pwsd"];
    $requête= "INSERT INTO users(fullname, email, pwd) VALUES ('$fname', '$mail', '$pwd')";
    $exe= $connexion->query($requête);
    if($exe != FALSE){
        echo "execution good";
        header("Location: ../../../../index.php");
    }else{
        echo "execution not good";
    }
}else{
    echo "connxion failed";
}