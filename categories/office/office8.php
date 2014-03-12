<?php
include("../../include/header.php");
include("../../include/sidebar.php");
include("/wamp/www/shoemart.com/connectdb.php");
$_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['PHP_SELF'], PHP_URL_PATH);
$cartseg = explode('/', $_SERVER['REQUEST_URI_PATH']);
$finalcart = explode('.php', $cartseg[4]);
$forcart = $finalcart;
$nameofthisfile = $forcart[0];
mysql_select_db("cart", $con) or die(mysql_error());
error_reporting(E_ALL ^ E_NOTICE);
?>
<html>
    <head>
        <style type="text/css">
            div.scrollable{float:left;width:75%;height:410px;overflow:auto;}
            *.imghigt{height:150px;width:100px;}
            .productdetail{font-size:20px;color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;}
             .verydetail{font-size:17px;color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;}
            #checkoutbutton {
                //width:100px; height:60px;
                background-color:orange;
                //-moz-border-radius: 25px;
                //-webkit-border-radius: 25px;
                //border: 5px solid #009900;
                padding: 15px;
                color:white;
            }
            #special{ background-color:orange;
            padding: 13px;
                color:white;
            font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;
            font-size:18px;}
            
        </style>
    </head>
    <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#47525C cellpadding="10px"style="border:groove;border-color:#202122;">
                <td align="center" height="100%" width="100%">
                    <img src="../../images/office/office8.jpg" alt="canvas1" style="float:left;"/>
                    <p class="productdetail">Product Details:</p><hr>
                    <ul style="float:left;color:white;"align="left">
                        <li>Price:</li><br><br>
                        <li>Make:</li><br><br>
                        <li>Warranty:</li><br><br>
                        <li>Discount:</li><br><br>
                        <li>Offer Price:</li>
                    </ul>
                    <ul style="float:left;">
                        <li>Rs.999.00</li><br><br>
                        <li>Indigo Nation</li><br><br>
                        <li>2 Years</li><br><br>
                        <li>10%</li><br><br>
                        <li><b><u>Rs.899.00</u></b></li>
                    </ul><br><br><br><br><br><br><br><br><br>
                        <p style="width:550px;float:left;margin-left:30px;"class="verydetail">
                            This is a very good product from Ruggers, which has a limited warranty upto one year,
                            indicates that you can use on any kind of whether, on any kind of surface, and for any
                            kind of work, which seems perfect for you!
                        </p><br>

                        <div style="float:left;margin-left:425px;">  <br>
                            <a href="../../buy.php" id="checkoutbutton"><b>Buy it!!</b></a></li></div>

                        <div style="float:left;margin-left: 50px;">  
                            <?php
                            $cartquery = "select *from CART where name='$nameofthisfile'";
                            $cartresult = mysql_query($cartquery);
                            if (mysql_num_rows($cartresult) == 0) {
                                ?>
                                <form action="" method="post" name="cart" id="cart">
                                    <input type="submit" id="special" name="addtocart" value="Add to cart"></form></li></div>
                            <?php
                            if ($_POST['addtocart']) {
                                $addtocartquery = "insert into CART values('" . $nameofthisfile . "')";
                                mysql_query($addtocartquery);    
                                header('refresh: 0; URL='.$_SERVER['PHP_SELF']);
                            }
                        } else {
                            ?>
                            <div style="float:left;margin-left:00px;">  
                                <form action="" method="post" name="cart" id="cart">
                                    <input type="submit" id="special" name="removefromcart" value="Remove from cart"></form></li></div>
                                    <?php
                                    if ($_POST['removefromcart']) {
                                        $removecart = "delete from CART where name='" . $nameofthisfile . "'";
                                        mysql_query($removecart);
                                        header('refresh: 0; URL='.$_SERVER['PHP_SELF']);
                                        
                                    }
                                }
                                ?>

                    </td></tr>
            </table>

        </div>
    </body>
</html>

