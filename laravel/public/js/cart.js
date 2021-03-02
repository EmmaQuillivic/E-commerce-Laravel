var list = "<tr>";

function remove(ids) {
  let products = JSON.parse(localStorage.getItem("cart")) || {};
  for (var i = 0; i < products.length; i++) {
    if (products[i].id == ids) {
      products.splice(i, 1);
      break;
    };
  };
    localStorage.setItem("cart", JSON.stringify(products));
};

function update(id) {
  let products = JSON.parse(localStorage.getItem("cart"));
  for (var i = 0; i < products.length; i++) {
    if (products[i].id == id) {
      value = document.getElementById('input_qty').value;
      products[i].quantity = value;
      document.getElementById('input_qty').value = value;
      break;
    };
  };
    localStorage.setItem("cart", JSON.stringify(products));
    show();
  };

function show() {
  let products = JSON.parse(localStorage.getItem("cart"));
  quantity_total = 0;
  price = 0;
  img = document.getElementById('mini');
  name = document.getElementById('title');
  qty = document.getElementById('qty');
  name = document.getElementById('Number_products');
  user_id = document.getElementById('user_id').value;
  if (products != null) {
    for(arrayIndex in products) {
      if (user_id == products[arrayIndex].id_user) {
        list += '<tr id="tr">';
        list += '<td class="td_photo">' + '<img src= "storage/img/bob/' + products[arrayIndex].picture + '" id="mini"></td>';
        list += '<td class="td_title">' + products[arrayIndex].name+"</td>";
        list += '<td class="td_price">' + products[arrayIndex].price + "$" +"</td>";
        list += '<td class="td_qty">' + '<input type="number" id="input_qty" class="qty" name="Number_products" min="1" max="10" value="' + products[arrayIndex].quantity +'">'
        + '<input onclick="update('+ products[arrayIndex].id +'), count()" class="send" type="submit" value="EDIT">' + "</td>";
        list += '<td class="td_qty">' + '<button onclick="remove('+ products[arrayIndex].id + '), show(), count()" class="delete"></button>' + "</td>";
        list += "</tr>";
        quantity_total += (parseInt(products[arrayIndex].quantity));
        price += (parseInt(products[arrayIndex].price) * (parseInt(products[arrayIndex].quantity)));
      };
    };
  } else {
    list = "Your bag is empty. Go get some products !";
  };
  document.getElementById('table').innerHTML = list;
  document.getElementById('p_option').textContent = quantity_total + " items";
  document.getElementById('p_total').textContent = price + "$";
  document.getElementById('p_total2').textContent = price + "$";
  quantity_total = 0;
  price = 0;
  list = '<tr id="tr">';
};
show();
