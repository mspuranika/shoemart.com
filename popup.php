<head>
  <script>
    function myPopup(){ 
        window.open("http://www.facebook.com",  
                "status=1, 
                 height=300, 
                 width=300, 
                 resizable=0"
        );
    }
  </script>
</head>

<body>
  <input type="button" onclick="myPopup()" value="popup" />
</body>