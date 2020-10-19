<?php 
$cmd = 'sudo docker exec -it my_postgres psql -U postgres postgres  -c "update employees set name='."'$argv[1]'".' where id='."'$argv[2]'".'"';
$output = shell_exec($cmd);
printf ("%s\n",$output);
?>

