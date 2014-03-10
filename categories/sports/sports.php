<?php
include("../../connectdb.php");

$gender_filter_sports = "";
$price_filter_sports = "";
$discount_filter_sports = "";

if (!empty($_POST)) {
    if (isset($_POST['gender'])) {
        if ($_POST['gender'] != 'all') {
            $gender_filter_sports = "and gender='" . $_POST['gender'] . "'";
        }
    }

    if (isset($_POST['price'])) {
        if ($_POST['price'] != 'all') {
            $pricelimit_sports = explode('-', $_POST['price']);
            $price_filter_sports = "and(price>=" . $pricelimit_sports[0] . " and price<=" . $pricelimit_sports[1] . ")";
        }
    }

    if (isset($_POST['discounts'])) {
        if ($_POST['discounts'] == 'discount') {
            $discount_filter_sports = "and discount='yes'";
        }
    }
}
mysql_select_db("sports", $con) or die(mysql_errno());

$sportsquery = "select *from SPORTSSHOE where 1=1 " . $gender_filter_sports . $price_filter_sports . $discount_filter_sports;
$sportsresult = mysql_query($sportsquery);

include("../../include/header.php");
include("../../include/sidebar.php");
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
        </style>
    </head>
    
                <?php
                $countsports = 0;
                if(mysql_num_rows($sportsresult)){?>
     <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px">
               <?php if(mysql_num_rows($sportsresult)==1){
                $sportsrow= mysql_fetch_array($sportsresult);?>
                   <td align="center" class="imghigt"><a href="/shoemart.com/categories/sports/<?php echo ($sportsrow['name']) ?>.php"><img src="/shoemart.com/images/sports/<?php echo($sportsrow['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($sportsrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($sportsrow['price']) ?></u></p>
                            </a></td>
             <?php  } else{
                while ($sportsrow = mysql_fetch_array($sportsresult)) {
                    ?>
                    <?php if ($countsports % 3 == 0) { ?>
                        <tr>
                        <?php } ?>
                        <td align="center" class="imghigt"><a href="/shoemart.com/categories/sports/<?php echo ($sportsrow['name']) ?>.php"><img src="/shoemart.com/images/sports/<?php echo($sportsrow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($sportsrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($sportsrow['price']) ?></u></p>
                            </a></td>
                        <?php if ($countsports % 3 == 2) { ?>
                        </tr>
                    <?php } ?>
                    <?php
                    $countsports++;
                }}}
else{?>  <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px"><tr><td>
                        
                        <p style="font-family: times-new-roman;font-size:35px;color:white;" align="center">
                         Oops...!</p>
                        <p style="font-family: times-new-roman;font-size:35px;color:white;" align="center">
                        Sorry, no products found in this category! Please alter your requirements!
                        </p></td></tr></table>
<?php }
?>
            </table>
        </div>
    </body>
</html>