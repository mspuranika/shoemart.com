<?php
include("include/header.php");
?>
<html>
    <head>
<style type="text/css">
    #homebutton {
                //width:100px; height:60px;
                background-color:grey;
                //-moz-border-radius: 25px;
                //-webkit-border-radius: 25px;
                //border: 5px solid #009900;
                padding: 15px;
                color:white;
            }
            a{text-decoration:none;color:inherit;-webkit-border-radius: 10px;-moz-border-radius:10px;height:30px;font-size:18px;}
            .pepe{font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;font-size:22px;}
            .pepe1{font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;font-size:18px;}
            .productdetail{font-size:20px;color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;overflow:auto;}
            ul{list-style-type: none;font-size:16px;color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;}
        </style>
        <script type="text/javascript">
            var image1 = new Image();
            image1.src = "../shoemart.com/images/slideshow/image1.jpg";
            var image2 = new Image();
            image2.src = "../shoemart.com/images/slideshow/image2.jpg";
            var image3 = new Image();
            image3.src = "../shoemart.com/images/slideshow/image3.jpg";
            var image4 = new Image();
            image4.src = "../shoemart.com/images/slideshow/image4.jpg";
            var image5 = new Image();
            image5.src = "../shoemart.com/images/slideshow/image5.jpg";

        </script>
        <script type="text/javascript">
            EnableSubmit = function(submitthis)
            {
                var sbmt = document.getElementById("checkbox");

                if (submitthis.checked == true)
                {
                    sbmt.disabled = false;
                }
                else
                {
                    sbmt.disabled = true;
                }
            }

        </script>                                                         

    </head>
    <body>
        <br>
        <table style="height:100%; width:100%;">
            <tr>
                <td>
                    <div style="overflow:auto;width:98%;height:400px;background-color:#47525C;color:white;border:groove;border-color:#202122;">
                        <br><br>
                        <p class="pepe" align="center">Thank You for shopping in ShoeMart! Your product will be delivered to you shortly!</p><br><br>
                        <p class="pepe1" align="center"> For any queries, please contact our customer care service through toll-free number :
                        <u>1-800-800-800</u> or write to us at <u>support@shoemart.com.</u></p><br><br>
                        <label style="margin-left:20em;"><a href="index.php" id="homebutton">Continue Shopping</a></label>
                    </div>
                    
                </td>
                <td height="350px" width=35% bgcolor="#47525C" valign="top" style="overflow:auto;border:groove;border-color:#202122;"> <br>
                      <div height="350px" class="productdetail" align="center" valign="top">Shipping Details:</div><hr>
                    <?php $name2 = $_POST['name1'];
                          $address2 = $_POST['address1'];
                          $phone2 = $_POST['number1'];
                          $product2 = $_POST['product1'];
                          if(($name2 & $address2 & $phone2 )!= null){ ?>
                              <ul style="float:left;color:white;"align="left">
                                  <li>Name:</li><br><br>
                                  <li>Address:</li><br><br>
                                  <li>Phone:</li><br><br>
                                  <li>Product:</li><br><br>
                        
                    </ul>
                    <ul style="float:left;">
                        <li><?php echo($name2); ?></li><br><br>
                        <li><?php echo($address2); ?></li><br><br>
                        <li><?php echo($phone2); ?></li><br><br>
                        <li><?php echo($product2); ?></li><br><br>
                    </ul>
                        <?php  }else {?> <p align='center' style="color:white;font-size:20px;"><br><br>Please fill all the fields of the form in the previous page!</p>
                     <?php }
                        ?> </div></td>
        </table>
    </body>
</html>
<?php
include("connectdb.php");
mysql_select_db("admin",$con);

$adquery="insert into ADMINTAB values('".$name2."','".$address2."','".$phone2."','".$product2."')";
mysql_query($adquery);
?>