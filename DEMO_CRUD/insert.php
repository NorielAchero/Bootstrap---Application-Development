<!DOCTYPE html>
<html>
    <head>
        <title>Student Profile</title>
    </head>
    
    <body>
        <center>
            <h1>Add New Student</h1>
            
        <form action="controller.php" method="POST" enctype="multipart/form-data">
            <table>
                    <tr>
                        <th>Student Name</th>
                        <td><input type="text" name="txtname"></th>
                    </tr>
                    
                    <tr>
                        <th>Contact Number</th>
                        <td><input type="text" name="txtcontact"></th>
                    </tr>
                    
                    <tr>
                        <th>Email</th>
                        <td><input type="text" name="txtemail"></th>
                    </tr>
                    
                    <tr>
                        <th>Image</th>
                        <td><input type="file" name="txtpic"></td>
                    </tr>
                            
            </table>
            <button type="submit" name="save_record">Save Record</button>
        </form>
        </center>
</body>
</html>