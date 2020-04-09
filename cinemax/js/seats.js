$(document).ready(function(){

    //For Card Number formatted input
    var cardNum = document.getElementById('cr_no');
    cardNum.onkeyup = function (e) {
    if (this.value == this.lastValue) return;
    var caretPosition = this.selectionStart;
    var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
    var parts = [];
    
    for (var i = 0, len = sanitizedValue.length; i < len; i +=4) { parts.push(sanitizedValue.substring(i, i + 4)); } for (var i=caretPosition - 1; i>= 0; i--) {
        var c = this.value[i];
        if (c < '0' || c> '9') {
            caretPosition--;
            }
            }
            caretPosition += Math.floor(caretPosition / 4);
    
            this.value = this.lastValue = parts.join(' ');
            this.selectionStart = this.selectionEnd = caretPosition;
            }
    
            //For Date formatted input
            var expDate = document.getElementById('exp');
            expDate.onkeyup = function (e) {
            if (this.value == this.lastValue) return;
            var caretPosition = this.selectionStart;
            var sanitizedValue = this.value.replace(/[^0-9]/gi, '');
            var parts = [];
    
            for (var i = 0, len = sanitizedValue.length; i < len; i +=2) { parts.push(sanitizedValue.substring(i, i + 2)); } for (var i=caretPosition - 1; i>= 0; i--) {
                var c = this.value[i];
                if (c < '0' || c> '9') {
                    caretPosition--;
                    }
                    }
                    caretPosition += Math.floor(caretPosition / 2);
    
                    this.value = this.lastValue = parts.join('/');
                    this.selectionStart = this.selectionEnd = caretPosition;
                    }
    
                    });


function changeseat(clicked_id) {
    var hh = clicked_id;
    
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


