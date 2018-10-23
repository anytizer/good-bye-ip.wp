# good-bye-ip.wp
Blocks access to possibly malicious IP addresses.

This is a proof of concept work to disallow certain IP addresses from accessing the WordPress blog.
You are responsible to maintain your own blacklist database.
For the same reason, this plugin will not be made available publicly in the WordPress plugins directory.

How to install?
* Create a folder called good-bye-ip and copy trunk/good-bye-ip.php file inside it.
* Add blacklisted IP addresses as string arrays.
* Zip the **folder**: to obtain good-bye-ip.zip.

Your plugin is ready. Install/upload it to your WordPress.

## Caution
Do not enter your current IP address in the list.
Otherwise, you will have to delete the plugin manually using FTP.
