<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <!-- <script src="../assets/js/script.js"></script> -->
    <title>Page contact</title>
</head>
<body>
    <?php require('require/header.php') ;?>
    <main class="main_contact">
        <h1>Contact</h1>
        <img src="../assets/img/logo.png" alt="Logo">
        

        <form action="" method="post">
            <div>
                <label for="prenom">Nom et prénom</label>
                <input type="text">

                <label for="">E-mail</label>
                <input type="email">

                <label for="">Sujet</label>
                <input type="text">
            </div>
            <div>
                <label for="">Message</label>
                <textarea name="" id="" cols="30" rows="10"></textarea>
                <input type="submit" value="Devis">
            </div>
        </form>
    </main>
    <?php require("require/footer.php");?>
</body>
        
        