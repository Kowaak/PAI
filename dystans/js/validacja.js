function validacja(){
    var x = document.forms["a"]["NP"].value;
    var y = document.forms["a"]["EW"].value;
    var z = document.forms["a"]["format"].value;

    var x2 = document.forms["a"]["NP2"].value;
    var y2 = document.forms["a"]["EW2"].value;
    if (x  == "" || y == "" || z == 0 || x2 == "" || y2 == ""){
        alert("Musisz wypełnić wszystkie pola");
    }
}
