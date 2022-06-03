<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="adminstyles.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Panel</title>


    <style type="text/css">
    	.mainDivContainer
    	{
    		
    		width: 95%;
    		height: 800%;
    	}

    	.div1
    	{
    		
    		width: 25%;
    		display: inline-block;
    		float: left;
    		margin: 0px;
    		padding-top: 10%
    	}


    	.div2
    	{
    		
    		width: 35%;
    		display: inline-block;
    		margin-left: 19%;
    	}

		/* Fixed sidenav, full height */
		.sidenav {
		  height: 100%;
		  width: 200px;
		  position: fixed;
		  z-index: 1;
		  top: 0;
		  left: 0;
		  background-color: #51087E;
		  overflow-x: hidden;
		  padding-top: 20px;
		  margin-top:6.6%;
		}

		/* Style the sidenav links and the dropdown button */
		.sidenav a, .dropdown-btn {
		  padding: 6px 8px 6px 16px;
		  text-decoration: none;
		  font-size: 20px;
		  color: white;
		  display: block;
		  border: none;
		  background: none;
		  width: 100%;
		  text-align: left;
		  cursor: pointer;
		  outline: none;
		}

		/* On mouse-over */
		.sidenav a:hover, .dropdown-btn:hover {
		  color: #f1f1f1;
		}

		/* Main content */
		.main {
		  margin-left: 200px; /* Same as the width of the sidenav */
		  font-size: 20px; /* Increased text to enable scrolling */
		  padding: 0px 10px;
		}

		/* Add an active class to the active dropdown button */
		.active {
		  background-color: black;
		  color: white;
		}

		/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */
		.dropdown-container {
		  display: none;
		  background-color: #262626;
		  padding-left: 8px;
		}

		/* Optional: Style the caret down icon */
		.fa-caret-down {
		  float: right;
		  padding-right: 8px;
		}

		/* Some media queries for responsiveness */
		@media screen and (max-height: 450px) {
		  .sidenav {padding-top: 15px;}
		  .sidenav a {font-size: 18px;}
		}
    </style>


</head>

<body>

  <!-- ======= Header ======= -->
  <header>
      <div class="container">
        <nav class="navbar">
        <div class="container-fluid">
          
        
            <a class="button" href="index.html">OfCourses</a>
           
            <a class="btn" href="logout.php">Log Out</a>
            <a class="btn" href="myAdmin.html">MyAdmin</a>
            <a class="btn" href="myCourses.html">Instructors</a></li>
            <a class="btn" href="students.html">Students</a></li>
            

            <form class="searchBtn" action="">
              <input type="text" placeholder="What are you looking for?" name="search">
              <button type="submit">
			  <i class="fa fa-search"></i>
			  </button>
            </form>
         
        </div>
    </nav>
</div>

  </header><!-- End Header -->
  <img src="learn.png" class="container-one">
    <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative" data-aos="zoom-out">
     
      <h2>Welcome, <span>Admin!</span></h2>


  <div class="mainDivContainer">
  	
  		<div class="sidenav">

  			 <i><?php echo $login_session; ?></i>
		  <a href="#about">Home</a>
		  <button class="dropdown-btn">User 
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="#">Edit Professor</a>
		    <a href="#">Delete Professor</a>
		  </div>

		  <button class="dropdown-btn">Professor 
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="#">Validate Professor</a>
		    <a href="#">Delete Professor</a>
		  </div>
		  
		  <button class="dropdown-btn">Courses 
		    <i class="fa fa-caret-down"></i>
		  </button>
		  <div class="dropdown-container">
		    <a href="#">Validate courses</a>
		    <a href="#">Edit course</a>
		    <a href="#">Delete course</a>
		  </div>
		  
		</div>

		
  	<div class="div2">
  	</div>
  </div>


 
</body>

<script>
/* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
var dropdown = document.getElementsByClassName("dropdown-btn");
var i;

for (i = 0; i < dropdown.length; i++) {
  dropdown[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var dropdownContent = this.nextElementSibling;
    if (dropdownContent.style.display === "block") {
      dropdownContent.style.display = "none";
    } else {
      dropdownContent.style.display = "block";
    }
  });
}
</script>
</html>
