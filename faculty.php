<!DOCTYPE html>
<html>
<head>
	<title>Student Enrollment</title>
	<style>
		body {
			margin: 20;
			padding: 0;
			font-family: Arial, sans-serif;
		}
		nav {
			position: fixed;
			top: 0;
			left: 0;
			width: 200px;
			height: 100%;
			background-color: #f1f1f1;
			padding: 20px;
			box-shadow: 0 0 10px rgba(0,0,0,0.3);
			background-color: #009688;
		}
		nav ul {
			list-style: none;
			padding: 0;
			margin: 0;
		}
		nav li {
			margin-bottom: 10px;
			
		}
		nav h1{
			
			padding: 10px;
		}
		nav a {
			display: block;
			padding: 10px;
			color: #333;
			text-decoration: none;
			transition: background-color 0.3s ease;
			border-radius: 20px;
		}
		nav a:hover {
			background-color: #ccc;
		}
		nav a.active {
			background-color: #ddd;
		}
		/* Main content styles */
main {
  margin-left: 220px;
  padding: 20px;
}

/* Page title styles */
h1 {
  margin-top: 0;
  font-size: 36px;
  text-align: center;
}

/* Table styles */
table {
  width: 100%;
  border-collapse: collapse;
  margin-bottom: 20px;
}

th,
td {
  padding: 10px;
  text-align: left;
  border: 1px solid #ccc;
}

th {
  background-color: #009688;
  color: #fff;
}

/* Form styles */
form {
  width: 80%;
  margin: 0 auto;
  border: 1px solid #ccc;
  padding: 20px;
  border-radius: 10px;
}
h2 {
	margin-left:400px;
  
}
span
{
  justify-content: center;
}
label {
  display: block;
  margin-bottom: 10px;
}

input[type="text"],
input[type="email"],
input[type="password"],
select,
textarea {
  width: 100%;
  padding: 10px;
  margin-bottom: 20px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  background-color: #009688;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
}
button{
	background-color: #009688;
  color: #fff;
  border: none;
  padding: 10px 20px;
  border-radius: 5px;
  cursor: pointer;
  transition: all 0.3s ease;
  margin-left:450px;
}
input[type="submit"]:hover {
  background-color: #fff;
  color: #009688;
}
	</style>
</head>
<body>
<nav>
  <ul>
     <li><h1>Faculty</h1></li>
     
     <li><a href="?page=Home" class="<?php if (isset($_GET['page']) && $_GET['page'] === 'Home')
						echo 'active'; ?>">Home Page</a></li>
    <li><a href="?page=studentschedule" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'studentschedule') echo 'active'; ?>">Student Schedule</a></li>
    <li><a href="?page=ContactStudent" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'ContactStudent') echo 'active'; ?>">Contact Student</a></li>
    <li><a href="?page=ClassesSchedule" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'ClassesSchedule') echo 'active'; ?>">List Classes</a></li>
    <li><a href="?page=EnrollStudent" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'EnrollStudent') echo 'active'; ?>">Enroll a Student</a></li>
    <li><a href="?page=ListAdvisor" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'ListAdvisor') echo 'active'; ?>">List Advisor</a></li>
    <li><a href="?page=ListTeachingSchedule" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'ListTeachingSchedule') echo 'active'; ?>">List Teaching Schedule</a></li>
    <li><a href="?page=ClassRoster" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'ClassRoster') echo 'active'; ?>">Find Class Roster</a></li>
    <li><a href="?page=RequestOverride" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'RequestOverride') echo 'active'; ?>">Request Override</a></li>
    <li><a href="?page=logout" class="<?php if(isset($_GET['page']) && $_GET['page'] === 'logout') echo 'active'; ?>">Logout</a></li>
  </ul>
  
 
</nav>
<main>
 <?php if(isset($_GET['page'])) {
    if ($_GET['page'] === 'Home')include('faculty/Home.php');
    elseif($_GET['page'] === 'studentschedule') include('Faculty/studentschedule.php');
    elseif($_GET['page'] === 'ContactStudent') include('Faculty/ContactStudent.php');
    elseif($_GET['page'] === 'ClassesSchedule') include('Faculty/ClassesSchedule.php');
    elseif($_GET['page'] === 'EnrollStudent') include('Faculty/EnrollStudent.php');
    elseif($_GET['page'] === 'ListAdvisor') include('Faculty/ListAdvisor.php');
    elseif($_GET['page'] === 'ClassRoster') include('Faculty/ClassRoster.php');
    elseif($_GET['page'] === 'RequestOverride') include('Faculty/RequestOverride.php');
    elseif($_GET['page'] === 'ListTeachingSchedule') include('Faculty/ListTeachingSchedule.php');
	elseif ($_GET['page'] === 'logout')include('Faculty/logout.php');
  } ?>
  </main>
</body>
</html>
