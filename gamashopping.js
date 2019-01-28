var total = 0.00;
var rancheritos = 0;
var churrumais = 0;
var chetos = 0;
var crujitos = 0;
var sabritones = 0;

function updateOrder(inputElement) {
  var valueEntered = parseInt(inputElement.value);
  if (valueEntered < 0) {
      inputElement.value = 0;
  } else {
    switch (inputElement.id) {
      case "rancheritosInput":
            rancheritos = valueEntered;
        break;
      case "churrumaisInput":
            churrumais = valueEntered;
        break;
      case "chetosInput":
            chetos = valueEntered;
        break;
      case "crujitosInput":
            crujitos = valueEntered;
        break;
      case "sabritonesInput":
            sabritones = valueEntered;
        break;
      default:
        break;
    }
    total = ((rancheritos * 2.1) + (churrumais * 3.5) + (chetos * 5.18) + (crujitos * 1.32) + (sabritones * 6.12)).toFixed(2);
    document.getElementById("totalLabel").innerHTML = "$ " + total;
    document.getElementById("shoppingCartButton").dataset.quantity = rancheritos + churrumais + chetos + crujitos + sabritones;
  }
}

function switchTreatImage(inputId) {
  var imagesrc = 'shoppingImages/mexicanTreats.jpg';
  switch (inputId) {
      case "rancheritosInput":
        imagesrc = 'shoppingImages/rancheritos.jpeg';
        break;
      case "churrumaisInput":
        imagesrc = 'shoppingImages/churrumais.jpg';
        break;
      case "chetosInput":
        imagesrc = 'shoppingImages/cheetos.jpg';
        break;
      case "crujitosInput":
      imagesrc = 'shoppingImages/crujitos.jpg';
        break;
      case "sabritonesInput":
      imagesrc = 'shoppingImages/sabritones.jpg ';
        break;
    default:
        break;
  }
  document.getElementById("itemSelectedImage").src = imagesrc;
}

function resetButtonClicked() {
    document.getElementById("totalLabel").innerHTML = "$ 0.00";
    document.getElementById("shoppingCartButton").dataset.quantity = 0;
    document.getElementById('rancheritosInput').value = "";
    document.getElementById('churrumaisInput').value = "";
    document.getElementById('chetosInput').value = "";
    document.getElementById('crujitosInput').value = "";
    document.getElementById('sabritonesInput').value = "";
    rancheritos = 0;
    churrumais = 0;
    chetos = 0;
    crujitos = 0;
    sabritones = 0;
    total = 0;
}

function openCheckoutPage(chur, che, cru, sab, ran, tot) {
    window.location.href = "cheackout.php?rancheritos=" + ran + 
                            "&churrumais=" + chur +
                            "&chetos=" + che + 
                            "&crujitos=" + cru + 
                            "&sabritones=" + sab + 
                            "&total=" + tot; 
}

function openReviewOrderPage() {
  window.location.href = "orderreview.php?rancheritos=" + rancheritos + 
                          "&churrumais=" + churrumais +
                          "&chetos=" + chetos + 
                          "&crujitos=" + crujitos + 
                          "&sabritones=" + sabritones + 
                          "&total=" + total; 
}

function placeOrderButtonTapped(chur, che, cru, sab, ran, tot) {
   var userFirstName = document.getElementById("userFirstName").value;
   var userLastName = document.getElementById("userLastName").value;
   var userAddress = document.getElementById("userAddress").value;
   var userState = document.getElementById("userState").value;
   var userCity = document.getElementById("userCity").value;
   var userZipCode = document.getElementById("userZipCode").value;

  var message = "Thank you for your order " + userFirstName + "\n" +
                "your package containing the following will arrive soon:\n" +
                chur + " churrumais\n" +
                ran +  " rancheritos\n" +
                che + " cheetos\n" +
                cru + " crujitos\n" +
                sab + " sabritones\n" +
                "to the following Address: \n" +
                userFirstName + " " + userLastName + "\n" +
                userAddress + ", " + userCity + "\n" +  
                userState + ", " + userZipCode; 
  alert(message);
  window.location = "gamashopping.php";
  }
