function getCookie(cookie_name) {
    var name = cookie_name + "=";

    var cookies = document.cookie.split(';');
    for(var i=0; i<cookies.length; i++) {
        var chr = cookies[i];

        while (chr.charAt(0)==' ')
            chr = chr.substring(1);

        if (chr.indexOf(name) == 0)
            return chr.substring(name.length,chr.length);
    }

    return null;
}

/* Requires SHA1 */
/*function checkSession(redirect_to)
{
    if(!getCookie('usrname') || !getCookie('passwd') || !getCookie('auth_token'))
        document.cookie = "";
    else
    {
        if(sha1(getCookie('passwd')+getCookie('usrname')) == getCookie('auth_token'))
            document.location = 'forum/index.html';
        else
            document.cookie = "";
    }

    if(redirect_to)
      document.location.href = redirect_to;
}*/
