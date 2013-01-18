<div style="margin-right: 30px; margin-top: 20px; margin-bottom: 20px;" >
<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

$path = 'static/' . $this->root . '/' . $this->id . '/';
$file =  $path .'1.txt';
$images = $path .'images.txt';


if (file_exists( $file ) and file_exists($images)) {
    echo "<h1>$this->id</h1>";
    $fimage = fopen($images, 'r');
    $image =  fgets($fimage);
    echo '<img src="' . $path . $image . '" alt="'. $this->id .'" style="float: left; margin-right: 10px;"/>';
    echo '<p style="text-align:justify; min-width: 50%;">' . file_get_contents($file) . '</p><br/>';
}

?>
</div>
