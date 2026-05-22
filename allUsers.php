<?php
include 'header.php';
include 'config/db.php';

$stmt = $conn->prepare("
    SELECT ID, Name, Email, Description, Experience, Project, image_name, image_url
    FROM users
");

$stmt->execute();
$result = $stmt->get_result();
$users = $result->fetch_all(MYSQLI_ASSOC);
?>

<div class="container card col-md-8 mx-auto mt-3">
    <div class="card-header">
        <h3 class="text-center">All Users</h3>
    </div>

    <div class="card-body">
        <table class="table table-bordered">
            
            <thead>
                <tr>
                    <th>SL</th>
                    <th>Profile</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>

            <tbody>
                <?php foreach ($users as $key => $user): ?>
                    <tr>
                        <td><?php echo $key + 1; ?></td>

                        <td>
                            <img 
                                src="<?php echo $user['image_url']; ?>" 
                                width="50" 
                                height="50" 
                                style="border-radius:50%;"
                            >
                        </td>

                        <td><?php echo $user['Name']; ?></td>
                        <td><?php echo $user['Email']; ?></td>

                        <td>
                            <a href="#" class="btn btn-sm btn-success">View</a>
                            <a href="#" class="btn btn-sm btn-warning">Edit</a>
                            <a href="#" class="btn btn-sm btn-danger">Delete</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>

        </table>  
    </div>
</div>