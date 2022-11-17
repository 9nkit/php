<?php

$old_path = getcwd();
chdir('/var/www/test-pull');
//make sure to make the shell file executeable first before running the shell_exec function
$output = shell_exec('./git-pull.sh');
chdir($old_path);

echo $output;

?> 
