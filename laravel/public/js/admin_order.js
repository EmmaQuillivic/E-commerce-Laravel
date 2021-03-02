function orders() {

  span = document.getElementById('number_orders');
  var request = new XMLHttpRequest();
  request.open("GET", "/admin/order", true);
  request.withCredentials = true;
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      span.textContent = JSON.parse(this.responseText) + " orders since the opening";
    }
  };
  request.send();
}
orders();

function Biggest_order() {

  span2 = document.getElementById('price');
  var request = new XMLHttpRequest();
  request.open("GET", "/admin/order/big", true);
  request.withCredentials = true;
  request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
  request.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {

      reponse = (this.responseText).substring(15);
      span2.textContent = reponse.substring(0, reponse.length - 1) + "$";
    }
  };
  request.send();
}
Biggest_order();
