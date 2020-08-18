<?php

class Veza extends Baza
{
  public function get_users()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->spoji()->query($sql);
      while($red = $stmt->fetch())
      {
        $id = $red['id'];
        $ime = $red['ime'];
        $prezime = $red['prezime'];

        echo "<option value='$id'>$ime  $prezime</option>";
      }
  }

  public function input($ime, $prezime, $grad)
  {
    if(!$ime == 0 and !$prezime == 0 and !$grad == 0)
    {
    $sql = "INSERT INTO users(ime, prezime, grad) VALUES ('$ime', '$prezime', '$grad')";
    $stmt = $this->spoji()->query($sql);
    }
    else{
      echo "Fale podaci!";
    }
  }
}

 ?>
