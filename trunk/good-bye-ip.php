<?php
/**
 * Plugin Name: Good Bye IP
 * Plugin URI: #
 * Description: Blocks access to possibly malicious IP addresses.
 * Author: Bimal Poudel
 * Version: 1.0.0
 * Author URI: http://bimal.org.np/
 */

class good_bye_ip
{
	public function block_malicious_ip()
	{
		$blacklist = array(
			#"::1",
			
			# From ithemes security ban list
			# @todo Make ban list editable
		);
		
		$ip = $this->get_remote_ip();
		if(in_array($ip, $blacklist))
		{
			exit;
		}
	}
	
	/**
	 * Try to get true IP address of a client.
	 */
	private function get_remote_ip()
	{
		$ip = $_SERVER["REMOTE_ADDR"];
		return $ip;
	}
}

$gbi = new good_bye_ip();
add_action("init", array($gbi, "block_malicious_ip"));
