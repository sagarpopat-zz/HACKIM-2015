<!DOCTYPE html>

<?php 

session_start();

if(!isset($_SESSION['result']))
{
    
    $_SESSION['result'] = 0;
}
?>
<html>
    <head>
        <script>
           function error()
            {

               alert("Session Expired");
               location.reload(); 
           }
         </script>
        <title>Captcha challenge</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
    <center><div>Break captcha for 99 times in 120 Seconds and get the flag: </div>
    <form action="verify.php" method="post"> 
            <img src="imagedemo.php" onerror=javascript:error();><br>
            Enter Code:<input type="text" name="solution" /> 
            <input type="submit" name="Submit" value="Submit" /> <br><br>

            <p>Note: Your session will be expired in 120 Seconds. </p> <br>
            
           <?php
           
           echo 'Score :'.$_SESSION['result'];
           
           if($_SESSION['result'] > 99)
           {  
               echo "Flag is H@CKIM_C@pTcha!09022015";
           }
           ?> 
</form>

    </center>
    </body>
</html>
