<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Students Companion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, #6a11cb, #2575fc); /* Gradient background */
            color: white; /* White text color for better contrast */
        }
        .navbar {
            margin-bottom: 20px;
            background-color: rgba(255, 255, 255, 0.8); /* Semi-transparent navbar */
        }
        .card-title {
            font-weight: bold;
            color: #333;
        }
        .card-text {
            color: #555;
        }
        .carousel-inner img {
            border: 5px solid white; /* White frame around the images */
            border-radius: 10px; /* Rounded corners for the frame */
        }
        footer {
            background-color: rgba(0, 0, 0, 0.8); /* Semi-transparent footer */
        }
    </style>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Students Companion</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="Calculator.html">Calculator</a>
              </li>
              <li class="nav-item">
                  <a class="nav-link" href="index3.html">To-Do List</a>
              </li>
              <div></div>
              <li class="nav-item ms-5"> 
                  <a class="nav-link" href="#">Admin</a>
              </li>
          </ul>
      </div>
    </div>
</nav>
<div class="container my-4">
  <div class="row">
      <div class="col-md-8">
          <div id="headlineCarousel" class="carousel slide" data-bs-ride="carousel">
              <div class="carousel-inner">
                  <div class="carousel-item active">
                      <img src="main no1.jpg" class="d-block w-100" alt="First slide">
                      <div class="carousel-caption d-none d-md-block"></div>
                  </div>
                  <div class="carousel-item">
                      <img src="main no2.jpg" class="d-block w-100" alt="Second slide">
                      <div class="carousel-caption d-none d-md-block"></div>
                  </div>
                  <div class="carousel-item">
                      <img src="main no3.jpg" class="d-block w-100" alt="Third slide">
                      <div class="carousel-caption d-none d-md-block"></div>
                  </div>
              </div>
              <button class="carousel-control-prev" type="button" data-bs-target="#headlineCarousel" data-bs-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Previous</span>
              </button>
              <button class="carousel-control-next" type="button" data-bs-target="#headlineCarousel" data-bs-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="visually-hidden">Next</span>
              </button>
          </div>
      </div>
      <div class="col-md-4">
          <div class="card mb-3">
              <div class="card-body">
                    <h1> Student login </h1>
                    <div>
                        <label for="name">User Name</label>
                        <input type="text" id="name" class="form-control" placeholder="Enter your name">
                    </div>
                    <div>
                        <label for="password">Password</label>
                        <input type="password" id="password" class="form-control" placeholder="Enter your password">
                    </div>
                    <div class="mt-3">
                      <input type="submit" value="Login" class="btn btn-primary">
                      <input type="submit" value="Register" class="btn btn-secondary ms-2">
                    </div> 
              </div>
          </div>
      </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <img src="experiment no1.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Geography</h5>
                   <p>                            
                    Click Here for more info...
                   </p>                                  
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="experiment no2.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Physics</h5>
                    <p>                            
                      Click Here for more info...
                     </p> 
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card">
                <img src="experiment no3.jpg" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Chemistry</h5>
                    <p>                            
                      Click Here for more info...
                     </p> 
                    <a href="#" class="btn btn-primary">Read more</a>
                </div>
            </div>
        </div>
    </div>
</div>
<footer class="bg-dark text-white text-center p-3 mt-4">
    <p>© Copyrights Students Companion.</p>
    <ul class="list-unstyled">
        <li><a href="#" class="text-white">Privacy Policy</a></li>
        <li><a href="#" class="text-white">Terms of Service</a></li>
    </ul>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
<?php
if(isset($_POST['submit'])){


    $name = $_POST['name'];
    $age = $_POST['age'];
    $dob1= $_POST['dob'];
    
    $date = new DateTime($_POST['dob']);
    
    $dob = $date->format('Y-m-d');
    
    $query = "insert into details(name,age,dob) values('$name',$age,'$dob')";
    //echo $query;
    $sql=mysqli_query($conn,$query);
    //echo $query;
    if(mysqli_query($conn,$query))
    {
        echo "Insertion success";
    }
    else{
        echo "Failure";
    }
    }
    ?>