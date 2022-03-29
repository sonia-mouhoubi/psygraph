<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PsyGraph - Réservation</title>
</head>

<body>
    <?php //header('Location: require/header.php'); 
    ?>
    <main>
        <div class="container-planning">
            <?php for ($d = 0; $d < 8; $d++) { ?>
                <?php
                $dwl = strftime("%A", strtotime("+" . $d . "days"));
                $dwn = strftime("%d", strtotime("+" . $d . "days"));
                $dwn2 = strftime("%w", strtotime("+" . $d . "days"));
                $monthl = strftime("%B", strtotime("+" . $d . "days"));
                $monthwn = strftime("%m", strtotime("+" . $d . "days"));
                $year = strftime("%G", strtotime("+" . $d . "days"));
                ?>
                <?php if ($dwn2 >= 1 && $dwn2 <= 5) { ?>
                    <div class="boxday">

                        <h4 class="titleday"><?php echo $dwl . ' ' . $dwn . ' ' . $monthl . ' ' . $year ?></h4>
                        <?php
                        $heure_depart_matin = 8;
                        $heure_fin_matin = 19;
                        for ($hm = $heure_depart_matin; $hm <= $heure_fin_matin; $hm++) {
                            $datedays = strtotime("+" . $d . "days");
                            $dateday = date("Y-m-d", $datedays);
                            if ($hm < 10) {
                                $hmo = 0 . $hm;
                            } else {
                                $hmo = $hm;
                            }
                            $date = $dateday . " " . $hmo . ":00:00";

                        ?>

                            <br>

                            <button type="submit" class="btn-view indispo">Réservé par <p class="text-btnindipo"></p></button>

                        <?php } ?>
                    </div>
                <?php } ?>
            <?php } ?>
        </div>
    </main>
    <?php //header('Location: require/header.php'); 
    ?>
</body>

</html>