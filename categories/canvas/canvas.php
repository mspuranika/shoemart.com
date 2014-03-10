<?php
include("../../connectdb.php");

$gender_filter_canvas = "";
$price_filter_canvas = "";
$discount_filter_canvas = "";

if (!empty($_POST)) {

    if (isset($_POST['gender'])) {
        if ($_POST['gender'] != "all") {
            $gender_filter_canvas = " and gender = '" . $_POST['gender'] . "' ";
        }
    }


    if (isset($_POST['price'])) {
        if ($_POST['price'] != "all") {
            $pricelimit_canvas = explode('-', $_POST['price']);
            $price_filter_canvas .= " and (price >= " . $pricelimit_canvas[0] . " and price <= " . $pricelimit_canvas[1] . ")";
        }
    }

    if (isset($_POST['discounts'])) {
       if ($_POST['discounts'] == "discount") {
            $discount_filter_canvas = " and discount = 'yes' ";
        }
    }
}

mysql_select_db("canvas", $con) or die(mysql_error());
$query = "select * from CANVASSHOE where 1 = 1  " . $gender_filter_canvas . $price_filter_canvas . $discount_filter_canvas;
$results = mysql_query($query);





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
if(mysql_num_rows($results)){?>
     <body>
        <br>
        <div class="scrollable">

            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px">
    <?php if(mysql_num_rows($results)==1){
        $row=  mysql_fetch_array($results);?>
        <td align="center" class="imghigt"><a href="/shoemart.com/categories/canvas/<?php echo ($row['name']) ?>.php"><img src="/shoemart.com/images/canvas/<?php echo($row['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($row['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($row['price']) ?></u></p>
                            </a></td>
   <?php } else{           
 while ($row = mysql_fetch_array($results)) {
    
     if ($count % 3 == 0) { ?>
                        <tr>
                    <?php } ?>
                        <td align="center" class="imghigt"><a href="/shoemart.com/categories/canvas/<?php echo ($row['name']) ?>.php"><img src="/shoemart.com/images/canvas/<?php echo($row['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($row['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($row['price']) ?></u></p>
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