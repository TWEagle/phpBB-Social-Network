<?php
/**
*
* @package phpBB Social Network
* @version 0.6.3
* @copyright (c) 2010-2012 Kamahl & Culprit http://phpbbsocialnetwork.com
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
*
*/

class mcp_socialnet_info
{
	function module()
	{
		global $config;

		if (!isset($config['version_socialNet']))
		{
			return array();
		}

		return array(
			'filename'	 => 'mcp_socialnet',
			'title'		 => 'MCP_SOCIALNET',
			'version'	 => $config['version_socialNet'],
			'modes'		 => array(
				'module_reportuser'					 => array('title' => 'MCP_SN_REPORTUSER', 'auth' => 'acl_m_sn_close_reports', 'cat' => array('MCP_SOCIALNET')),
			),
		);
	}

	function install()
	{
	}

	function uninstall()
	{
	}
}
?>