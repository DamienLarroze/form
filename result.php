<?php

if (isset($_POST['submit'])) {
    if (!empty($_POST['firstName']) && !empty($_POST['lastName']) && !empty($_POST['mail']) && !empty($_POST['phoneNumber']) && !empty($_POST['sujet']) && !empty($_POST['message'])) {
        if (filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
            if (preg_match('/^[0-9]{10}+$/', $phone)) {
                $firstName = htmlspecialchars(stripslashes($_POST['firstName']));
                $lastName = htmlspecialchars(stripslashes($_POST['lastName']));
                $mail = htmlspecialchars(stripslashes($_POST['mail']));
                $mail = filter_var(stripslashes($_POST['mail'], FILTER_VALIDATE_EMAIL));
                $phone = htmlspecialchars(stripslashes($_POST['phoneNumber']));
                $sujet = htmlspecialchars(stripslashes($_POST['sujet']));
                $message = htmlspecialchars(stripslashes($_POST['message']));

                echo "Merci <strong>$lastName $firstName</strong> de nous avoir contacté à propos de “<strong>$sujet</strong>”.
                Un de nos conseiller vous contactera soit à l’adresse <strong>$mail</strong> ou par téléphone au <strong>$phone</strong> dans les plus brefs délais pour traiter votre demande : <br><br>
                $message";
            }
        } else {
            echo "Votre mail n'est pas un mail valide !";
        }
    } else {
        echo "Vous avez un champ vide !";
    }
}
