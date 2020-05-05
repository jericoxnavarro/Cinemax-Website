$(document).ready(function(){
var ClickedSeat = "";
function changeseat(clicked_id) {
    var hh = clicked_id;
    ClickedSeat = hh+"";
    var elems1 = document.getElementsByClassName("heading-7");
        for (var x = 0; x < elems1.length; x+= 1) {
            var selected = hh + " Seat is selected";
            var clear = "Select your seat";
            if (hh=="date1"||hh=="date2"||hh=="date3"
                ||hh=="time1-date3"||hh=="time2-date3"||hh=="time3-date3"
                ||hh=="time1-date2"||hh=="time2-date2"||hh=="time3-date2"
                ||hh=="time1-date1"||hh=="time2-date1"||hh=="time3-date1") {
                elems1[x].innerHTML = clear;
            }else{
                elems1[x].innerHTML = selected;
            }
        }
    for(var i = 0;i <= 16;i++){
        var seat = "perseats A" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 18;i++){
        var seat = "perseats B" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 19;i++){
        var seat = "perseats C" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 20;i++){
        var seat = "perseats D" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 20;i++){
        var seat = "perseats E" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 19;i++){
        var seat = "perseats F" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    for(var i = 0;i <= 17;i++){
        var seat = "perseats G" + i;
        var elems = document.getElementsByClassName(seat);
        for (var x = 0; x < elems.length; x+= 1) {
            elems[x].src = "images/Path-34_1Path-34.png";
        }
    }
    var perseats = "perseats " + hh;
    var elems = document.getElementsByClassName(perseats);
    for (var x = 0; x < elems.length; x+= 1) {
        elems[x].src = "images/Path-36_1Path-36.png";
    }
}
});