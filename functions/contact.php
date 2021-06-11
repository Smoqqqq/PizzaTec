<?php

$form_has_error = false;

if (isset($_POST['send-contact']) && $_POST['send-contact']) {

    $fields = array(
        "name" => array("value" => htmlentities($_POST['name']),"label" => "Nom"),
        "phone" => array("value" => htmlentities($_POST['phone']),"label" => "Numéro de téléphone"),
        "mail" => array("value" => htmlentities($_POST['mail']),"label" => "E-mail"),
        "presta" => array("value" => htmlentities($_POST['presta']),"label" => "Prestation"),
        "message" => array("value" => htmlentities($_POST['message']),"label" => "Message"),
    );

    foreach ($fields as $field) {
        if ($field['value'] == null) {
            $form_has_error = true;
        }
    }

    if (!$form_has_error) {
        $headers = "MIME-Version: 1.0\r\n";
        $headers .= 'FROM:' . "$conf_name" . '<leflempaul@gmail.com>' . "\n";
        $headers .= 'Content-Type:text/html; charset="utf-8"' . "\n";
        $headers .= 'Content-Transfer-Encoding: 8bit';
        $object = "Demande de contact de " . $fields['mail']['value'];
        $mail_body = "
        <html>
            <body>
                <h1>Demande de contact</h1>
                <hr>
                <h2>Contenu de la demande :</h2>
        ";
        foreach ($fields as $field) {
            if ($field != null) {
                $mail_body .= '<br><b>' . $field["label"] . '</b> : ' . $field['value'];
            }
        }
        $mail_body .= "    
                <hr>
                <div style='background: grey; color: white; padding: 20px'>
                $conf_name
                <br><a href='$conf_name_website' style='color: white; text-decoration: underline'>$conf_name_website</a>
                </div>
            </body>
        </html>";
        mail($conf_email, $object, $mail_body, $headers);
        header('location: contact?success'); 
    }
}

if (isset($_GET['success'])) {
    echo "<p class='success'>Demande de contact envoyée !</p>";
}
