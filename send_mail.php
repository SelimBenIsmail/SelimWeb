<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Requête </title>
</head>
<body>
    <?php
    // Vérifier si le formulaire est soumis 
    // if ( isset( $_POST['submit'] ) ) {
        // récupérer les données du formulaire en utilisant la valeur des attributs name comme clé 
        $nameS = $_POST['n-sender']; 
        $mailS = $_POST['m-sender']; 
        $msg = $_POST['msg'];
        $to='selim.doms@gmail.com';
        $subject = ' new mail from the website';

        // afficher le résultat
        echo 'Thank you '. $nameS . '<br> Your message was succefully sent <br>'; 
        $msg = ' New mail from ' . $mailS . ' to ' . $to . ': ';
        echo '" ' .$msg . ' "';
        echo 'from ' . $mailS . ' to ' . $to ;
        //echo ' New mail from ' . $mailS . ' to ' . $to . ': <br>' . $msg;
        mail($to,$subject,$msg);
        exit;
    // }
    ?>
    <button onclick= "window.location.href = 'https://selimbenismail.be#contact';"> Retour </button>
</body>
</html>