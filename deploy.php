<?php 
	exec('sudo git pull origin master', $op,$rv);
    print_r($op);
    print_r($rv);
 ?>