<?php
/**
 * DO NOT CHANGE
**/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || is_array($lang) === false)
{
	$lang = [];
}

$lang = array_merge($lang, [
	'VIDEO'	=> 'Video',
]);
