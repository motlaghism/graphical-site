document.getElementById("mah").innerHTML =
        "<option>???????</option>" +
        "<option>????????</option>" +
        "<option>?????</option>" +
        "<option>???</option>" +
        "<option>?????</option>" +
        "<option>??????</option>" +
        "<option>???</option>" +
        "<option>????</option>" +
        "<option>???</option>" +
        "<option>??</option>" +
        "<option>????</option>" +
        "<option>?????</option>"
        ;
var mah=document.getElementById("mah").innerHTML;
if(mah=="???????"||mah=="????????"||mah=="?????"||mah=="???"||mah=="?????"||mah=="??????"){
    makeDay1();
}
document.getElementById("rooz").innerHTML = "";
function makeDay1() {
    var res = "";
    for (var i = 1; i <= 31; i++) {
        res += "<option>" + i + "</option>";
    }
    return res;
}
function makeDay2() {
    var res = "";
    for (var i = 1; i <= 30; i++) {
        res += "<option>" + i + "</option>";
    }
    return res;
}
function makeDay3() {
    var res = "";
    for (var i = 1; i <= 29; i++) {
        res += "<option>" + i + "</option>";
    }
    return res;
}


