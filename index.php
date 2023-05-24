<?php


// Grades and classes options
$grades = ['1', '2', '3', '4', '5'];
$classes = ['A', 'B', 'C', 'D'];


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>School Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

</head>

<body>
    <div class="container">
        <h1>School Management</h1>

        <h2>Add Student</h2>

        <form method="POST" action="index.php">
            <div class="mb-3">
                <label for="name" class="form-label">Name:</label>
                <input type="text" class="form-control" id="name" name="name" placeholder="Enter student name" required>
            </div>
            <div class="mb-3">
                <label for="grade" class="form-label">Grade:</label>
                <select class="form-select" id="grade" name="grade" required>
                    <option selected disabled>Select grade</option>
                    <?php foreach ($grades as $grade) : ?>
                        <option value="<?php echo $grade; ?>"><?php echo $grade; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="class" class="form-label">Class:</label>
                <select class="form-select" id="class" name="class" required>
                    <option selected disabled>Select class</option>
                    <?php foreach ($classes as $class) : ?>
                        <option value="<?php echo $class; ?>"><?php echo $class; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="mb-3">
                <label for="registrationNumber" class="form-label">Registration Number:</label>
                <input type="text" class="form-control" id="registrationNumber" name="registrationNumber" placeholder="Enter registration number" required>
            </div>
            <button type="submit" class="btn btn-success">Add Student</button>
        </form>





    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>

</html>