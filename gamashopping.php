<!DOCTYPE html>
<html>

  <head>
      
    <link rel="stylesheet" href="gamashoppingstylesheet.css">
    <script type="text/jscript" src="gamashopping.js"></script>
    <title>Gama's Shop!</title>
    <div id="mainTitleDiv">
        <h1 id="mainTitle">Welcome to Gama's Mexican treats!</h1>
    </div>
  </head>

  <body>
      
    <div>
      <h6 id="itemSelectionTitle"> Please select the desired items from the table below.</h2>
    </div>

    <div id="ecommerceFormDiv">

      <img id="itemSelectedImage"
      src="shoppingImages/mexicanTreats.jpg"
      alt="mexicanTreats"</img>

      <div id="itemSelection" class="block">
        <label id="itemNameLabel">Rancheritos ( $2.1)</label>
        <input id="rancheritosInput" type="number" oninput="updateOrder(rancheritosInput)"
        onfocus="switchTreatImage(rancheritosInput.id)"
        onblur="switchTreatImage()"/>
      </div>

      <div id="itemSelection" class="block">
        <label id="itemNameLabel">Churrumais ( $3.5)</label>
        <input id="churrumaisInput"type="number" oninput="updateOrder(churrumaisInput)"
        onfocus="switchTreatImage(churrumaisInput.id)"
        onblur="switchTreatImage()"/>
      </div>

      <div id="itemSelection" class="block">
        <label id="itemNameLabel">Cheetos ( $5.18)</label>
        <input id="chetosInput" type="number" oninput="updateOrder(chetosInput)"
        onfocus="switchTreatImage(chetosInput.id)"
        onblur="switchTreatImage()"/>
      </div>

      <div id="itemSelection" class="block">
        <label id="itemNameLabel">Crujitos ( $1.32)</label>
        <input id="crujitosInput" type="number" oninput="updateOrder(crujitosInput)"
        onfocus="switchTreatImage(crujitosInput.id)"
        onblur="switchTreatImage()"/>
      </div>

      <div id="itemSelection" class="block">
        <label id="itemNameLabel">Sabritones ( $6.12)</label>
        <input id="sabritonesInput"type="number" oninput="updateOrder(sabritonesInput)"
        onfocus="switchTreatImage(sabritonesInput.id)"
        onblur="switchTreatImage()"/>
      </div>

      <hr id="totalHr">

      <div id="itemSelection" class="block">
        <button data-quantity="0" class="badgeTopRight" id="shoppingCartButton" onclick="openReviewOrderPage()"></button>
        <label id="itemNameLabel">Total</label>
        <label id="totalLabel">$ 0.00</label>
      </div>

      <hr id="totalHr">
      <button id="clearButton" onclick="resetButtonClicked()"> Clear</button>
    </div> <!--ecommerceFormDiv -->

  </body>
</html>

