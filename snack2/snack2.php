<!--
## Snack 2
Passare come parametri GET name, mail e age e verificare (cercando i metodi che non conosciamo nella documentazione) 
che name sia più lungo di 3 caratteri, che mail contenga un punto e una chiocciola e che age sia un numero. 
Se tutto è ok stampare “Accesso riuscito”, altrimenti “Accesso negato” 
-->

<?php

$nameUser = key_exists("name", $_GET) ? trim($_GET["name"]) : false;
$mailUser = key_exists("mail",$_GET) ? trim($_GET["mail"]) : false;
$ageUser = key_exists("age",$_GET) ? trim($_GET["age"]): false;

$userName = true;
$userMail = true;
$userAge = true;
// condition for the nameUser
if(!$nameUser){
    echo "Nome Utente mancante";
}else{

    // here i will write all my condition for nameUser
    if( strlen($nameUser)<= 3){
        $userName=false;
        echo "<span>Nome non valido</span>";

    }elseif(strlen($nameUser) >= 3 ){
        echo  "<strong>Nome Valido</strong>";
    }
    var_dump($nameUser);
};

$userMail= false;

if(!$mailUser){
    echo "Email Utente Mancante";
}else{

    // here i will write my condition for mailUser
    if(stripos($mailUser,"@") and strpos($mailUser, ".")){
        echo "Email valida";
    }

    if(stripos($mailUser, "@")){
        $userMail=false;
    }else{
        echo "Ti sei dimenticato di inserire la @";
    };

    if(strpos($mailUser, ".")){
        $userMail=false;
    }else{
        echo "ti sei dimanticato di inserire il .";
    }
    var_dump($mailUser);
};

$userAge=false;

if(!$ageUser){
    echo "età mancante";
}else{

    // i will write here all my condition for numeric age
    if(is_numeric($ageUser)){
        $userAge= false;
    echo "Età valida";
    }else{
        echo "Età non valida";
    }
    var_dump($ageUser);



};





?>