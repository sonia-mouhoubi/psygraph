<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/reservation.css">
    <script src="./js/jquery-3.6.0.js"></script>
    <script src="./js/slick.js"></script>
    <script src="./js/window-width.js"></script>
    <script src="./js/slick-slide-file.js"></script>
    <title>PsyGraph - Réservation</title>
</head>

<body>
    <?php //header('Location: require/header.php'); 
    ?>
    <main>
        <div class="slick-slider">
            <?php for ($d = 0; $d < 30; $d++) { ?>
                <?php
                $dwl = strftime("%A", strtotime("+" . $d . "days"));
                $dwn = strftime("%d", strtotime("+" . $d . "days"));
                $dwn2 = strftime("%w", strtotime("+" . $d . "days"));
                $monthl = strftime("%B", strtotime("+" . $d . "days"));
                $monthwn = strftime("%m", strtotime("+" . $d . "days"));
                $year = strftime("%G", strtotime("+" . $d . "days"));
                ?>
                <?php if ($dwn2 >= 1 && $dwn2 <= 5) { ?>
                    <div class="slick-slide">

                        <?php
                        if ($dwl == 'Monday') {
                            $dwl = 'Lundi';
                        } elseif ($dwl == 'Tuesday') {
                            $dwl = 'Mardi';
                        } elseif ($dwl == 'Wednesday') {
                            $dwl = 'Mercredi';
                        } elseif ($dwl == 'Thursday') {
                            $dwl = 'Jeudi';
                        } elseif ($dwl == 'Friday') {
                            $dwl = 'Vendredi';
                        }


                        $dwl = substr($dwl, 0, 3);
                        ?>



                        
                        <div class="container-day">
                            <h4 class="titleday"><?php echo $dwl . ' ' . $dwn . ' ' . $monthl . ' ' . $year ?></h4>
                            <!-- <h4 class="titleday"><?php echo $dwl ?></h4>
                            <h4 class="titleday"><?php echo $dwn ?></h4>
                            <h4 class="titleday"><?php echo $monthl ?></h4> -->
                        </div>

                        <?php



                        $heure_depart_matin = 8;
                        $heure_fin_matin = 19;
                        ?>
                        <?php for ($hm = $heure_depart_matin; $hm <= $heure_fin_matin; $hm++) { ?>
                            <?php
                            $datedays = strtotime("+" . $d . "days");
                            $dateday = date("Y-m-d", $datedays);
                            if ($hm < 10) {
                                $hmo = 0 . $hm;
                            } else {
                                $hmo = $hm;
                            }
                            $date = $dateday . " " . $hmo . ":00:00";

                            ?>

                            <!-- <button type="submit" class="btn-view indispo"><?= $hmo ?></button> -->

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