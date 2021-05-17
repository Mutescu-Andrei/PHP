<?php

require_once 'init.php';
if(isset($_GET['id']))
{
$id=(int)$_GET['id'];


    $db->query("INSERT INTO likebut (user,imagine) 
            SELECT {$_SESSION['user_id']},{$id} 
            FROM imagini WHERE EXISTS (SELECT id FROM imagini WHERE id = {$id}) 
            AND NOT EXISTS( SELECT id FROM likebut WHERE user ={$_SESSION['user_id']} AND imagine={$id}) LIMIT 1 ");
  

}
header ('Location:zona.php');
?>