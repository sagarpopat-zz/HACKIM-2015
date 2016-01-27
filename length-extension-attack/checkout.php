<?php   

echo "<h1> Checkout </h1>";

$checksum = $_POST['checksum'];
$secret = "H@cKIm_2@15*nu11(0N";

$newmsg = urldecode($_POST['msg']);


if($checksum === hash("sha256", $secret . $newmsg))
{
	$a = explode("|" , $newmsg);
        $price = end($a);
        echo $msg;
      
        if(is_numeric($price))
        {
            if($price == 0)
            {
                echo "Congratualtion You bought Nullcon Pass in ZERO rupee. See you at Nullcon!";
                echo "Flag is fl@g_*2o15}"
	
            }
            else
            {
                echo "You must buy Nullcon Pass in ZERO rupee";
                echo '<a href=nullcon.html>Go back</a>';
                
                
            }
                
        }
        else 
        {
     
            echo "Checksum Matched but Something went wrong";
            echo '<a href=nullcon.html>Go back</a>';
            
            echo "price". $price;
        }
        
}
else
{
	echo "Fail! Checksum doen't match.\n";
       
        
        
        
}
?>  
