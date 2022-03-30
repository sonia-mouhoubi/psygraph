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
        <section>
            <h2>INFORMATION CLÉS</h2>
            <table>
                <thead>
                    <tr>
                        <th>Type</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th>Particulier</th>
                            <td>50</td>
                    </tr>
                <tr>
                    <th>Professionnel</th>
                        <td>70</td>
                </tr>
                <tr>
                    <th>TOTAL</th>
                        <td>120</td>
                </tr>
                </tbody>
            </table>

        </section>

        <section>
            <h2>INFORMATION DES PARTICULIERS</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Âge</th>
                            <th>Métier</th>
                            <th>Mail</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Nb de consultation</th>
                            <th>Ancienneté</th>
                            <th>Statut Paiement</th>
                            <th>Document - Bilans</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                                <td>WILLIAM</td>
                                <td>Bill</td>
                                <td>28/02/1977</td>
                                <td>45 ans</td>
                                <td>Reconversion</td>
                                <td>william.bill@bil.fr</td>
                                <td>3 rue cheval</td>
                                <td>13002</td>
                                <td>Marseille</td>
                                <td>3</td>
                                <td>2017</td>
                                <td>OK</td>
                                <td>3 - PDF</td>
                        </tr>
                        <tr>
                            <th>2</th>
                                <td>VALERIE</td>
                                <td>Cilia</td>
                                <td>01/10/1992</td>
                                <td>29 ans</td>
                                <td>Demandeur d'emploi (2019) - </td>
                                <td>cici.valerie@cici.fr</td>
                                <td>20 traverse charles</td>
                                <td>30000</td>
                                <td>Nîmes</td>
                                <td>5</td>
                                <td>2020</td>
                                <td>2 factures non réglées</td>
                                <td>2 - PDF</td>
                        </tr>
                            <th>3</th>
                                <td>VALERIE</td>
                                <td>Cilia</td>
                                <td>01/10/1992</td>
                                <td>29 ans</td>
                                <td>Infirmière</td>
                                <td>cici.valerie@cici.fr</td>
                                <td>20 traverse charles</td>
                                <td>30000</td>
                                <td>Nîmes</td>
                                <td>5</td>
                                <td>2020</td>
                                <td>1 facture non réglées</td>
                                <td>1 - PDF</td>
                        </tr>
                    </tbody>
                </table>
        </section>

        <section>
            <h2>INFORMATION DES PROFESSIONNELS</h2>
                <table>
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th>Prénom</th>
                            <th>Date de Naissance</th>
                            <th>Âge</th>
                            <th>Métier</th>
                            <th>Mail</th>
                            <th>Adresse</th>
                            <th>Code Postal</th>
                            <th>Ville</th>
                            <th>Nb de consultation</th>
                            <th>Ancienneté</th>
                            <th>Statut Paiement</th>
                            <th>Document - Bilans</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th>1</th>
                                <td>WILLIAM</td>
                                <td>Bill</td>
                                <td>28/02/1977</td>
                                <td>45 ans</td>
                                <td>Reconversion</td>
                                <td>william.bill@bil.fr</td>
                                <td>3 rue cheval</td>
                                <td>13002</td>
                                <td>Marseille</td>
                                <td>3</td>
                                <td>2017</td>
                                <td>OK</td>
                                <td>1 - PDF</td>
                        </tr>
                        <tr>
                            <th>2</th>
                                <td>VALERIE</td>
                                <td>Cilia</td>
                                <td>01/10/1992</td>
                                <td>29 ans</td>
                                <td>Demandeur d'emploi (2019) - </td>
                                <td>cici.valerie@cici.fr</td>
                                <td>20 traverse charles</td>
                                <td>30000</td>
                                <td>Nîmes</td>
                                <td>5</td>
                                <td>2020</td>
                                <td>OK</td>
                                <td>1 - PDF</td>
                        </tr>
                            <th>3</th>
                                <td>VALERIE</td>
                                <td>Cilia</td>
                                <td>01/10/1992</td>
                                <td>29 ans</td>
                                <td>Infirmière</td>
                                <td>cici.valerie@cici.fr</td>
                                <td>20 traverse charles</td>
                                <td>30000</td>
                                <td>Nîmes</td>
                                <td>5</td>
                                <td>2020</td>
                                <td>OK</td>
                                <td>1 - PDF</td>
                        </tr>
                    </tbody>
                </table>
        </section>
    </main>
    <?php require 'require/footer.php'; ?>
</body>
</html>





