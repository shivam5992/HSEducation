<?PHP
  $image = @imagecreatetruecolor(120, 30) or die("Cannot Initialize new GD image stream");
  $background = imagecolorallocate($image, 0xFF, 0xFF, 0xFF);
  imagefill($image, 0, 0, $background);
  $linecolor = imagecolorallocate($image, 0xCC, 0xCC, 0xCC);
  $textcolor = imagecolorallocate($image, 0x33, 0x33, 0x33);
  imageline($image,0,0,120,0,$textcolor);
  imageline($image,0,29,120,29,$textcolor);
  imageline($image,0,0,0,29,$textcolor);
  imageline($image,119,0,119,29,$textcolor);
  for($i=0; $i < 6; $i++) {
    imagesetthickness($image, rand(1,3));
    imageline($image, 0, rand(1,29), 120, rand(1,29), $linecolor);
  }
  session_start();
  $digit = '';
  for($x = 15; $x <= 95; $x += 20) {
    $digit .= ($num = rand(0, 9));
    imagechar($image, rand(3, 5), $x, rand(2, 14), $num, $textcolor);
  }
  $_SESSION['vercode'] = $digit;
  header('Content-type: image/png');
  imagepng($image);
  imagedestroy($image);
?>