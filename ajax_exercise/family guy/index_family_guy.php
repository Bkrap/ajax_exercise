<?php include 'includes/include-class.inc.php';
$podaci = new Veza();
$tablica = new Tablica();
?>

<html lang="en">
<head>
  <?php include 'ajax.php'; ?>
  <?php include 'ajax_hint.php'; ?>
  <title>Family guy</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="./style/style.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<section name="family-guy">
<form action="includes/veza.inc.php" method="post">
<div class="container">
  <div class="d-flex flex-column p-2 justify-content-center">
    <h2 class="display-4">Simple database family guy<h2></br>
      <h4>Unesi:</h4>
      <input type="text" class="form-control" name="ime" placeholder="Ime:"></input></br>
      <input type="text" class="form-control" name="prezime" placeholder="Prezime:"></input></br>
      <input type="text" class="form-control" name="grad" placeholder="Grad:"></input></br>
      <button type="submit" name="unesi" class="btn btn-warning" onclick="popup()">Unesi korisnika</button></br>
    </form></br>

    <form>
      <h5>Podaci o liku:</h5>
        <select name="users" onchange="showUser(this.value)">
          <option value="">Izaberi:</option>
          <?php echo $podaci->get_users(); ?>
        </select>
    </form><br>
    <div id="txtHint"><b>Tablica ovdje uskoro...</b></div>
    <?php $tablica->get_table(); ?></br>

    <form action="">
      <input type="text" class="form-control" id="search_name" name="search_name" placeholder="Upiši ime:" onkeyup="showHint(this.value)"></input></br>
    </form>
    <p>Prijedlozi: <span id="txtHints"></span></p>
  </div>
</div>
</div>
</section>
</body>
</html>
