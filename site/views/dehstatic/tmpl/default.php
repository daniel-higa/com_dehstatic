<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

if (JRequest::getCmd('root') and JRequest::getCmd('id')) {
    include('show_folder.php');
} else {
    include('root.php');
}

?>


