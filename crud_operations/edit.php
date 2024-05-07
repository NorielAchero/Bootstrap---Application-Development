<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Light text color */
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: auto;
            margin-top: 100px;
            margin-bottom: 100px;
        }
        .custom-form {
            width: 80%;
            padding: 20px;
            background-color: #454d55; /* Darker background color */
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        .custom-form label {
            color: #ffffff; /* Light text color */
        }
    </style>
</head>
<body>
    <div class="container">
        <form class="custom-form" action="controller.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center mb-4">Edit Employee</h1>
            <?php 
                getEmployeeById($_GET['id']);
            ?>
            <button type="submit" class="btn btn-primary btn-block" name="update_employee">Update Employee</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
<?php
    function getEmployeeById($recno) {
        include("includes/sqlconnection.php");
        $sql = "SELECT * FROM employeestblcrud WHERE id='$recno'";
        $result = $conn->query($sql);

        if($result->num_rows > 0){
            
            while($row = $result->fetch_assoc()){
                echo"
                    <input type='hidden' name ='txtid' value ='".$row['id']."'>
                    <div class='form-group'>
                        <label for='firstname'>Firstname:</label>
                        <input type='text' class='form-control' name='txtEmployeeFirstname' value='".$row['employeeFirstname']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='lastname'>Lastname:</label>
                        <input type='text' class='form-control' name='txtEmployeeLastname' value='".$row['employeeLastname']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='age'>Age:</label>
                        <input type='number' class='form-control' name='txtEmployeeAge' value='".$row['employeeAge']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='address'>Address:</label>
                        <textarea class='form-control' name='txtEmployeeAddress' rows='3' required>".$row['employeeAddress']."</textarea>
                    </div>
                    <div class='form-group'>
                        <label for='position'>Position:</label>
                        <input type='text' class='form-control' name='txtEmployeePosition' value='".$row['employeePosition']."' required>
                    </div>
                    <div class='form-group'>
                        <label for='image'>Image:</label>
                        <input type='file' name='txtEmployeeImage'>
                        <br>
                        <img src='uploads/".$row['employeeImage']."' width='300'>
                        <input type='hidden' name='txtold_employeeImage' value ='".$row['employeeImage']."'>
                    </div>
                ";
            }

        }
        else{
            echo "no record found";
        }

        $conn->close();
    }
?>
