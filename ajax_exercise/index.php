<?php include 'includes/include-class.inc.php';
      $komentar = new Komentar();
      $count = new Komentar();
?>
<html lang="en">
<head>
  <title>Ajax exercise</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <script>
      <?php include 'ajax_actions.js'; ?>
    </script>
  <link rel="stylesheet" type="text/css" href="./style/style.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
<div class="container pt-5">
  <form action="includes/komentar.inc.php" method="post">
    <div id="add_comment">
    <div class="embed-responsive embed-responsive-21by9">
      <iframe class="embed-responsive-item" width="1110" height="520" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
    </div><br><br>
      <h4>Komentiraj:</h4>
      <input type="text" name="add_name" class="form-control" placeholder="Vaše ime: "></input><br>
      <textarea name="add_comment" class="form-control" placeholder="Vaš komentar:" rows="4" cols="50"></textarea><br>
      <button name="submit" class="btn btn-warning">Dodaj komentar</button>
    </div>
  </form></br>
<div id="comments">
  <h4>Komentari:</h4>
 <?php echo $komentar->get_comments(2); ?>
</div>
<button id="btn1" class="btn btn-warning" name="more" >Prikaži još komentara<br>(<?php echo $count->count_comments(); ?>)</button>
</div>
</body>
</html>
