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
    protected $folders;
    protected $root;
    
     /**
     * Get the message
     * @return string The message to be displayed to the user
     */
    public function getTitle() 
    {
        if (!isset($this->msg)) 
        {
            if (JRequest::getString('title')) {
                $this->msg = JRequest::getString('title');
            } else {
                $this->msg = JRequest::getString('root');
            }
        }
        return $this->msg;
    }
    
    function getFolders() {
        if (JRequest::getString('folder')) {
            $this->root = JRequest::getString('folder');
        } elseif (JRequest::getString('root')) {
            $this->root = JRequest::getString('root');
        }
        return getFolders($this->root);
    }
    
    function getRoot() {
        $this->root = JRequest::getString('folder');
        return $this->root;
    }
    
    function getTest() {
        return "test string";
    }
}
