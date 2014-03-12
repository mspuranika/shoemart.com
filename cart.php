<?php
include("connectdb.php");
mysql_select_db("cart") or die(mysql_error());
error_reporting(E_ALL ^ E_NOTICE);

$cartquery = "select *from CART where 1=1 ";
$cartsresult = mysql_query($cartquery);
include("/wamp/www/shoemart.com/include/header.php");
include("/wamp/www/shoemart.com/include/sidebar.php");


$countcart = 0;
?>
<html>
    <head>
        <style type="text/css">
            div.scrollable {
                float:left;
                width:75%;
                height:450px;
                overflow:auto;
            }
            *.imghigt {
                height:200px;
                width:100px;
            }
            #special{ background-color:orange;
                      padding: 13px;
                      color:white;
                      font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;
                      font-size:18px;}
            </style>
        </head><?php if (mysql_num_rows($cartsresult)) { ?>
            <body>
                <br>
                <div class="scrollable">

                <table width="100%" height="100%" bgcolor=#47525C cellpadding="10px"style="border:groove;border-color:#202122;">
    <?php if (mysql_num_rows($cartsresult) == 1) {
        $cartrow = mysql_fetch_array($cartsresult);
        $str = $cartrow['name'];
        $arr = preg_split('/[0-9]/i', $str);
        if ($arr[0] == 'loafer') {
            $arr[0] = 'loafers';
        }if($arr[0]=='boot'){
            $arr[0]='boots';
        }
        ?>
                        <td align="center" class="imghigt"><a href="/shoemart.com/categories/<?php echo($arr[0]) ?>/<?php echo ($cartrow['name']) ?>.php"><img src="/shoemart.com/images/<?php echo($arr[0]) ?>/<?php echo($cartrow['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($cartrow['name']) ?> </p>
                            </a></td>

                    <?php
                    } else {
                        while ($cartrow = mysql_fetch_array($cartsresult)) {
                            $str = $cartrow['name'];
                            $arr = preg_split('/[0-9]/i', $str);
                            if ($arr[0] == 'loafer') {
                                $arr[0] = 'loafers';
                            }if($arr[0]=='boot'){
            $arr[0]='boots';
        }
                            ?>
                            <?php if ($countcart % 3 == 0) { ?>
                                <tr>
                            <?php } ?>
                                <td align="center" class="imghigt"><a href="/shoemart.com/categories/<?php echo($arr[0]) ?>/<?php echo ($cartrow['name']) ?>.php"><img src="/shoemart.com/images/<?php echo($arr[0]) ?>/<?php echo($cartrow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                        <p style="color:white;"><?php echo($cartrow['name']) ?> </p>
                                    </a></td>
            <?php if ($countcart % 3 == 2) { ?>
                                </tr>
            <?php } ?>

            <?php
            $countcart++;
        }
    }
} else {
    ?>  <body>
                        <br>
                        <div class="scrollable">

                            <table width="100%" height="100%" bgcolor=#47525C  cellpadding="10px"><tr><td>

                                        <p style="font-family: times-new-roman;font-size:35px;color:white;" align="center">
                                            Oops...!</p>
                                        <p style="font-family: times-new-roman;font-size:35px;color:white;" align="center">
                                            Cart empty!
                                        </p></td></tr></table>
<?php }
?>

            </table>
                    <form action="" method="post" name="cartbutt" id="cartbutt">
                <input style="float: left;margin-left: 300px;"type="submit" id="special" name="clearall" value="Clear All"></form>
            <?php mysql_select_db("cart");
                if($_POST['clearall']){
                $clearquery="delete from CART";
                mysql_query($clearquery);
                header('refresh: 0; URL='.$_SERVER['PHP_SELF']);
            }
?>
                    <form action="/shoemart.com/buy.php" method="post" name="cartbutt" id="cartbutt">
                <input style="float: left;margin-left:250px;"type="submit" id="special" name="checkout" value="Checkout!"></form>
                
            
        </div> 
    </body>
</html>
