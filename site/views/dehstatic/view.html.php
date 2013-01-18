<?php
// No direct access to this file
defined('_JEXEC') or die('Restricted access');
 
// import Joomla view library
jimport('joomla.application.component.view');
 
/**
 * HTML View class for the HelloWorld Component
 */
class DEHStaticViewDEHStatic extends JView
{
    // Overwriting JView display method
    function display($tpl = null) {
        //$model = &$this->getModel();
        //$this->msg =  $model->getMsg();
        $this->msg = $this->get('Title');
        $this->root = JRequest::getString('folder');
        $this->folders = $this->get('Folders');
        // Check for errors.
        
        if (JRequest::getCmd('root')) {
            $this->root = addslashes(JRequest::getCmd('root'));
        }
        if (JRequest::getCmd('id')) {
            $this->id = addslashes(JRequest::getString('id'));
        }
        
        if (count($errors = $this->get('Errors'))) 
        {
            JLog::add(implode('<br />', $errors), JLog::WARNING, 'jerror');
            return false;
        }
        // Display the view
        parent::display($tpl);
    }
}
