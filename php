select * from test_db order by name
<?php

$statement = "Selct * from 'test_db' Where 'name'
= ? && 'password' = ?");
$statement->bind_param('ss', $username, $password);



 ?>
