<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Questions</title>
    <link rel="stylesheet" href="../../css/normalize.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <?php
    include('../header.php');
    ?>
    <main>
        <section class="formulaire">
            <form action="index.php" method="post">
                <div class="prenom">
                    <input type="text" name="user_name" id="name" placeholder="Votre prénom">
                </div>
                <div class="nom">
                    <input type="text" name="user_surname" id="surname" placeholder="Votre nom">
                </div>
                <div class="email">
                    <input type="email" name="user_email" id="email" placeholder="Votre email">
                </div>
                <div class="message">
                    <textarea name="user_message" id="message" placeholder="Votre message"></textarea>
                </div>
                <div class="submit">
                    <input type="submit" value="Envoyer">
                </div>
            </form>
            <?php
            // Quand le bouton envoyer est cliqué, on récupère les données du formulaire et on les envoie à hdbdt1597@gmail.com
            if(isset($_POST['user_name']) && isset($_POST['user_surname']) && isset($_POST['user_email']) && isset($_POST['user_message'])){
                $name = $_POST['user_name'];
                $surname = $_POST['user_surname'];
                $email = $_POST['user_email'];
                $message = $_POST['user_message'];
                $to = "hdbdt1597@gmail.com";
                $subject = "Message de ".$name." ".$surname;
            }
            if(isset($name) && isset($surname) && isset($email) && isset($message)){
                $headers = "From: ".$email;
                mail($to, $subject, $message, $headers);
            }
            ?>
            <script>
                // textarea redimmentionne automatiquement sa hauteur en fonction du texte à l'interieur
                var textarea = document.getElementById('message');
                textarea.addEventListener('keydown', function(e) {
                    textarea.style.height = 'auto';
                    textarea.style.height = textarea.scrollHeight + 'px';
                });

            </script>
        </section>
    </main>
</body>