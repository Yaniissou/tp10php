<?php
// Envoit sur le login


$login = $_POST["login"] ?? null;
$password = $_POST["password"] ?? null;
$query = $_POST["submit"] ?? null;

session_start();



switch ($query){
    case "login":
        if($login == "Yanis" && $password == "yanis"){
            $_SESSION['login'] = $login;
        }
        break;
    case "forgot":
        echo "forgot account";
        include("view/not_implemented.html");
        break;
    case "new":
        echo "new account";
        include("view/not_implemented.html");
        break;    
}

if(isset($_SESSION['login'])){
    
    $login = $_SESSION["login"];
    include("view/main.php");
}
else{
    include("view/login.html");
}



//Stockage
//isset($_SESSION['login']) ? include("view/main.php") : include("view/login.html"); 

?>
