<?php
include("../../include/header.php");
include("../../include/sidebar.php");
?>
<html>
    <head>
        <style type="text/css">
            div.scrollable{float:left;width:75%;height:410px;overflow:auto;}
            *.imghigt{height:150px;width:100px;}
            .productdetail{font-size:20px;color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;}
            #checkoutbutton {
                //width:100px; height:60px;
                background-color:orange;
                //-moz-border-radius: 25px;
                //-webkit-border-radius: 25px;
                //border: 5px solid #009900;
                padding: 15px;
                color:white;
            }
        </style>
    </head>
    <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#47525C cellpadding="10px"style="border:groove;border-color:#202122;">
                <td align="center" height="100%" width="100%">
                    <img src="../../images/boots/boot7.jpg" alt="canvas1" style="float:left;"/>
                    <p class="productdetail">Product Details:</p><hr>
                    <ul style="float:left;color:white;"align="left">
                        <li>Price:</li><br><br>
                        <li>Make:</li><br><br>
                        <li>Warranty:</li><br><br>
                    </ul>
                    <ul style="float:left;">
                        <li>Rs.3500.00</li><br><br>
                        <li>D&G</li><br><br>
                        <li>3 Years</li><br><br>
                    </ul>
                    <ul style="float:left;">
                        <li style="margin-left:50px;" align="left"><br>
                            <br>
                            <br>
                            <a href="../../buy.php" id="checkoutbutton"><b>Buy it!!</b></a></li>


                </td>
            </table>

        </div>
    </body>
</html>