<?php
include("../../connectdb.php");

$gender_filter_loafers="";
$price_filter_loafers="";
$discount_filter_loafers="";

if(!empty($_POST)){
    if(isset($_POST['gender'])){
        if($_POST['gender']!='all'){
           if($_POST['gender']=='female'){ femaleprint(); exit();}
            $gender_filter_loafers="and gender='".$_POST['gender']."'";
        }
    }
    if(isset($_POST['price'])){
        if($_POST['price']!='all'){
            $pricelimit_loafers=  explode('-', $_POST['price']);
            $price_filter_loafers="and(price>=".$pricelimit_loafers[0]." and price<=".$pricelimit_loafers[1].")";
        }
    }
    if(isset($_POST['discounts'])){
        if($_POST['discounts']=='discount'){
             $discount_filter_loafers="and discount='yes'";
        }
    }
}
mysql_select_db("loafers", $con) or die(mysql_errno());

$loaferquery = "select *from LOAFER where 1=1 " . $gender_filter_loafers . $price_filter_loafers . $discount_filter_loafers;
$loaferresult =mysql_query($loaferquery);

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
$countloafer = 0;
if(mysql_num_rows($loaferresult)){?>
     <body>
        <br>
        <div class="scrollable">
            <table width="100%" height="100%" bgcolor=#47525C cellpadding="10px"style="border:groove;border-color:#202122;">
            <?php if(mysql_num_rows($loaferresult)==1){
                $loaferrow=mysql_fetch_array($loaferresult);?>
                <td align="center" class="imghigt"><a href="/shoemart.com/categories/loafers/<?php echo ($loaferrow['name']) ?>.php"><img src="/shoemart.com/images/loafers/<?php echo($loaferrow['name']) ?>.jpg" alt="error" height="200px" width="30%"/>
                                <p style="color:white;"><?php echo($loaferrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($loaferrow['price']) ?></u></p>
                            </a></td>
           <?php }else{
 while ($loaferrow = mysql_fetch_array($loaferresult)) {
    ?>
                <?php if ($countloafer % 3 == 0) { ?>
                        <tr>
                    <?php } ?>
                            <td align="center" class="imghigt"><a href="/shoemart.com/categories/loafers/<?php echo ($loaferrow['name']) ?>.php"><img src="/shoemart.com/images/loafers/<?php echo($loaferrow['name']) ?>.jpg" alt="error" height="200px" width="60%"/>
                                <p style="color:white;"><?php echo($loaferrow['name']) ?> &nbsp;&nbsp;&nbsp;<u><?php echo($loaferrow['price']) ?></u></p>
                            </a></td>
                    <?php if ($countloafer % 3 == 2) { ?>
                        </tr>
                        <?php } ?>
    <?php
    $countloafer++;
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
  function femaleprint(){
      include("../../include/header.php");
        include("../../include/sidebar.php");?>
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
           <body>
        <br>
        <div class="scrollable">
            <table width="100%" height="100%" bgcolor=#000000 cellpadding="10px"><tr><td>
                        <p style="font-family: times-new-roman;font-size:35px;color:white;" align="center">
                            Women don't wear loafers...!</p></td></tr></table></div></body>
  <?php }
?>
            </table>
        </div>
    </body>
</html>