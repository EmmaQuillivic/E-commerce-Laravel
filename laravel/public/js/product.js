window.onload = count();

var productArray=[];

function AddProduct(ids, name, picture, price, id_users) {

  var productJSON = {"id": ids, "name" : name, "price" : price, "quantity" : document.getElementById('Number_products').value, "picture" : picture, "id_user" : id_users};

  product = localStorage.getItem('cart');

  if (product == null){ // Si le cart n'existe pas, on le crée
    productArray.push(productJSON);
    localStorage.setItem('cart', JSON.stringify(productArray));
  };

  productArray = JSON.parse(localStorage.getItem('cart')); // Permet de donner une valeur à productArray afin qu'il ne mette pas 2 fois le même produit après un refresh

  if (product != null ) { // Ajout des produits dans le cart après création de celui-ci
    id_product = productArray.find( ({ id }) => id == ids );
    if (id_product != undefined) {
        alert('you already have this product in your cart !');
    } else {
      productArray.push(productJSON);
      localStorage.setItem('cart', JSON.stringify(productArray));
    };
  };
  count();
};

function count() {
  cart = localStorage.getItem('cart');
  items = document.getElementById('items');
  productArray = localStorage.getItem('cart');
  productArray = JSON.parse(productArray);
  if (cart == null){
    items.textContent = 0;
  } else {
    quantity = 0;
    for(arrayIndex in productArray) {
      qty = parseInt(productArray[arrayIndex].quantity);
      quantity += qty;
    };
    items.textContent = quantity;
    quantity = 0;
  };
};
