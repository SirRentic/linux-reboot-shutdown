# linux-reboot-shutdown
A linux assignment

When testing my environment I used two Virtual Box Ubuntu 16.04 32-bit servers with LAMP and OpenSSH installed. There are 4 files needed index.php, reboot.php, shutdown.php, and servers.xml.

1) index.php and servers.xml should be place in the main server that controls the others, reboot.php and shutdown.php need to be placed on any of the other servers that we wish to control. Note: you could olace the reboot and shutdown files on the main server too if you want.

All the files should be placed in the /var/www/html directory:
   /var/www/html/index.php
   /var/www/html/reboot.php
   /var/www/html/shutdown.php
   /var/www/html/servers.xml

2) servers.xml contains the IP addressed of the servers that need to be controlled. It structue is:

	<servers>
		...
		<server>
			<ip>{IP address}</ip>
		<server>
		...
	<servers>

3) For each server in the servers.xml file the sudoers file needs to be updated to allow www-data to run the shutdown and reboot commands. This can be done by running the command visudo to open the file and adding the line:
      www-data ALL = NOPASSWD: /sbin/reboot, /sbin/shutdown
