<?php require 'inc/head.php'; ?>

<?php
if (empty($_SESSION) && $_SESSION["login"] == '' ) { // Si $_SESSION est vide et est égale a '' (vide) Alors.
    header('location: login.php');
} ?>


<section class="cookies container-fluid">
    <div class="row">
        <H4 style='margin-left: 29%'>Your Order:</H4>
        <?php
        if (isset($_SESSION['pecanNuts']) && $_SESSION["pecanNuts"] != '' ) {
            $pecanNuts = $_SESSION['pecanNuts'];
            echo "<span style='margin-left: 30%;'>" . $pecanNuts . " boxes of Pecan Nuts." . "</span><br>";
        }

        if (isset($_SESSION['chocolateChips'])&& $_SESSION["chocolateChips"] != '' ) {
            $chocolateChips = $_SESSION['chocolateChips'];
            echo "<span style='margin-left: 30%;'>" . $chocolateChips . " boxes of Chocolate Chips." . "</span><br>";
        }

        if (isset($_SESSION['cookies']) && $_SESSION["cookies"] != '' ) {
            $cookies = $_SESSION['cookies'];
            echo "<span style='margin-left: 30%;'>" . $cookies. " boxes of Chocolate Cookies." . "</span><br>";
        }

        if (isset($_SESSION['M&M']) && $_SESSION["M&M"] != '' ) {
            $MM = $_SESSION['M&M'];
            echo "<span style='margin-left: 30%;'>" . $MM . " boxes of M&M." . "</span><br>";
        }
        ?>
    </div>
</section>
<?php require 'inc/foot.php'; ?>
