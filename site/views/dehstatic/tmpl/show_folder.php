<?php
defined('_JEXEC') or die('Restricted access');
if (!defined('FACEBOOK_APP_ID')) define('FACEBOOK_APP_ID', '401244233301710');
$document =& JFactory::getDocument();
?>

<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?php echo FACEBOOK_APP_ID; ?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<div style="margin-right: 30px; margin-top: 20px; margin-bottom: 20px;" >
<?php
// No direct access to this file

$path = 'static/' . $this->root . '/' . $this->id . '/';
$file =  $path .'1.txt';
$images = $path .'images.txt';


if (file_exists( $file ) and file_exists($images)) {
    echo '<h1>' . utf8_decode($this->id) . '</h1>';
    $fimage = fopen($images, 'r');
    $image =  fgets($fimage);
    echo '<img src="' . $path . $image . '" alt="'. $this->id .'" style="float: left; margin-right: 10px;"/>';
    echo '<p style="text-align:justify; min-width: 50%;">' . file_get_contents($file) . '</p>';
}


$document->addCustomTag('<meta property="fb:app_id" content="'. FACEBOOK_APP_ID .'"/>');

?>
<div style="float: left;">
    <div class="fb-comments" data-href="<?php echo JURI::current(); ?>" data-width="420" data-num-posts="10"></div>
</div>
</div>
