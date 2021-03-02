var contain = 0;

function users() {

  var request = new XMLHttpRequest();
  request.open("GET", "/admin/user/refresh", true);
  request.withCredentials = true;
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      contain = JSON.parse(this.responseText);
    }
  };
  request.send();
}

display_users();

function display_users() {
  users();
  setTimeout(function () {
    var list = '<tr id="nothing">';
    for(arrayIndex in contain) {

      list += '<tr id="tr">';
      list += '<td class="td_id">' + contain[arrayIndex].id +"</td>";
      list += '<td class="td_name">' + contain[arrayIndex].firstname + " " + contain[arrayIndex].lastname + '</td>';
      list += "</tr>";
    }
    document.getElementById('table').innerHTML = list;
  }, 100);
}
