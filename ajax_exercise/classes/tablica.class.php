<?php

class Tablica extends Veza
{
  public function get_table()
  {

    $sql = "SELECT * FROM users";
    $stmt = $this->spoji()->query($sql);
      echo "<table>
              <tr>
              <th>Ime</th>
              <th>Prezime</th>
              <th>Grad</th>
              </tr>";
      while($red = $stmt->fetch())
      {
        $ime = $red['ime'];
        $prezime = $red['prezime'];
        $grad = $red['grad'];
            echo "<tr>";
            echo "<td>" . $ime . "</td>";
            echo "<td>" . $prezime . "</td>";
            echo "<td>" . $grad . "</td>";
            echo "</tr>";
      }
      echo "</table>";
  }
}



 ?>
