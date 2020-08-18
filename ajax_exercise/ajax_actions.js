$(document).ready(function() {
  var commentCount = 2; // N mora biti isti kao limit kod upita
  $("#btn1").click(function() {
    commentCount = commentCount + 2; // Petlja koja povećava postojeću varijablu za N
    $("#comments").load("includes/komentar.inc.php", { //učitavamo drugi upit koji će proslijediti parametre za povećanje limita za N
      commentNewCount: commentCount // koristimo je kod POST metode
    });
  })
});
