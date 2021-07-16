<?php 
require 'db.php';
$id=$_GET['id'];
$sql="DELETE FROM student WHERE id=:id";
$stmt=$con->prepare($sql);
if($stmt->execute([':id' =>$id]))
{
    header('Location:index.php');
}
?>
