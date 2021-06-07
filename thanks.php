<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8" />
        <style>
			#response {
				/* Just to center the form on the page */
				margin: 0 auto;
				width: 400px;
				/* To see the outline of the form */
				padding: 1em;
				border: 1px solid #ccc;
				border-radius: 1em;
                }
        </style>
	</head>

	<body>
        <div id="response">
        <?php
            echo "Merci " . $_POST['first_name'] . " " . $_POST['last_name'] . " de nous avoir contacté à propos de “" . $_POST['subject'] . "”. <br/>
            Un de nos conseiller vous contactera soit à l’adresse " . $_POST['user_mail'] . " ou par téléphone au " . $_POST['user_phone'] . " dans les plus brefs délais pour traiter votre demande : <br/>"

            . $_POST['user_message'];
            

            ?>
        </div>

    </body> 
</html>

