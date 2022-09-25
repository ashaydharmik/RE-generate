<?php 
if(isset($_POST['submit']))
{
header('Content-type: image/jpeg');
$font=realpath('arial.ttf');
$image=imagecreatefromjpeg("cert.jpg");
$color=imagecolorallocate($image, 19, 21, 22);
imagejpeg($image,"certificate/shah.jpg");
$name = $_POST['uname'];
$pname = $_POST['pname'];
$sname = $_POST['sname'];
imagettftext($image, 48, 0, 760, 1382, $color,$font, $name);
imagettftext($image, 48, 0, 620, 862, $color,$font, $pname);
imagettftext($image, 32, 0, 520, 1042, $color,$font, $sname);
$name="YOU";
$pname="YOU";
Report Generator
 
 
Department of CSE,JIT 2021-2022 3
$sname="YOU";
//imagejpeg($image,"cert/$name.jpg");
imagejpeg($image);
imagedestroy($image);
echo "Certificate Created";
}
?>
<form method="post">
 <input type="text" name="uname" placeholder="Enter Your 
Name"/><br><br><br>
 <input type="text" name="pname" placeholder="Enter Your Report 
Name"/><br><br><br>
 
 <input type="text" name="sname" placeholder="Enter Your subject 
Name"/><br><br><br>
 <input type="submit" name="submit" value="GENERATE">
</form>
