function order() {

  var cart = JSON.parse(localStorage.getItem("cart"));
  quantity_total = 0;
  price_total = 0;

  if (cart != null) {
    for(arrayIndex in cart) {
      quantity_total += (parseInt(cart[arrayIndex].quantity));
      price_total += (parseInt(cart[arrayIndex].price) * (parseInt(cart[arrayIndex].quantity)));
    };

    var request = new XMLHttpRequest();

    token = document.querySelector('meta[name="csrf-token"]').content;

    request.open("POST", "/cart/add", true);
    request.responseType = "json";
    request.setRequestHeader("X-CSRF-Token", token);
    request.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
    request.send("price_total=" +price_total+"&quantity_total=" +quantity_total);

    localStorage.clear();
    show();
    count();
    alert('Congratulations! Your order has just been registered. You will receive your products in the coming weeks. ');
  };
}
