<?php
require_once 'ConnectionPDO.php';
       

$sql1="DROP PROCEDURE IF EXISTS deleteP";
$sql2="CREATE PROCEDURE deleteP(
    IN strID int(11)
)


BEGIN 
        DELETE FROM imagini
        WHERE id=strID;
        END;";

$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

$sql3="DROP TRIGGER IF EXISTS triggerDelete";
$sql4="CREATE TRIGGER triggerDelete AFTER DELETE ON imagini FOR EACH ROW
        BEGIN
        INSERT INTO imagini_updated(title,edtime,status)
        VALUES(OLD.title,NOW(),'DELETED');
        END;";

$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();
        

$sql="CALL deleteP('{$_GET['id']}')";
$q=$con->query($sql);

header('location:zona.php');
?>