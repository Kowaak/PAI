function validacja(){
    var x = document.forms["a"]["imie"].value;
    var y = document.forms["a"]["nazwisko"].value;
    var z = document.forms["a"]["email"].value;
    var a = document.forms["a"]["hobby"].value;
    var c = document.forms["a"]["data"].value;
    var d = document.forms["a"]["plec"].value;
  //  /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/
    if (x  == "" || y == "" || z == "" || a == "0" || c == "" || d == ""){
        alert("Musisz wypełnić wszystkie wymagane pola");
    }
}
function odczytaj(){
    document.write("<iframe src='php/plik.txt'></iframe>")
}