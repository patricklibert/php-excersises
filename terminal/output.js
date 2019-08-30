function setCookieOutput(arg) {
    var readnameoutput = "commandooutput" + "=";
    console.log(typeof document.cookie);
    var commandsoutput = {};
    if (document.cookie !== "") {
        var readdecodedCookieoutput = document.cookie;
        var caoutput = readdecodedCookieoutput.split(';');
        for(var i = 0; i <caoutput.length; i++) {
            var c = caoutput[i];
            while (c.charAt(0) === ' ') {
                c = c.substring(1);
            }
            if (c.indexOf(readnameoutput) === 0) {

                console.log(c.substring(readnameoutput.length, c.length));
                if(c.substring(readnameoutput.length, c.length)) {
                    commandsoutput = JSON.parse(c.substring(readnameoutput.length, c.length));
                }
            }
        }
    }
    commandoOutputIndexer = Object.keys(commandsoutput).length;
    commandsoutput["commandooutput" + commandoOutputIndexer] = arg;
    var varcookieoutput = 'commandooutput' + '=' + JSON.stringify(commandsoutput);
    document.cookie = varcookieoutput;
}