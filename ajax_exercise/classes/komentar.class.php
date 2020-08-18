<?php
class Komentar extends Veza{
  public function input_comment($add_name, $add_comment, $add_date, $add_time)
  {
    if(!$add_name == 0 and !$add_comment == 0)
    {
    $sql = "INSERT INTO comments(name, comment, comm_date, comm_time) VALUES ('$add_name', '$add_comment', '$add_date', '$add_time')";
    $stmt = $this->spoji()->query($sql);
    }
    else{
      echo "Fale podaci!";
    }
  }

  public function get_comments($limit)
  {
    $sql = "SELECT * FROM comments ORDER BY ID DESC LIMIT $limit";
    $stmt = $this->spoji()->query($sql);
      while($red = $stmt->fetch())
      {
        echo "<p>";
        echo "<b>" . $red['name'] . "</b>" . '<br>';
        echo $red['comment'] . '<br>';
        echo "<i><small>" . $red['comm_date'] . "</small></i>" . '<br>';
        echo "<i><small>" . $red['comm_time'] . "</small></i>";
        echo "</p>";
      }
  }

  public function count_comments()
  {
    $sql = "SELECT count(*) as zbroj FROM comments";
    $stmt = $this->spoji()->query($sql);
      while($red = $stmt->fetch())
      {
        echo $red['zbroj'];
      }
  }
}

 ?>
