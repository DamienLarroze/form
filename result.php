<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['mail']) && !empty($_POST['phoneNumber']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            $firstName = htmlspecialchars($_POST['firstName']);
            $lastName = htmlspecialchars($_POST['lastName']);
            $mail = htmlspecialchars($_POST['mail']);
            $mail = filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL);
            $phone = htmlspecialchars($_POST['phoneNumber']);
            $sujet = htmlspecialchars($_POST['sujet']);
            $message = htmlspecialchars($_POST['message']);

            echo "Merci <strong>$lastName $firstName</strong> de nous avoir contacté à propos de “<strong>$sujet</strong>”.

        Un de nos conseiller vous contactera soit à l’adresse <strong>$mail</strong> ou par téléphone au <strong>$phone</strong> dans les plus brefs délais pour traiter votre demande : <br><br>
        
        $message";
        } else {
            echo "Votre mail n'est pas un mail valide !";
        }
    } else {
        echo "Vous avez un champ vide !";
    }
}
