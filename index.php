<?php
include_once("config/HappLabEmployee.php");
$happLab = new HappLabEmployee();
$query = "SELECT * FROM employee ";
$result = $happLab->getData($query);
//var_dump($result[0]['ID']);

?>





<!DOCTYPE html>
<html>
<head>
	<title>HappAround!!</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
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
        <a class="nav-link" href="signup.html">SignUp</a>
      </li>
     
    </ul>
    
  </div>
</nav>

<div class="container-fluid bg-dark mt-3">
<div class="jumbotron jumbotron-fluid">
  
    <h3 class="display-6 pl-3">Employee List <a href="signup.html" style="font-size: 20px;">Add Employee</a> </h3>
    
    <table class="table mt-3 pl-3">
  <thead>
    <tr>
      <th scope="col">Name</th>
      <th scope="col">Designation</th>
      <th scope="col">Age</th>
    </tr>
  </thead>
  <tbody>
  	<?php
  	if (is_array($result) || is_object($result))
  {
  	foreach ($result as $key => $res)
  	{ 
  		?>
  		<tr>
  			<td><?php echo $res['name']; ?></td>
  			<td><?php echo $res['designation']; ?></td>
  			<td><?php echo $res['age']; ?></td>
  			
  			<?php  
  			echo "<td><a class='btn btn-warning' href=\"editEmployee.php?id=$res[ID]\">Edit</a> | 
  			<a class='btn btn-danger' href=\"delete.php?id=$res[ID]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
  			?>
  		</tr>

  <?php	} 
  } ?>
   
  </tbody>
</table>
    
  </div>
</div>

</div>
</body>
</html>