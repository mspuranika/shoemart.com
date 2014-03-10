<?php
include("../../connectdb.php");
$gender_filter_boots = "";
$price_filter_boots = "";
$discount_filter_boots = "";

if (!empty($_POST)) {
    if (isset($_POST['gender'])) {
        if ($_POST['gender'] != 'all') {
            $gender_filter_boots = "and gender='" . $_POST['gender'] . "'";
        }
    }
    if (isset($_POST['price'])) {
        if ($_POST['price'] != 'all') {
            $price_limit_boots = explode('-', $_POST['price']);
            $price_filter_boots = "and (price>=" . $price_limit_boots[0] . " and price<=" . $price_limit_boots[1] . ")";
        }
    }
    if (isset($_POST['discounts'])) {
        if ($_POST['discounts'] == "discount") {
            $discount_filter_boots = "and discount='yes'";
        }
    }
}

mysql_select_db("boots", $con) or die(mysql_errno());

$bootquery = "select *from BOOT where 1=1 " . $gender_filter_boots . $price_filter_boots . $discount_filter_boots;
$bootresult = mysql_query($bootquery);

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
$count = 0;
if(mysql_num_rows($bootresult)){?>
     <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px">
                <?php if(mysql_num_rows($bootresult)==1){
                $bootrow= mysql_fetch_array($bootresult);?>
                <td align="center" class="imghigt"><a href="/shoemart.com/categories/boots/<?php echo ($bootrow['name']) ?>.php"><img src="/shoemart.com/images/boots/<?php echo($bootrow['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($bootrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($bootrow['price']) ?></u></p>
                            </a></td>
             <?php  } else{
   while ($bootrow = mysql_fetch_array($bootresult)) {
    
    ?>
                <?php if ($count % 3 == 0) { ?>
                        <tr>
                    <?php } ?>
                        <td align="center" class="imghigt"><a href="/shoemart.com/categories/boots/<?php echo ($bootrow['name']) ?>.php"><img src="/shoemart.com/images/boots/<?php echo($bootrow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($bootrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($bootrow['price']) ?></u></p>
                            </a></td>
                    <?php if ($count % 3 == 2) { ?>
                        </tr>
                        <?php } ?>
    <?php
    $count++;
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