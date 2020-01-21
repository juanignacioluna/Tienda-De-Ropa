<?php
 session_start();
 $username = $_SESSION['username']; 
 unset($_SESSION['username']); 
 session_destroy();  
?>
<html>
  <head>   
    <title>Logout</title>
   </head>
<body>

        <script>

            window.location='micuenta.php';

        </script>
    
</body>
</html>