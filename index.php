<?php
include("include/header.php");


?>

<html>
    <head>
        <style type="text/css">
            table.style1{background-color:#778899 ;}
            td.bord{border:groove;border-color:white;}
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




    </head>
    <body>


        <table width=100% class="style1" cellspacing=20px cellpadding="0">
            <tr>
                <td width=43% bgcolor="#47525C" style="border:groove;border-color: #202122;">
                    <table style="margin-left:20px;" cellspacing=10px>
                        <tr><td><a href="categories/canvas/canvas.php"><img src="../shoemart.com/images/slideshow/image6.jpg" height=150px width=150px/></a></td>
                            <td><a href="categories/sports/sports.php"><img src="../shoemart.com/images/slideshow/image7.jpg"height=150px width=150px/></a></td>
                            <td><a href="categories/sandals/sandals.php"><img src="../shoemart.com/images/slideshow/image8.jpg" height=150px width=150px/></a></td></tr>
                        <tr><td><a href="categories/loafers/loafers.php"><img src="../shoemart.com/images/slideshow/image9.jpg"height=150px width=150px/></a></td>
                            <td><a href="categories/office/office.php"><img src="../shoemart.com/images/slideshow/image10.jpg" height=150px width=150px/></a></td>
                            <td><a href="categories/boots/boots.php"><img src="../shoemart.com/images/slideshow/image11.jpg"height=150px width=150px/></a></td></tr>
                    </table>
                   
                </td>

                <td height=350px width=57%><img src="../shoemart.com/images/slideshow/image1.jpg" width=100% height=375px name="slide"/></td>
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

        </td>
      

    </tr>
</table>
</body>
</html>