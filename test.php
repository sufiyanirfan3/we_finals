<html>
   
   <head>
   </head>
   
   <body>
      <?php
         
         
         if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
               echo "Name is required";
            }else {
               $name = trim($_POST["name"]);
               $name = stripslashes($_POST["name"]);
               $name = htmlspecialchars($_POST["name"]);
               echo $name;
            }
            
            if (empty($_POST["email"])) {
               echo "Email is required";
            }else {
               $email = trim($_POST["email"]);
               $email = stripslashes($_POST["email"]);
               $email = htmlspecialchars($_POST["email"]);
               if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                  echo"Invalid email format"; 
               }
               echo $email;
            }
           
         }
        
      ?>
     
     
      <form method = "post" action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
         Name: <input type="text" name="name">
         E-mail: <input type="text" name="email">   
			
      </form>

   </body>
</html>
