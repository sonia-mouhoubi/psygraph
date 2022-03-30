<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Merienda:wght@700&display=swap" rel="stylesheet">
    <link href="../assets/styles/styles.css" rel="stylesheet">
    <script src="../assets/js/script.js"></script>
</head>
<body>
    <?php require 'require/header.php'; ?>
<main>
    <h2>Bienvenue .......... sur votre profil</h2>
    <h3>Si vous le souhaitez, vous pouvez modifier vos informations :</h3>
    
    <section class="Profil">
        <form method="post">
            <label for="nom">Nom</label>
            <input type="text" name="name" value="" placeholder="Barka">

            <label for="prenom">Prénom</label>
            <input type="text" name="prenom" value="" placeholder="Meriem">

            <label for="date">Date de naissance</label>
            <input type="date" name="name">

            <label for="password">Password</label>
            <input type="password" name="password" value="" placeholder="password">

            <label for="password2">Confirmation Password</label>
            <input type="password2" name="passwordConfirm" value="" placeholder="passwordConfirm">

            <input type="submit" name="submit" value="mise à jour">
        </form>
    </section>

    <section>
        <h1>Bilan</h1>
            <table>
                <tr>
                    <th>Date</th>
                    <th>Motif</th>
                    <th>Document</th>
                    <th>Commentaire</th>
                </tr>
                <tr>
                    <td>10/06/2021</td>
                    <td>Manque de confiance</td>
                    <td>PDF</td>
                    <td>J'ai bien reçu. Vous pouvez trouver votre bilan.</td>
                </tr>
                <tr>
                    <td>10/12/2022</td>
                    <td>Lettre de motivation</td>
                    <td>PDF</td>
                    <td>La lettre m'a semblé très engageante, continuez comme cela.</td>
                </tr>
                <tr>
                    <td>10/03/2022</td>
                    <td>Conflit familial</td>
                    <td>PDF</td>
                    <td>Ne soyez pas désespérée, on va travailler ensemble.</td>
                </tr>
        </table>
    </section>
</main>
    <?php require 'require/footer.php'; ?>
</body>
</html>