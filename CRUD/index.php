<?php 
require 'db.php';
$sql='SELECT * FROM student';
$stmt=$con->prepare($sql);
$stmt->execute();
$students=$stmt->fetchAll(PDO::FETCH_OBJ);
?>


<?php require 'template.php' ?>
<div class="container">
    <div class="card mt-5">
       <div class="card-header">
           <h2>All Records</h2>
       </div>
       <div class="card-body">
            <table class="table">
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>USN</th>
                    <th>Action</th>
                </tr>
                <?php foreach($students as $s): ?>
                <tr>
                    <td><?= $s->id; ?></td>
                    <td><?= $s->name; ?></td>
                    <td><?= $s->usn; ?></td>
                    <td>
                        <a href="edit.php?id=<?= $s->id ?>"  class="btn btn-warning">Edit</a>
                        <a onclick="confirm('Are you sure you want to delete this record?')" href="delete.php?id=<?= $s->id ?>" class="btn btn-danger">Delete</a>
                    </td>
                </tr>

                <?php endforeach;?>
            </table>

       </div>
    </div>
</div>