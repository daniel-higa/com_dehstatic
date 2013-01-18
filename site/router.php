<?php

defined('_JEXEC') or die;

jimport('joomla.application.categories');


function DEHStaticBuildRoute(&$query) {
}


function DEHStaticParseRoute($segments)
{
	$vars = array();

	//Get the active menu item.
	$app	= JFactory::getApplication();
	$menu	= $app->getMenu();
	$item	= $menu->getActive();
    $params = JComponentHelper::getParams('com_dehstatic');
    $advanced = $params->get('sef_advanced_link', 0);
	// Standard routing for articles.  If we don't pick up an Itemid then we get the view from the segments
	// the first segment is the view and the last segment is the id of the article or category.
    if (isset($segments[0])) {
        $vars['task'] = 'show_folder';
	    $vars['folder'] = $segments[0];
    }
    return $vars;
}
