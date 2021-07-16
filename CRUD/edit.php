<?php require 'db.php';
$id=$_GET['id'];
$sql='SELECT * FROM student WHERE id=:id';
$stmt=$con->prepare($sql);
$stmt->execute([':id' => $id]);
$student=$stmt->fetch(PDO::FETCH_OBJ);
if(isset($_POST['name']) && isset($_POST['usn']))
{
    $name=$_POST['name'];
    $usn=$_POST['usn'];
    $sql="UPDATE student SET name=:name, usn=:usn WHERE id=:id";
    $stmt=$con->prepare($sql);
    if($stmt->execute([':name' =>$name , ':usn' => $usn, ':id'=>$id]))
    {
            header('Location: index.php');
    }
   
}

?>

<?php require 'template.php' ?>

<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Update a Record</h2>
        </div>
        <div class="card-body">

            <?php if(!empty($message)): ?>
                <div class="alert alert-success">
                    <?= $message; ?>
                </div>
            <?php endif; ?>
            
            <form method="post">
                <div class="form-group">
                    <label for="name">Name</label>
                    <input value="<?= $student->name ?>" type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="usn">USN</label>
                    <input value="<?= $student->usn ?>" type="text" id="usn" name="usn" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>