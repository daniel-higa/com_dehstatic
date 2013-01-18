<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla modelitem library
jimport('joomla.application.component.modelitem');
require_once JPATH_COMPONENT.'/helper.php'; 
/**
 * HelloWorld Model
 */
class DEHStaticModelDEHStatic extends JModelItem
{
    /**
     * @var string msg
     */
    protected $msg;
     /**
     * Get the message
     * @return string The message to be displayed to the user
     */
    public function getTitle() 
    {
        if (!isset($this->msg)) 
        {
            $this->msg = JRequest::getString('title');
        }
        return $this->msg;
    }
    
    function getFolders() {
        return getFolders(JRequest::getString('folder'));
    }
}
