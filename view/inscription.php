<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php require('require/header.php'); ?>
    <main class="main_inscription">
        <h1>Inscription</h1>
        <div>
            <form action=""method="POST">
                
                <label for="statu">Patient ou entreprise</label>
                <select id="pet-select">
                    <option value="">Choisir un réponse</option>
                    <option value="entrepris">entreprise</option>
                    <option value="particulier">patient</option>
                </select>
                <label for="prenom">Votre prénom</label>
                <input type="text" name="prenom" id="prenom">

                <label for="non">Votre nom</label>
                <input type="text" name="non" id="nom">
    
                <label for="login">Votre login</label>
                <input type="text" name="login" id="login">

                <label for="password">Votre mot de passe</label>
                <input type="password" name="password" id="password">

                <label for="password1">Confirmer votre mot de passe</label>
                <input type="password" name="password1" id="password1">

                <input class="btn1" type="submit" value="Inscrivez vous">
            </form>

            <img src="../assets/img/arbre.png" alt="">

            <form class='formInscription' action="connexion.php" method="post">
                <label for="">Email</label>
                <input type="text">

                <label for="">Mot de passe</label>
                <input type="password">

                <input id="btn2" type="submit" value='Connexion'>
            </form>
        </div>

    </main>
   <?php require("require/footer.php");?>
    
</body>
</html>