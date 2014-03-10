<?php
include("include/header.php");
?>

<html>
    <head>
        <style type="text/css">

            input{color:black;-webkit-border-radius: 10px;-moz-border-radius:10px;height:30px;font-size:18px;}
            textarea{color:black;-webkit-border-radius: 10px;-moz-border-radius:10px;height:80px;font-size:18px;}
            label.labels{margin-left:5em;font-size:20px;color:white;}
            label label{margin-left:10em;}
            #homebutton {
                //width:100px; height:60px;
                background-color:grey;
                //-moz-border-radius: 25px;
                //-webkit-border-radius: 25px;
                //border: 5px solid #009900;
                padding: 15px;
                color:white;
            }
            #homebutton1 {
                width:200px; height:50px;
                background-color:grey;
                //-moz-border-radius: 25px;
                //-webkit-border-radius: 25px;
                //border: 5px solid #009900;
                padding: 9px;
                color:white;
            }
            a{text-decoration:none;color:black;-webkit-border-radius: 10px;-moz-border-radius:10px;height:30px;font-size:18px;}
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
            
            function checkTerms() {
     if(document.buyform.checkbox.checked)
     {
         document.buyform.homebutton.disabled=false;
     }
     else
     {
         document.buyform.homebutton.disabled=true;
     }
     
    }

       </script>                                                       

    </head>
     <?php   $_SERVER['REQUEST_URI_PATH'] = parse_url($_SERVER['HTTP_REFERER'], PHP_URL_PATH);
                            $segments = explode('/', $_SERVER['REQUEST_URI_PATH']); $final=  explode('.php', $segments[4]);
                                  $fordata=$final[0];
                          ?>
    <body>
        <br>
        <table style="height:100%; width:100%;">
            <tr>
                <td>
                    <div style="overflow:auto;width:98%;height:400px;background-color:black;">
                        <h2 style="color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;" align="center"><u>Fill in your details</u></h2>
                        <form action="alreadybought.php" method="post" name="buyform" style="height:100%;width:100%;"><br>
                            <label class="labels"> Full Name:<br/><label><input type="text" size="50" name="name1"></label></label><br><br>
                            <label class="labels">Address:<br/><label><textarea height="40px" cols="39" name="address1" placeholder="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;Address to which the product to be &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; delivered"></textarea></label></label><br><br>
                                                                                                          

                         <label class="labels">Phone No:<br/><label><input type="text" size="30" name="number1"</label></label><br><br>    
                          <label class="labels">Product:<br/><label><input type="text" size="30" name="product1" value="<?php echo($final[0]); ?>"</label></label><br><br>
                          <label class="labels""><input type="checkbox" name="checkbox"/>
                            <label style="margin-left:15px;color:white;font-size:15px;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;">
                                I agree to the Terms and Conditions of shoemart.com and agree to buy this product through 
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                &nbsp;Cash On Delivery system.
                            </label></label><br><br><br>
                            
                            <label class="labels"> <input type="submit" id="homebutton1" name="homebutton" value="Buy this Product!" onclick="checkTerms()">
                               <label><a href="index.php" id="homebutton">No, Go back to Home</a></label></label>
                        </form>
                    </div>
                </td>
                <td align= "center" height=350px width=40% style="background-color: black;">
                    <div style="overflow:auto;width:98%;height:400px;background-color:black;">
                     <h2 style="color:white;font-family:'WOL_Reg','Segoe UI',Tahoma,Helvetica,sans-serif;" align="center">
                         <u>The product you chose:</u></h2>
                   
                    <img src="images/<?php echo($segments[3])?>/<?php echo($final[0])?>.jpg"height="300px" width="300px">
                  
                    </div>
                </td>
            </tr>
        </table>
    </body>
</html>
