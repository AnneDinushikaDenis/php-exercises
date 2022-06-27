<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Php-exercise-index</title>
</head>
<body>
    
<div class="container" style="background-color: rgb(30, 22, 139); color: bisque;" >

<h2 style="text-align:center">Student Register Form</h2>
<hr>
<form action="insert-students-data.php" method="post" >
  
<div class="mb-3" class="form-group">
    <label for="studentid" class="form-label">Student ID</label>
    <input type="text" class="form-control" id="studentid"  placeholder="Enter Student ID" name="student_id">
  </div>
  
  <div class="mb-3" class="form-group">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" placeholder="Enter First Name" name="first_name" >
  </div>
  
  <div class="mb-3" class="form-group">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname"  placeholder="Enter Last Name" name="last__name" >
  </div>
  
  <div class="mb-3" class="form-group">
    <label for="dob" class="form-label">Date Of Birth</label>
    <input type="text" class="form-control" id="dob" placeholder="Enter Date Of Birth" name="dob">
  </div>
  
  <div class="mb-3" class="form-group">
    <label for="email" class="form-label">Email address</label>
    <input type="email" class="form-control" id="email1"  placeholder="Enter email" name="email_address" >
  </div>
  
  <div class="mb-3" class="form-group">
    <label for="department" class="form-label">Department</label>
    <input type="text" class="form-control" id="department" placeholder="Enter Department" name="department" >
  </div>
   
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
</div class="container">

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
</body>
</html>