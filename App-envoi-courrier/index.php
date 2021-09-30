<?php 

require("lib/functions.php");
$errorDes = $errorExp= $errorObj = $errorMg ="";
$valueDes = $valueExp = $valueObj = $valueMg = $valueEnv = "";
$valid_data = false;
check();

if ($valid_data) {
    $destinataire = $valueDes;
    $objet = $valueObj;
    $message = $valueMg;
    $entete['From'] = " \"Expediteur\" <".$valueExp.">";
    $entete['Reply-To'] = " \"Expediteur\" <".$valueExp.">";
    $entete['X-Priority'] = "1";
    $envoi = mail($destinataire,$objet,$message,$entete);
    if ($envoi) {
        $valueEnv = "Félicitations, votre message a été envoyé avec succès !";
        $errorDes = $errorExp= $errorObj = $errorMg ="";
        $valueDes = $valueExp = $valueObj = $valueMg = "";
    }else {
        $valueEnv = "L'envoi de votre message a échoué. <br>Merci de réessayer ultérieurement.";

    }
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application d'envoi de courrier</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
</head>
<body style="background-color: #DAF7A6;">
    <h1> Application d'envoi de courrier</h1>
    <div class="container">

    <form class="" action ="" method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="">Expéditeur <span>*</span></label>
                <input type="email" class="form-control" name="inputEmailExpediteur" value="<?php echo $valueExp; ?>"
                placeholder="Entrez votre email">
                <p class="comment-error"><?php echo $errorExp; ?><p>
            </div>
            <div class="form-group col-md-6">
                <label for="">Destinataire <span>*</span> </label>
                <input type="email" class="form-control" name="inputEmailDestinataire" value="<?php echo $valueDes; ?>"
                placeholder="Entrez son email" >
                <p class="comment-error"><?php echo $errorDes; ?><p>
            </div>
        </div><!-- Fin form-row-->
            <div class="form-row">
                <label for="">Objet <span>*</span></label>
                <input type="text" class="form-control" placeholder="Précisez l'objet" name="InputObjet" value="<?php echo $valueObj; ?>" >
                <p class="comment-error"><?php echo $errorObj; ?><p>
            </div><!-- Fin form-row-->
            <div class="form-row">
                <label for="">Message <span>*</span></label>
                <textarea class="form-control" name="InputMessage" rows="8" cols="80"><?php echo $valueMg; ?></textarea>
                <p class="comment-error"><?php echo $errorMg; ?><p>
            </div><!-- Fin form-row-->
            <p class="comment-obligatoire"><span>*</span> Ces champs sont obligatoires</p>

            <input type="submit" class="btn btn-lg btn-outline-success" name="" value="Envoyer"> 
            <p class="comment-success"><?php echo $valueEnv; ?><p>
    </form>

    </div><!-- Fin Container-->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>
</body>
</html>