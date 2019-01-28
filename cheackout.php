<?php
    $rancheritos = $_GET["rancheritos"];
    $churrumais = $_GET["churrumais"];
    $cheetos = $_GET["chetos"];
    $sabritones = $_GET["sabritones"];
    $crujitos = $_GET["crujitos"];
    $total = $_GET["total"];
?>

<!DOCTYPE html>
    <head>
        <link rel="stylesheet" href="checkoutpagestylesheet.css">
        <script type="text/jscript" src="gamashopping.js"></script>
        <title>Checkout</title>
        <div id="mainTitleDiv">
            <h1 id="mainTitle">Checkout!</h1>
         </div>
    </head>
    <body>
        <div id="checkoutContentDiv">
            <form>
                First Name:
                <br><input type="text" id="userFirstName"><br>

                Last Name:
                <br><input type="text" id="userLastName"><br>

                Address:
                <br><input type="text" id="userAddress" id><br>

                State:
                <br><input type="text" id="userState"><br>

                City:
                <br><input type="text" id="userCity" id="userInfoText"><br>

                Zip Code:
                <br><input type="text" id="userZipCode" id="userInfoText"><br>
                
                <br><button id="checkout" onclick="placeOrderButtonTapped(<?php echo $cheetos?>, <?php echo $rancheritos?>,
                                                                         <?php echo $churrumais?>, <?php echo $crujitos?>,
                                                                         <?php echo $sabritones?>, <?php echo $total?>)">Place Order</button><br>
            </form>
        </div>
    </body>
</html>