<?php
include 'db_config.php';

 ?>

<!DOCTYPE html>
<html>
    <head>
        <title>registration form</title>
    
    <link rel="stylesheet" href="../css/reg_page.css">
    
    </head>
<body>
   <div class="info">
    <a href="../index.html"><img src="../fblogo.gif"></a>

     <h2>Create free account</h2>
    
    </div>
    
      <div class="player">
		
         <form action="reg_page_insert_player.php" method="post">
            
            <div class="txtb">
				
                <input type="text" placeholder="Username*" name="username">
            </div>
            
            <div class="txtb">
                <input type="text" placeholder="Full name*" name="fullname">
            </div>
             
            <div class="txtb">
                <input type="text" placeholder="Email*" name="email">
            </div>
			
			<div class="txtb">
                <input type="text" placeholder="Date of Birth(ex:YY-MM-DD)" name="dob">
            </div>
			
			<div class="txtb">
                <input type="text" placeholder="Country" name="country">
            </div>

            <div class="txtb">
                <input type="password" placeholder="Password*" name="password">
            </div>

           <input type="submit" name="submit" value="Sign up" class="logbtn">
            <div style="margin-top: 30px;" >
                Already have an account? <a style="cursor: pointer; color: navy; background-color: silver;);" href="../login_page.html">Login</a>
            </div>
 
          </form> 
     
	</div>
        

</body>
</html>
