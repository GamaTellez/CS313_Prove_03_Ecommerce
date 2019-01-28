<?php
    $rancheritos = $_GET["rancheritos"];
    $churrumais = $_GET["churrumais"];
    $cheetos = $_GET["chetos"];
    $sabritones = $_GET["sabritones"];
    $crujitos = $_GET["crujitos"];
    $total = $_GET["total"];
?>

<html>
    <head>
        <link rel="stylesheet" href="gamashoppingstylesheet.css">
        <title>Gama's Shop!</title>
        <div id="mainTitleDiv">
            <h3 id="mainTitle"> The best of Mexico coming to you!</h3>
        </div>
    </head>
    
    <body>
        <div id="orderReviewTableView">
            <table id="orderStatus"> 
                <tr>
                    <th id="headerCell">Item</th>
                    <th id="headerCell">Quanitity</th>
                    <th id="headerCell">Unit Cost</th>
                    <th id="headerCell">Unit Total</th>
                </tr>
                
                <tr>
                    <th>Rancheritos</th>
                        <?php
                        echo '<th>'.$rancheritos.'</th>';
                        ?>
                        <th>$2.1</th>
                        <?php
                        echo '<th>'."$ ".$rancheritos * 2.1.'</th>';
                        ?>
                </tr>
            
                <tr>
                    <th>Churrumais</th>
                        <?php
                        echo '<th>'.$churrumais.'</th>';
                        ?>
                        <th>$3.5</th>
                        <?php
                        echo '<th>'."$ ".$churrumais * 2.1.'</th>';
                        ?>
                </tr>

                <tr>
                    <th>Cheetos</th>
                        <?php
                        echo '<th>'.$cheetos.'</th>';
                        ?>
                        <th>$5.18</th>
                        <?php
                        echo '<th>'."$ ".$cheetos * 2.1.'</th>';
                        ?>
                </tr>

                <tr>
                    <th>Crujitos</th>
                        <?php
                        echo '<th>'.$crujitos.'</th>';
                        ?>
                        <th>$1.32</th>
                        <?php
                        echo '<th>'."$ ".$crujitos * 2.1.'</th>';
                        ?>
                </tr>

                <tr>
                    <th>Sabritones</th>
                        <?php
                        echo '<th>'.$sabritones.'</th>';
                        ?>
                        <th>$6.12</th>
                        <?php
                        echo '<th>'."$ ".$sabritones * 2.1.'</th>';
                        ?>
                </tr>

                <tr>
                    <th></th>
                    <th></th>
                    <th align="right">Total:</th>
                    <th align="right">
                        <?php
                        echo "$ ".$total;
                        ?>
                    </th>
                </tr>

            </table>
        </div> 
        <hr id="totalHr">
        <div id="orderOptions">
            <button id="returnButton"> Return</button>
            <!-- <button id="checkoutButton"> Continue to checkout</button> -->
            <a href="cheackout.php" id="checkoutButton">Continue to Checkout</a>
        </div>
    </body>
</html>