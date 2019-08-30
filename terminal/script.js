var commandlist = document.getElementById("listcommands");
let commandos = getCookie("commando", "commandooutput");
for (let [key, value] of Object.entries(commandos)) {
    if (key === "commando" + commandoIndexer) {
        commandlist.innerHTML += "<label>redman@redman-XPS-13-9360:/var/www/ubuntu/php-excersises/terminal$ </label>" + value + "<br>";
        commandos["commandooutput" + commandoIndexer] = commandos["commandooutput" + commandoIndexer].replace(/&/g, "<br>") + "<br>";
        commandlist.innerHTML += commandos["commandooutput" + commandoIndexer];
        commandoIndexer += 1;
    }
}

function writecookie() {
        let command = document.getElementById("commands");
        let commandlist = document.getElementById("listcommands");
        console.log(commandlist);
        var readname = "commando" + "=";
       // console.log(typeof document.cookie);
        var commands = {};
        if (document.cookie !== "") {
            var readdecodedCookie = document.cookie;
            var ca = readdecodedCookie.split(';');
            for(var i = 0; i <ca.length; i++) {
                var c = ca[i];
                while (c.charAt(0) === ' ') {
                    c = c.substring(1);
                }
                if (c.indexOf(readname) === 0) {
                    if(c.substring(readname.length, c.length)) {
                        commands = JSON.parse(c.substring(readname.length, c.length));
                    }
                 }
            }
        }
        commandoIndexer = Object.keys(commands).length;
        commands["commando" + commandoIndexer] = command.value;
        var varcookie1 = 'commando' + '=' + JSON.stringify(commands);
        document.cookie = varcookie1;
}

function showText (target, message, index, interval) {
    if (index < message.length) {
        let response = document.getElementById("responsecommands");
        var next = message[index++];
        if (next === '&') {
            var node = document.createElement("br");
            response.appendChild(node);
        } else {
            response.append(next);
        }
        if (index === message.length) {
            var node = document.createElement("br");
            response.appendChild(node);
        }
        setTimeout(function () { showText(target, message, index, interval); }, interval);
    }
}
function getCookie(cname, dname) {
    var name = cname + "=";
    var output = dname + "=";
    var decodedCookie = decodeURIComponent(document.cookie);
    var ca = decodedCookie.split(';');
    for(var i = 0; i <ca.length; i++) {
        var c = ca[i];
        while (c.charAt(0) === ' ') {
            c = c.substring(1);
        }
        if (c.indexOf(name) === 0){
            var obj1 =  JSON.parse(c.substring(name.length, c.length));
        }
        if (c.indexOf(output) === 0){
            var obj2 =  JSON.parse(c.substring(output.length, c.length));
        }
    }
    if ((obj1 != null) && (obj2 != null)) {
        var Allobj = Object.assign(obj1, obj2);
        return Allobj;
    } else {
        return "";
    }
}
