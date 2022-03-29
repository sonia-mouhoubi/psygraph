<!DOCTYPE html>
<html lang="fr-fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/styles/styles.css">
    <link rel="stylesheet" href="../assets/styles/reservation.css">
    <script src="../assets/js/jquery-3.6.0.js"></script>
    <script src="../assets/js/slick.js"></script>
    <script src="../assets/js/window-width.js"></script>
    <script src="../assets/js/slick-slide-file.js"></script>
    <title>PsyGraph - Réservation</title>
</head>

<body>
    <?php require_once('require/header.php'); ?>
    <main>
        <div class="slick-slider">
            <?php for ($d = 0; $d < 365; $d++) { ?>
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

                        if ($monthl == 'January') {
                            $monthl = 'Janvier';
                        } elseif ($monthl == 'February') {
                            $monthl = 'Février';
                        } elseif ($monthl == 'March') {
                            $monthl = 'Mars';
                        } elseif ($monthl == 'April') {
                            $monthl = 'Avril';
                        } elseif ($monthl == 'May') {
                            $monthl = 'Mai';
                        } elseif ($monthl == 'June') {
                            $monthl = 'Juin';
                        } elseif ($monthl == 'July') {
                            $monthl = 'Juillet';
                        } elseif ($monthl == 'August') {
                            $monthl = 'Aôut';
                        } elseif ($monthl == 'September') {
                            $monthl = 'Septembre';
                        } elseif ($monthl == 'October') {
                            $monthl = 'Octobre';
                        } elseif ($monthl == 'November') {
                            $monthl = 'Novembre';
                        } elseif ($monthl == 'December') {
                            $monthl = 'Decembre';
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

                            <button type="submit" class="btn-view indispo"><?= $hmo ?></button>
                            <div class="container-hours"></div>

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