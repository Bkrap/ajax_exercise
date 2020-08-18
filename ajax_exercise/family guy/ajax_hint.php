<script>
function showHint(str) {
  if (str.length == 0) {
    document.getElementById("txtHints").innerHTML = "";
    return;
  } else {
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("txtHints").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET", "name.class.php?q=" + str, true);
    xmlhttp.send();
  }
}
</script>
