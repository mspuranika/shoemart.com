<?php
include ('../../connectdb.php');

$gender_filter_office="";
$price_filter_office="";
$discount_filter_office="";

if(!empty($_POST)){
    if(isset($_POST['gender'])){
        if($_POST['gender']!='all'){
            $gender_filter_office="and gender='".$_POST['gender']."'";
        }
    }
    if(isset($_POST['price'])){
        if($_POST['price']!='all'){
            $pricelimit_office=  explode('-', $_POST['price']);
            $price_filter_office="and(price>=".$pricelimit_office[0]." and price<=".$pricelimit_office[1].")";
        }
    }
    if(isset($_POST['discounts'])){
        if($_POST['discounts']=='discount'){
            $discount_filter_office="and discount='yes'";
        }
    }
}
mysql_select_db("office", $con) or die(mysql_errno());

$officequery = "select *from OFFICE where 1=1 " . $gender_filter_office . $price_filter_office . $discount_filter_office;
$officeresult =mysql_query($officequery);

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
if(mysql_num_rows($officeresult)){?>
     <body>
        <br>
        <div class="scrollable">
            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px">
            <?php if(mysql_num_rows($officeresult)==1){
                $officerow=mysql_fetch_array($officeresult)?>
                <td align="center" class="imghigt"><a href="/shoemart.com/categories/office/<?php echo ($officerow['name']) ?>.php"><img src="/shoemart.com/images/office/<?php echo($officerow['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($officerow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($officerow['price']) ?></u></p>
                            </a></td>
            <?php } else{
 $countoffice = 0;
while ($officerow = mysql_fetch_array($officeresult)) {
    ?>
                <?php if ($countoffice % 3 == 0) { ?>
                        <tr>
                    <?php } ?>
                            <td align="center" class="imghigt"><a href="/shoemart.com/categories/office/<?php echo ($officerow['name']) ?>.php"><img src="/shoemart.com/images/office/<?php echo($officerow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($officerow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($officerow['price']) ?></u></p>
                            </a></td>
                    <?php if ($countoffice % 3 == 2) { ?>
                        </tr>
                        <?php } ?>
    <?php
    $countoffice++;
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