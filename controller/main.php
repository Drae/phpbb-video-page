<?php
/**
 *
 * This file is part of the phpBB Forum Software package.
 *
 * For full copyright and license information, please see
 * the docs/CREDITS.txt file.
 *
 */

namespace numeric\video\controller;

class main
{
	/* @var \phpbb\controller\helper */
	protected $helper;

	/* @var \phpbb\template\template */
	protected $template;

	/* @var \phpbb\user */
	protected $user;

	/**
	* Constructor
	*
	* @param \phpbb\config\config		$config
	* @param \phpbb\controller\helper	$helper
	* @param \phpbb\template\template	$template
	* @param \phpbb\user				$user
	*/
	public function __construct(\phpbb\controller\helper $helper, \phpbb\template\template $template, \phpbb\user $user)
	{
		$this->helper = $helper;
		$this->template = $template;
		$this->user = $user;

		$this->user->add_lang_ext('numeric/video', 'video');
	}

	public function main()
	{
		$this->template->assign_vars(array(
			'SCRIPT_NAME'	=> 'video',
			'S_MENU_PAGE'	=> $this->user->lang['VIDEO'],
		));

		$this->template->assign_block_vars('navlinks', array(
			'FORUM_NAME'	=> $this->user->lang['VIDEO'],
		));

		return $this->helper->render('video.html', $this->user->lang['VIDEO']);
	}
}
