$(document).ready(function(){

    cookieMessage();

    document.querySelector(".cookie_accept").addEventListener("click", function() {
        document.querySelector("#cookies").style.display = "none";
        //localStorage.setItem("cookie_consent", "accepted");

        // Set cookie to expire in 30 days
        setCookie("cookie", true, 30);
    });

    document.querySelector(".cookie_decline").addEventListener("click", function() {
        document.querySelector("#cookies").style.display = "none";
    });

});

function setCookie(name, value, days) {
    const date = new Date();
    date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
    const expires = "expires=" + date.toUTCString();
    document.cookie = name + "=" + value + ";" + expires + ";path=/";
}

// function getCookie(name) {
//     const nameEQ = name + "=";
//     const ca = document.cookie.split(';');
//     for(let i=0; i < ca.length; i++) {
//         let c = ca[i];
//         while (c.charAt(0)==' ') c = c.substring(1,c.length);
//         if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
//     }
//     return null;
// }

getCookie = (cName) => {
    const name = cName + "=";
    const cDecoded = decodeURIComponent(document.cookie);
    const cArr = cDecoded.split('; ');
    let result;
    cArr.forEach(val => {
        if (val.indexOf(name) === 0) result = val.substring(name.length);
    })
    return result;
}

cookieMessage = () => {
    if (!getCookie('cookie')) {
        document.querySelector("#cookies").style.display = "block";
    }
}

