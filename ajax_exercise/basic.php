<!DOCTYPE html>
<html>
<body>

<div id="demo">
<h2>The XMLHttpRequest Object</h2>
<button type="button" onclick="loadDoc()">Change Content</button>
</div>

<script>
function loadDoc() {
  var xhttp = new XMLHttpRequest();                     //objekt na kojem se sve bazira da se ne mora refreshat web da bi se promjenio content / razmjenjuje podatke sa serverom
  xhttp.onreadystatechange = function() {               // onreadystatechange definira funkciju koja će se pozvat kad se readyState svojstva promjene
    if (this.readyState == 4 && this.status == 200) {   // objekt readyState drži status XMLHttpRequesta 0: zahtjev nije inicijaliziran,
                                                        // 1: konekcija servera je postavljena, 2: zahtjev je primljen, 3: zahtjev je u procesu, 4: zahtjev je gotov, a odgovor je spreman.
      document.getElementById("demo").innerHTML =       //objekt STATUS 200: OK, 403: zabranjeno, 404: not found,
      this.responseText;                                // objekt koji vraća odgovor kao string
    }
  };
  xhttp.open("GET", "ajax_info.txt", true);             // specificira tip zahtjeva (koja metoda, lokacija servera ili datoteke (url), asinkrono-TRUE ili sinkorono-FALSE)
  xhttp.send();                                         // šalje zahtjev serveru
}
</script>

</body>
</html>
