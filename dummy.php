


if(($_POST)){if($_POST['name']&$_POST['address']&$_POST['number']){




if(!empty($_POST)){if($_POST['name']|$_POST['address']|$_POST['number']){
 $name=$_POST['name'];
 $address=$_POST['address'];
 $phone=$_POST['number']; 
 
 
 
 <img src="../shoemart.com/images/slideshow/image1.jpg" width=100% height=375px name="slide"/>
                    <script type="text/javascript">
                        var step = 1;
                        function slideit()
                        {
                            document.images.slide.src = eval("image" + step + ".src");
                            if (step < 5)
                                step++;
                            else
                                step = 1;
                            setTimeout("slideit()", 3000);
                        }
                        slideit();
                    </script>
                    
                    
                    
                    
                    <div height="100%" class="productdetail" align="center" valign="top">Shipping Details:</div><hr> <?php
                
                $name = $_POST['name'];
                 $address = $_POST['address'];
                $phone = $_POST['number'];
                 if(($name&$address&$phone)!=null)  { ?>
                
                    <ul style="float:left;color:white;"align="left">
                        <li>Name:</li><br><br>
                        <li>Address:</li><br><br>
                        <li>Phone:</li><br><br>
                        
                    </ul>
                    <ul style="float:left;">
                        <li><?php echo($name2); ?></li><br><br>
                        <li><?php echo($address2); ?></li><br><br>
                        <li><?php echo($phone2); ?></li><br><br>
                        
                    </ul>
                  
                 <?php } else {?> <p align='center' style="color:white;font-size:20px;">Please fill all the fields of the form in the previous page!</p>
                     <?php }
                               
                ?> </td>          