<?php

require 'dbcon.php';

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student list</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4>Dental Student Details</h4>
                </div>
                <div class="card-body">

                <table class="table table-bordered table-striped">
                    <thead>
                        <tr>
                            <th>Student Number</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Hospital</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            $query = "SELECT * FROM dental_student_details";
                            $query_run = mysqli_query($con, $query);
                            
                            if(mysqli_num_rows($query_run) > 0) {
                                foreach($query_run as $student) {
                                    // echo $student['student_lastname'];
                                    ?>
                                    <tr>
                                        <td><?= $student['student_number']; ?></td>
                                        <td><?= $student['firstname']; ?></td>
                                        <td><?= $student['lastname']; ?></td>
                                        <td><?= $student['hospital_municipality']; ?></td>
                                        <td>
                                            <a href="dentalstudentview.php?id=<?= $student['student_number']; ?>" class="btn btn-info btn-sm">View</a>
                                            <a href="#?id=<?= $student['student_number']; ?>" class="btn btn-success btn-sm">Edit</a>
                                            <form action="records.php" method="POST" class="d-inline">
                                                <button type="submit" name="delete" value="<?=$student['student_number'];?>" class="btn btn-danger btn-sm">Delete</button>
                                            </form>
                                        </td>
                                    </tr>

                                    <?php
                                }
                            } else {
                                echo "No Record Found";
                            }
                        ?>
                    </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
</body>
</html>