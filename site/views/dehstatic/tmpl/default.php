<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');

if ((JRequest::getCmd('task')) == null)
    include('root.php');

if (JRequest::getCmd('task') == 'show_folder')
    include('show_folder.php');

?>


