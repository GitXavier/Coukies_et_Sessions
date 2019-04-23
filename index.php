<?php require 'inc/head.php'; ?>

<?php
if (empty($_SESSION) && $_SESSION["login"] == '' ) { // Si $_SESSION est vide et est égale a '' (vide) Alors.
    header('location: login.php');
} ?>

<?php



if (isset($_GET['pecanNuts'])){
    $_SESSION['pecanNuts'] = $_GET['pecanNuts'];
}elseif (isset($_GET['chocolateChips'])) {
    $_SESSION['chocolateChips'] = $_GET['chocolateChips'];
}elseif (isset($_GET['cookies'])) {
    $_SESSION['cookies'] = $_GET['cookies'];
}elseif (isset($_GET['M&M'])) {
    $_SESSION['M&M'] = $_GET['M&M'];
}

?>

<section class="cookies container-fluid">
  <div class="row">
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-46.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Pecan nuts </h3>
          <p>Box of 12 Pecan nuts</p>
            <form action="index.php" methode="GET">
                <div class="form-group">
                    <input   type="text" name="pecanNuts" placeholder="0" size="5" style="text-align: center" >
                </div>
                <button type="submit" class="btn btn-primary  glyphicon-plus" aria-hidden="true" >Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-36.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate chips</h3>
          <p>Box of 3 Chocolate chips</p>
            <form action="index.php" methode="GET">
                <div class="form-group">
                    <input   type="text" name="chocolateChips" placeholder="0" size="5" style="text-align: center" >
                </div>
                <button type="submit" class="btn btn-primary  glyphicon-plus" aria-hidden="true" >Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-58.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>Chocolate cookie</h3>
          <p>Box of 2 Chocolate cookies</p>
            <form action="index.php" methode="GET">
                <div class="form-group">
                    <input   type="text" name="cookies" placeholder="0" size="5" style="text-align: center" >
                </div>
                <button type="submit" class="btn btn-primary  glyphicon-plus" aria-hidden="true" >Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
    <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
      <figure class="thumbnail text-center">
        <img src="assets/img/product-32.jpg" alt="cookies choclate chips" class="img-responsive">
        <figcaption class="caption">
          <h3>M&M's&copy; cookies</h3>
          <p>Box of 12 M&M's&copy; cookies</p>
            <form action="index.php" methode="GET">
                <div class="form-group">
                    <input   type="text" name="M&M" placeholder="0" size="5" style="text-align: center" >
                </div>
                <button type="submit" class="btn btn-primary  glyphicon-plus" aria-hidden="true" >Add to cart</button>
            </form>
        </figcaption>
      </figure>
    </div>
      <H4>Your selection of cookies:</H4>
      <?php
          if (isset($_SESSION['pecanNuts']) && $_SESSION["pecanNuts"] != '' ) {
          $pecanNuts = $_SESSION['pecanNuts'];
          echo "<span style='margin-left: 30px;'>" . $pecanNuts . " boxes of Pecan Nuts." . "</span><br>";
          }

          if (isset($_SESSION['chocolateChips'])&& $_SESSION["chocolateChips"] != '' ) {
          $chocolateChips = $_SESSION['chocolateChips'];
          echo "<span style='margin-left: 30px;'>" . $chocolateChips . " boxes of Chocolate Chips." . "</span><br>";
          }

          if (isset($_SESSION['cookies']) && $_SESSION["cookies"] != '' ) {
          $cookies = $_SESSION['cookies'];
          echo "<span style='margin-left: 30px;'>" . $cookies. " boxes of Chocolate Cookies." . "</span><br>";
          }

          if (isset($_SESSION['M&M']) && $_SESSION["M&M"] != '' ) {
          $MM = $_SESSION['M&M'];
          echo "<span style='margin-left: 30px;'>" . $MM . " boxes of M&M." . "</span><br>";
          }
      ?>
  </div>
</section>
<section>


</section>



<?php require 'inc/foot.php'; ?>
