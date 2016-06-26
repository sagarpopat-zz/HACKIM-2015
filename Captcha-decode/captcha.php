<?php

session_start();

if(!isset($_SESSION['time']))
{

    $t = time();    //timestamp
    $_SESSION['otime'] = $t;
    $final = $t + 120;
    $_SESSION['time'] = $final; 
    create_image();
    
}

else
{
    
    if(time() > $_SESSION['time'])
    {

    
        session_destroy();
        
    }
    else
    {
        create_image();

    }   
}


function create_image()
{

    header("Content-Type: image/png");
    $image = imagecreatetruecolor(200, 50) or die("Cannot Initialize new GD image stream");

    $background_color = imagecolorallocate($image, 0, 0, 0);
    $text_color = imagecolorallocate($image, 122, 111, 255);
    $line_color = imagecolorallocate($image, 64, 64, 64);
    $pixel_color = imagecolorallocate($image, 0, 0, 255);

    imagefilledrectangle($image, 0, 0, 200, 50, $background_color);

    for ($i = 0; $i < 3; $i++) {
        imageline($image, 0, rand(0 ,255) % 50, 200, rand(0, 255) % 50, $line_color);
    }

    for ($i = 0; $i < 1000; $i++) {
        imagesetpixel($image, rand() % 200, rand() % 50, $pixel_color);
    }


    $letters = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $len = strlen($letters);
    $letter = $letters[rand(0, $len - 1)];
   
   # $text_color = imagecolorallocate($image, 0, 0, 0);
    $word = "";
    for ($i = 0; $i < 6; $i++) {
        $letter = $letters[rand(0, $len - 1)];
        imagestring($image, 7, 5 + ($i * 30), 20, $letter, $text_color);
        $word .= $letter;
    }
    $_SESSION['solution'] = $word;
    imagepng($image);
    imagedestroy($image);

}


?>
