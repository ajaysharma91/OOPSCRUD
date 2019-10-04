<?php
 include_once("config/HappLabEmployee.php");
 $happLab = new HappLabEmployee();
 $id = $happLab->escape_string($_GET['id']);


$query = "SELECT * FROM employee WHERE id=$id";
 $result = $happLab->getData($query);
 foreach($result as $res)
 {
 	//$id1 = $res['ID'];
  $name = $res['name'];
  $designation = $res['designation'];
  $age = $res['age'];
 }

?>

<!DOCTYPE html>
<html>
<head>
	<title>HappAround</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
 <script type="text/javascript" src="js/indexValidation.js"></script>

  <style type="text/css">
    .jumbotron {
   display: table-cell;
   vertical-align: middle;
}

@media (max-width: 768px) {
    .navbar-collapse  {
        display: inline-grid;
    }
}
  </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="#">HappAround</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item mr-5 ml-5">
        <a class="nav-link" href="#">Contact</a>
      </li>
      <li class="nav-item mr-5">
        <a class="nav-link" href="#">Services</a>
      </li>

      <li class="nav-item mr-5">
        <a class="nav-link" href="#">Login</a>
      </li>

      <li class="nav-item mr-5">
        <a class="nav-link" href="#">SignUp</a>
      </li>
     
    </ul>
    
  </div>
</nav>
<div class="container  mt-2">
    <div class="row align-items-center h-100 pt-2">
        <div class="jumbotron col-6 navbar-light bg-primary mx-auto ">
        <h3>Edit Employee</h3>
<form action="edit.php" method="POST" onsubmit="return validate()">
	<div class="form-group">
    <label for="name">ID:</label>
    <input type="text" class="form-control" id="id" aria-describedby="" value="<?php echo $id ?>" name="id">
   
  </div>
  <div class="form-group">
    <label for="name">Name:</label>
    <input type="text" class="form-control" id="name" aria-describedby="" value="<?php echo $name;?>" name="fullname">
   
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Designation:</label>
    <input type="text" class="form-control" id="designation" value="<?php echo $designation;?>" name="designation">
  </div>

   <div class="form-group">
    <label for="exampleInputPassword1">Age:</label>
    <input type="text" class="form-control" id="age" value="<?php echo $age;?>" name="age">
  </div>
  
  <button type="submit" name="update" class="btn btn-warning">Update</button>
</form>
        </div>
    </div>
</div>

</body>
</html>