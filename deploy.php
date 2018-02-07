<?php 
	exec('cd /var/www/html/sfnmtest/');
	exec('sudo git pull', $op,$rv);
    print_r($op);
    print_r($rv);
 ?>