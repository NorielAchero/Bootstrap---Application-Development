<?php
	session_start();
	include("includes/sqlconnection.php");

	if(isset($_POST['save_employee'])){
		
		$employeeFirstname = $_POST['txtEmployeeFirstname'];
		$employeeLastname = $_POST['txtEmployeeLastname'];
		$employeeAge = $_POST['txtEmployeeAge'];
		$employeeAddress = $_POST['txtEmployeeAddress'];
		$employeePosition = $_POST['txtEmployeePosition'];
		$employeeImage = $_FILES['txtEmployeeImage']['name'];
		
		$sql ="INSERT INTO employeestblcrud(employeeFirstname, employeeLastname, employeeAge, employeeAddress, employeePosition, employeeImage) VALUES ('$employeeFirstname', '$employeeLastname', '$employeeAge', '$employeeAddress', '$employeePosition', '$employeeImage')";
		
		if($conn->query($sql) === TRUE){
			
			move_uploaded_file($_FILES["txtEmployeeImage"]["tmp_name"], "uploads/".$_FILES['txtEmployeeImage']['name']);
			$_SESSION['status'] = "Employee Record Inserted Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Insert Failed.....";
			header('location:view.php');

		}
		$conn->close();

	}

	if(isset($_POST['update_employee'])){
		$id = $_POST['txtid'];
		$employeeFirstname = $_POST['txtEmployeeFirstname'];
		$employeeLastname = $_POST['txtEmployeeLastname'];
		$employeeAge = $_POST['txtEmployeeAge'];
		$employeeAddress = $_POST['txtEmployeeAddress'];
		$employeePosition = $_POST['txtEmployeePosition'];
		$employeeImage_new = $_FILES['txtEmployeeImage']['name'];
		$employeeImage_old = $_POST['txtold_employeeImage'];

		if($employeeImage_new != ''){
			$update_image = $employeeImage_new;
			
		}else{
			$update_image = $employeeImage_old;
		}

		echo "$update_image";

		$sql = "UPDATE employeestblcrud SET employeeFirstname ='$employeeFirstname', employeeLastname ='$employeeLastname', employeeAge ='$employeeAge', employeeAddress ='$employeeAddress', employeePosition ='$employeePosition', employeeImage ='$update_image' WHERE id='$id'";
		
		if($conn->query($sql)===TRUE){
			
			move_uploaded_file($_FILES["txtEmployeeImage"]["tmp_name"], "uploads/".$_FILES['txtEmployeeImage']['name']);
			$_SESSION['status'] = "Employee Record Updated Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Error: Update Failed.....";
			header('location:edit.php');

		}
		$conn->close();
	}

	if(isset($_GET['id'])){
		$id = $_GET['id'];
		$image = $_GET['employeeImage'];

		$sql = "DELETE FROM employeestblcrud WHERE id='$id'";

		if($conn->query($sql) === TRUE){
			
			unlink("uploads/".$image);
			$_SESSION['status'] = "Employee Record Deleted Successfully";
			header('location:view.php');
			
		}else{
			
			$_SESSION['status'] = "Deletion Failed.....";
			header('location:view.php');

		}
		$conn->close();
	}
?>
