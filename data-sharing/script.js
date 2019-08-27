function setCookie(){
    let inhoud = document.getElementById('inpCookie');

    document.cookie = 'joke' + '=' + inhoud.value;
}