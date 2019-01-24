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
