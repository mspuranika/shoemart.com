<?php
include("../../connectdb.php");

$gender_filter_sandals="";
$price_filter_sandals="";
$discount_filter_sandals="";

if(!empty($_POST)){
    if(isset($_POST['gender'])){
        if($_POST['gender']!='all'){
            $gender_filter_sandals="and gender='".$_POST['gender']."'";
        }
    }
    if(isset($_POST['price'])){
        if($_POST['price']!='all'){
            $pricelimit_sandals= explode('-', $_POST['price']);
            $price_filter_sandals="and (price>=".$pricelimit_sandals[0]." and price<=".$pricelimit_sandals[1].")";
        }
    }
    if(isset($_POST['discounts'])){
        if($_POST['discounts']=='discount'){
            $discount_filter_sandals="and discount='yes'";
        }
    }
}
mysql_select_db("sandals", $con) or die(mysql_errno());

$sandalsquery = "select *from SANDAL where 1=1 " . $gender_filter_sandals . $price_filter_sandals . $discount_filter_sandals;
$sandalsresult =mysql_query($sandalsquery);

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

$countsandals = 0;
if(mysql_num_rows($sandalsresult)){?>
     <body>
        <br>
        <div class="scrollable">
            <table width="100%" height="100%" bgcolor=#47525C cellpadding="10px"style="border:groove;border-color:#202122;">
           <?php if(mysql_num_rows($sandalsresult)==1){
               $sandalsrow=  mysql_fetch_array($sandalsresult);?>
                <td align="center" class="imghigt"><a href="/shoemart.com/categories/sandals/<?php echo ($sandalsrow['name']) ?>.php"><img src="/shoemart.com/images/sandals/<?php echo($sandalsrow['name']) ?>.jpg" alt="error" height="200px" width="25%"/>
                                <p style="color:white;"><?php echo($sandalsrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($sandalsrow['price']) ?></u></p>
                            </a></td>
          <?php } else{ 
 while ($sandalsrow = mysql_fetch_array($sandalsresult)) {
    ?>
                <?php if ($countsandals % 3 == 0) { ?>
                        <tr>
                    <?php } ?>
                            <td align="center" class="imghigt"><a href="/shoemart.com/categories/sandals/<?php echo ($sandalsrow['name']) ?>.php"><img src="/shoemart.com/images/sandals/<?php echo($sandalsrow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($sandalsrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($sandalsrow['price']) ?></u></p>
                            </a></td>
                    <?php if ($countsandals % 3 == 2) { ?>
                        </tr>
                        <?php } ?>
    <?php
    $countsandals++;
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