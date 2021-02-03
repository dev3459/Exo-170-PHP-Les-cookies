<?php

/**
 * 1. Créez un cookie de nom username ayant pour valeur votre prénom
 * 2. Affichez la valeur de ce cookie avec un simple echo.
 */
// TODO Votre code ici.
// setcookie("username", "Gaëtan");
// echo $_COOKIE['username'];


/**
 * 3. Commentez le code du point 1 et 2
 * 4. Créez un cookie de nom username ayant pour valeur votre nom et expirant dans 2 jours et 2h, le domaine doit être localhost ( votre machine )
 * 5. Créez une page bio.php et tentez d'afficher le cookie username sur cette page.
 */
// TODO Votre code ici.
setcookie('username', 'Gaetan', time() + 180000, "/", 'localhost');
if(isset($_COOKIE['username'])){
    echo "Le cookie username a été généré !";
}else{
    echo "Il y a eu un soucis lors de la génération du cookies username !";
}
?>

<a href="bio.php">Passer à la page bio.php</a>