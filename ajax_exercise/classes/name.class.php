<?php
class Name extends Veza{
  public function get_name()
  {
    $sql = "SELECT * FROM users";
    $stmt = $this->spoji()->query($sql);
      while($red = $stmt->fetch())
      {
        echo $red['ime'] . '<br>';
      }
  }
}


?>
