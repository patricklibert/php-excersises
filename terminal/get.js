
let commandos = getCookie("commando", "commandooutput");
let switcher = true;
//console.log(commandos1);
eachcommando = Object.values(commandos);
eachcommando.forEach(readCommando);




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
            // console.log(JSON.parse(c.substring(name.length, c.length)));
            var obj1 =  JSON.parse(c.substring(name.length, c.length));
        }
        if (c.indexOf(output) === 0){
            //  console.log(JSON.parse(c.substring(output.length, c.length)));
            var obj2 =  JSON.parse(c.substring(output.length, c.length));
        }
    }
    if ((obj1 != null) && (obj2 != null)) {
        var Allobj = Object.assign(obj1, obj2);
        //  console.log(Allobj);
        return Allobj;
    } else {
        return "";
    }
}