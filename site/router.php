<?php

defined('_JEXEC') or die;

jimport('joomla.application.categories');


function DEHStaticBuildRoute(&$query) {
	$segments	= array();

	// get a menu item based on Itemid or currently active
	$app		= JFactory::getApplication();
	$menu		= $app->getMenu();
	$params		= JComponentHelper::getParams('com_dehstatic');
	$advanced	= $params->get('sef_advanced_link', 0);
    
    if ($query['root']) {
       $segments[] = $query['root'];
       unset($query['root']);
    }
    
    if ($query['id']) {
       $segments[] = $query['id'];
       unset($query['id']);
    }
    return $segments;
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
	    $vars['root'] = $segments[0];
    }
    if (isset($segments[1])) {
        $vars['id'] = $segments[1];
    }
    
    return $vars;
}
