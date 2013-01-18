<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
?>

<h1><?php echo $this->msg; ?></h1>


<?php
    foreach($this->folders as $f) {
        echo '<a href="' . JRoute::_('index.php?option=com_dehstatic&root='. $this->root .'&id='. $f ) .'">'. utf8_decode($f) .'</a><br/>';
    }
?>
