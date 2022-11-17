<?php

chdir('/var/www/test-pull');
$output = shell_exec('./git-pull.sh');
echo $output;
echo 'Deployment done';

?> 
