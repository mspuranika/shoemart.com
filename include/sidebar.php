<html>
<head>
<title>Canvas shoes</title>
<style type="text/css">
*.can {
	height:450px;
	width:100%;
	background-color:#778899 ;
	left:0px;
	position:relative;
}
td.higt {
	background-color:#47525C ;
         border:groove;border-color:#202122;
}
a {
	color:inherit;
	text-decoration:none;
	font-family:'WOL_Reg', 'Segoe UI', Tahoma, Helvetica, sans-serif;
}
li {
	color:white;
	font-size:17px;
	list-style-type:none;
	font-family:'WOL_Reg', 'Segoe UI', Tahoma, Helvetica, sans-serif;
}
body {
	width:100%;
}
*.division {
	float:left;
	left:0px;
	width:21%;
	height:410px;
}
*.submitdes {
	-webkit-border-radius: 10px;
	-moz-border-radius: 10px;
}
</style>
</head>
<body>
<script type="text/javascript">
        function submitforms(){
            document.getElementById('gender').submit();
            document.getElementById('price').submit();
            document.getElementById('discounts').submit();
        }
        
 </script>
<div class="division">
  <table cellspacing="20" class="can" cellpadding="0">
    <tr>
      <td width="20%" class="higt" valign="top"><ul>
          <li>Do specific search here!</li>
          <hr>
          <li>Gender</li>
          <br>
          <form action="" name="gender" id="gender" method="post">
            <li style="font-family:times-new-roman;font-size:16px;">
              <input checked type="radio"  value="all" name="gender"/>
              &nbsp;&nbsp;All</li>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="radio" value="male" name="gender"/>
              &nbsp;&nbsp;Male</li>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="radio" name="gender" value="female"/>
              &nbsp;&nbsp;Female</li>
            <hr>
            <li>Price Range</li>
            <br>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input checked type="radio"  value="all" name="price"/>
              &nbsp;&nbsp;All</li>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="radio" value="0-1000" name="price">
              &nbsp;0 - 1000</li>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="radio" value="1000-2000" name="price">
              &nbsp;1000 - 2000</li>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="radio" value="2000-9999999" name="price">
              &nbsp; >2000</li>
            <hr>
            <li>Discounts</li>
            <br>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input type="checkbox" value="discount" name="discounts">
              &nbsp; Discounted Products</li>
            <hr>
            <li style="font-family:times-new-roman;font-size:16px;">
              <input  class='submitdes' type='submit' id='gendersubmit'  value='refresh list'>
            </li>
          </form>
        </ul></td>
    </tr>
  </table>
</div>
</body>
</html>