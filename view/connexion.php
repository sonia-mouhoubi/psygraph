<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <script src="../assets/js/script.js"></script>

    <title>Connexion</title>
</head>
<body>
    <?php require('require/header.php') ;?>
    <main class="main_connexion">
        <h1>Connexion</h1>
        <!-- formulaire de connexion -->
         <form action="profil.php"method="POST">
             <div>
                 <label for="login">Votre login </label>
                 <input type="text"name="login">
             </div>
             <div>
                 <label for="password">Votre password</label>
                 <input type="password" name="password" id="password">

             </div>
             <input type="submit" value="Connexion">
         </form>
    </main>
    <?php require("require/footer.php");?>
       
    
</body>
</html>