<?php
require_once 'ConnectionPDO.php';
       

$sql1="DROP PROCEDURE IF EXISTS upload";
$sql2="CREATE PROCEDURE upload(
    IN strTitlu varchar(100),
    IN strImagine varchar(100)
)


BEGIN 
        INSERT INTO imagini
        (title,image)
        VALUES (strTitlu,strImagine);
        END;";

$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();

$sql3="DROP TRIGGER IF EXISTS triggerUpload";
$sql4="CREATE TRIGGER triggerUpload BEFORE INSERT ON imagini FOR EACH ROW
        BEGIN
        INSERT INTO imagini_updated(title,edtime,status)
        VALUES(NEW.title,NOW(),'INSERTED');
        END;";

$stmt3=$con->prepare($sql3);
$stmt4=$con->prepare($sql4);
$stmt3->execute();
$stmt4->execute();
        
 
$msg="";
if(isset($_POST['upload'])){
    $target="./imagini/".md5(uniqid(time())).basename($_FILES['image']['name']);
    $text=$_POST['text'];
    $sql="CALL upload('$text','$target')";
    $q=$con->query($sql);
    if(move_uploaded_file($_FILES['image']['tmp_name'],$target))
    {        header('location:Zona.php');
    }else{
        $msg="Vai! Vai! Vai!!!";
    }
        
}