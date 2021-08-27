

    <!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  font-family: "Lato", sans-serif;
}

.sidebar {
  height: 100%;
  width: 0;
  position: fixed;
  z-index: 1;
  top: 0;
  left: 0;
  background-color: #191970;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidebar a {
  
  padding: 8px 8px 8px 32px;
  text-decoration: none;
  font-size: 15px;
  color: #FFFFFF;
  display: block;
  transition: 0.3s;
}

.sidebar a:hover {
  color: #87ceeb;
}

.sidebar .closebtn {
  
  position: absolute;
  top: 0;
  right: 25px;
  font-size: 36px;
  margin-left: 50px;
}

.openbtn {
  font-size: 20px;
  cursor: pointer;
  background-color:  #191970;
  color: white;
  padding: 10px 15px;
  border: none;
}

.openbtn:hover {
  
  background-color: #87ceeb;
}

#main {
  
  transition: margin-left .5s;
  padding: 12px;
}

/* On smaller screens, where height is less than 450px, change the style of the sidenav (less padding and a smaller font size) */
@media screen and (max-height: 450px) {
  .sidebar {padding-top: 15px;}
  .sidebar a {font-size: 18px;}
}
</style>
</head>
<body>


<div id="mySidebar" class="sidebar">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
  <a href="/home">Home </a>
  <a href="/course" >Courses</a>
  <a href="/student" >Students</a>
  <a href="/semester" >Semester</a>
  <a href="/full-calendar" >Events</a> 
  <a href="#">Tuition Fee</a>
  <a href="/signout">Logout</a>
  
</div>

<div id="main">
  <button class="openbtn" onclick="openNav()">☰</button>  
  
</div>

<script>
function openNav() {
  document.getElementById("mySidebar").style.width = "150px";
  document.getElementById("main").style.marginLeft = "150px";
}

function closeNav() {
  document.getElementById("mySidebar").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
   
</body>
</html> 

