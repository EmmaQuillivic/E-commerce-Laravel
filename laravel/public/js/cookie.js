var cookie_name = "cookie_agree";

function CookieAgree() {
  document.cookie = cookie_name + "= yes; expires=Thu, 24 Dec 2022 12:00:00 UTC; path=/";
  document.getElementById("cookie_container").hidden = true;
}

if (getCookie(cookie_name) != 'yes') {
  document.getElementById("cookie_container").hidden = false;
};


function getCookie(cookie_name) {
  var name = cookie_name + "=";
  var split = document.cookie.split(';');
  for (var i = 0; i <split.length; i++) {
    var cookie = split[i];
    if (cookie.indexOf(name) == 0) {
      return cookie.substring(name.length, cookie.length);
    };
  };
};
