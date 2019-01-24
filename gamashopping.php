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
        <button data-quantity="0" class="badgeTopRight" id="shoppingCartButton"></button>
        <label id="itemNameLabel">Total</label>
        <label id="totalLabel">$ 0.00</label>
      </div>

      <hr id="totalHr">
      <!-- <button id="checkoutButton" onclick="checkoutButtonClicked()"> Checkout</button> -->
      <button id="checkoutButton" onclick="resetButtonClicked()"> Clear</button>
    </div> <!--ecommerceFormDiv -->

  </body>
</html>

<!-- <div>
        <form id="orderCheckoutForm" action="purchaseReview.php" method="POST">
          Name:
          <br>
              <input type="text" id="fname" name="inputName" style="width:300px;">
          </br>

          Address:
          <br>
            <input type="text" id="address" name="inputAddress" style="width:300px;">
          </br>

          Phone:
          <br>
            <input type="text" id="phone" name="inputPhoneNumber" style="width:300px;">
          </br>

          Credit Card Number:
          <br>
            <input type="text" id="creditCardNumber" name="inputCCN" style="width:300px;">
          </br>
          <select id="monthDropDown">
            <option>Month</option>
            <option value="January">January</option>
            <option value="February">February</option>
            <option value="March">March</option>
            <option value="April">April</option>
            <option value="May">May</option>
            <option value="June">June</option>
            <option value="July">July</option>
            <option value="August">August</option>
            <option value="September">September</option>
            <option value="October">October</option>
            <option value="November">November</option>
            <option value="December">December</option>
          </select>

          <select id="yearDropDown">
            <option>Year</option>
            <option value="2018">2018</option>
            <option value="2019">2019</option>
            <option value="2020">2020</option>
            <option value="2021">2021</option>
            <option value="2022">2022</option>
            <option value="2023">2023</option>
            <option value="2024">2024</option>
            <option value="2025">2025</option>
            <option value="2026">2026</option>
            <option value="2027">2030</option>
            <option value="2028">2031</option>
            <option value="2029">2032</option>
          </select>

        </form>
      </div> -->