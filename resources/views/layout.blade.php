<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>School-Management-System</title>

    <style>
        /* The side navigation menu */

        body{
          background-color:#19172e;
        }
        .logo{
          padding:4px 10px;
          background-color:#19172e;
          color:#fff;
          font-size:2em;
        }
.sidebar {
  margin: 0;
  padding: 0;
  width: 200px;
  background-color: #f1f1f1;
  position: fixed;
  height: 80%;
  overflow: auto;
  border-radius:5px;
}

/* Sidebar links */
.sidebar a {
  display: block;
  color: black;
  padding: 16px;
  text-decoration: none;
}

/* Active/current link */
.sidebar a.active {
  background-color: #04AA6D;
  color: white;
}

/* Links on mouse-over */
.sidebar a:hover:not(.active) {
  background-color: #555;
  color: white;
}

/* Page content. The value of the margin-left property should match the value of the sidebar's width property */
div.content {
  margin-left: 200px;
  padding: 1px 16px;
  height: 1000px;
}
.sidehead h2{
  font-size:2em;
  text-align:center;
  margin: 20px auto;
  color:#fff;
}

img{
  height:250px;
  width:100%;
}

/* On screens that are less than 700px wide, make the sidebar into a topbar */
@media screen and (max-width: 700px) {
  .sidebar {
    width: 100%;
    height: auto;
    position: relative;
  }
  .sidebar a {float: left;}
  div.content {margin-left: 0;}
}

/* On screens that are less than 400px, display the bar vertically, instead of horizontally */
@media screen and (max-width: 400px) {
  .sidebar a {
    text-align: center;
    float: none;
  }
}
    </style>
</head>
<body>
    <div class="container">


      <div class="row">
         <div class="col-md-12">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <a class="navbar-brand logo" href="#">School-Management-System</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
            </nav>
         </div>
      </div>

      <div class="row">
          <div class="col-md-3">
             <!-- The sidebar -->
           <div class="sidebar">
                <a class="active" href="{{ url('/') }}">Home</a>
                <a href="{{ url('/teachers/') }}">Teacher</a>
                <a href="{{ url('/students/') }}">Student</a>
                <a href="{{ url('/courses/') }}">Course</a>
                <a href="{{ url('/batches/') }}">Batches</a>
                <a href="{{ url('/enrollments/') }}">Enrollment</a>
            </div>
          </div>
          <div class="col-md-9">
           @yield('content')
      </div>
      </div>
      
      
    </div>
</body>
</html>