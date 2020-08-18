<?php
class Baza{
  private  $host     = "localhost";
  private  $username   = "root";
  private  $lozinka    = "";
  private  $baza       = "ajax";

  protected function spoji()
  {
    $dsn = 'mysql:host=' . $this->host . ';dbname=' . $this->baza;
    $pdo = new PDO($dsn, $this->username, $this->lozinka);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $pdo;
  }
}



 ?>
