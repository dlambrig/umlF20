<?php 
$cmd = 'sudo docker exec -it my_postgres psql -U postgres postgres  -c "select * from t_random where md5='."'$argv[1]'".'"';
$output = shell_exec($cmd);
printf ("%s\n",$output);
?>

