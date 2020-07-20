var alpha = 'ABCDEFGHJKLMNPQRSTUVWXYZ';
var num = '23456789'
var alphaLength = alpha.length;
var numLength = num.length;
var codesToGenerate = 10;

var singleCode = '';

var UNIQUE_RETRIES = 9999;
var uniqueIdCodes = [];

function generateCode() {
    //reset the singleCode value
    singleCode = '';
    for (var i = 0; i < 2; i++) {
        singleCode += alpha.charAt(Math.floor(Math.random() * alphaLength));
    }
    ;
    for (var j = 0; j < 4; j++) {
        singleCode += num.charAt(Math.floor(Math.random() * numLength));
    }
    ;
}
;

function manyCodes() {
    var k = 0;

    while (k < codesToGenerate) {
        generateCode();
        if (uniqueIdCodes.indexOf(singleCode) > -1) {
            continue;
        } else {
            //else, push this code to the array
            uniqueIdCodes.push(singleCode);
            k++;
        }
        ;
    }
    ;



    //display the array as a string
    uniqueCodesString = uniqueIdCodes.toString();
    rtn = uniqueCodesString.replace(/,/g, ":");
    document.getElementById("gen_codes").innerHTML = rtn;
}
;

function savetoArray() {
    var codeArray = [];
    if (document.getElementById("gen_codes").value) {
        codeArray = document.getElementById("gen_codes").value;
        //document.getElementById("a").innerHTML = codeArray.toString();
    }
}

function queryCoupon(){

    
}

;
    