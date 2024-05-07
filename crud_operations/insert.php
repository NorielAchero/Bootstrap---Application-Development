<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Employee</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            background-color: #343a40; /* Dark background color */
            color: #ffffff; /* Light text color */
        }
        .custom-container {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .custom-form {
            width: 400px;
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
    <div class="custom-container">
        <form class="custom-form" action="controller.php" method="POST" enctype="multipart/form-data">
            <h1 class="text-center mb-4">Employee System</h1>
            <div class="form-group">
                <label>Firstname:</label>
                <input type="text" name="txtEmployeeFirstname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Lastname:</label>
                <input type="text" name="txtEmployeeLastname" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Age:</label>
                <input type="number" name="txtEmployeeAge" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Address:</label>
                <textarea name="txtEmployeeAddress" class="form-control" rows="3" required></textarea>
            </div>
            <div class="form-group">
                <label>Position:</label>
                <input type="text" name="txtEmployeePosition" class="form-control" required>
            </div>
            <div class="form-group">
                <label>Image:</label>
                <input type="file" name="txtEmployeeImage" class="form-control-file" required>
            </div>
            <button type="submit" name="save_employee" class="btn btn-primary btn-block">Save Employee</button>
        </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
