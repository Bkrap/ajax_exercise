<?php
  include 'include-class.inc.php';

  $ime = $_POST['ime'];
  $prezime = $_POST['prezime'];
  $grad = $_POST['grad'];

  //unos podataka
  $unos = new Veza();
  $unos->input($ime, $prezime, $grad);



 ?>
