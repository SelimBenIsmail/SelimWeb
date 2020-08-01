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
        $headers = array(
            'From' => $mailS,
            'Reply-To' => $mailS,
            'X-Mailer' => 'PHP/' . phpversion()
        );
        // afficher le résultat
        echo 'Thank you '. $nameS . '<br> Your message was succefully sent <br>'; 
        //$msg = ' New mail from ' . $mailS . ' to ' . $to . ': ';
        echo 'from ' . $mailS . ' to ' . $to ;
        //mail($to,$subject,$msg,);
        mail($to,$subject,$msg,$headers);
        exit;
    // }
    ?>
    <button onclick= "window.location.href = 'https://selimbenismail.be#contact';"> Retour </button>
</body>
</html>