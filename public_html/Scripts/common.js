///<reference path="jquery-2.1.4.js" />

function existx(x) { return x !== null && typeof x !== "undefined"; }

function lessOrEqual(x, y) {
    return x - y;
}

function email(name){
    var mail = [];
    var mailKim = [107,105,109,50,53,54,54,49,52,50,53,64,104,111,116,109,97,105,108,46,99,111,109];
    var mailMichael = [109,105,99,104,97,101,108,46,103,114,111,110,110,101,64,103,109,97,105,108,46,99,111,109];
    var mailUller = [98,114,105,97,110,117,108,108,101,114,64,104,111,116,109,97,105,108,46,99,111,109];
    var mailJohn = [106, 111, 104, 110, 100, 97, 104, 108, 109, 97, 105, 108, 64, 103, 109, 97, 105, 108, 46, 99, 111, 109];
    var mailErik = [101, 114, 105, 107, 115, 116, 111, 99, 104, 104, 111, 108, 109, 64, 103, 109, 97, 105, 108, 46, 99, 111, 109];
    var mailKlaus = [107,108,97,117,115,46,103,101,108,116,105,110,103,64,103,109,97,105,108,46,99,111,109];
    
    switch(name){
        case "Kim":
            mail = mailKim;
            break;
        case "Michael":
            mail = mailMichael;
            break;
        case "Uller":
            mail = mailUller;
            break;
        case "John":
            mail = mailJohn;
            break;
        case "Erik":
            mail = mailErik;
            break;
        case "Klaus":
            mail = mailKlaus;
            break;
    }

    mail = mail.map(function (element) {
        return String.fromCharCode(element);
    });

    mail = mail.join("");
    
    return '<a class="maillink" href="mailto:' + mail + '">' + mail + '</a>';
}

        (function($, jQuery){
            $(document).ready(function(){
                $(".mail-michael").html(email("Michael"));
                $(".mail-uller").html(email("Uller"));
                $(".mail-erik").html(email("Erik"));
                $(".mail-klaus").html(email("Klaus"));
                $(".mail-kim").html(email("Kim"));
            });
        }($, jQuery));

