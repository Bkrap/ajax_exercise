<?php
include 'include-class.inc.php';

  //unos podataka
  if(isset($_POST['submit']))
  {
  $add_name = $_POST['add_name'];
  $add_comment = $_POST['add_comment'];
  $add_date = date("d/m/Y");
  $add_time =  date("H:i:s") . " h";
  $unos = new Komentar();
  $unos->input_comment($add_name, $add_comment, $add_date, $add_time);
  }

  //prikaz komentara
  else
  {
  $komentar = new Komentar();
  $commentNewCount = $_POST['commentNewCount'];
  echo $komentar->get_comments($commentNewCount);
  }
 ?>
