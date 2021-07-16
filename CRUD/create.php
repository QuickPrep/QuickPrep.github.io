<?php
require 'db.php';
$message='';
if(isset($_POST['name']) && isset($_POST['usn']))
{
    $name=$_POST['name'];
    $usn=$_POST['usn'];
    $sql="INSERT INTO student (name,usn) VALUES (:name,:usn)";
    $stmt=$con->prepare($sql);
    if($stmt->execute([':name' => $name , ':usn' => $usn]))
    {
        $message="Data Inserted Successfully";
    }
}

?>

<?php require 'template.php' ?>
<div class="container">
    <div class="card mt-5">
        <div class="card-header">
            <h2>Create a Record</h2>
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
                    <input type="text" id="name" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="usn">USN</label>
                    <input type="text" id="usn" name="usn" class="form-control">
                </div>
                <button type="submit" class="btn btn-warning mt-3">Submit</button>
            </form>
        </div>
    </div>
</div>