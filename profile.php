
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">

    <title>Home </title>
    <style>
        li{
            list-style-type:none;
        }
      li a{
            text-decoration:none;
        }
    </style>
</head>
<body class="m-0">
<nav class="navbar navbar-expand-lg navbar-light bg-danger my-0" style="height:8vh;">
    <div class="container-fluid ml-2">
       <div>
            <a class="navbar-brand text-white" href="#">Assignment</a>
       </div>
        <div class="d-flex justify-content-end" id="navbarSupportedContent">
            <ul class="navbar-nav mb-2 mb-lg-0">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle mr-3" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <!-- profile picture -->
                    <img src="image/prfl.png" class="rounded-circle" alt="profile" width="40" height="40" srcset="">
                </a>

                <!-- Loging out... -->
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">

                    <li><a class="dropdown-item" href="exit.php">Sign out</a></li>
                </ul>
                </li>
            </ul>
        </div>
  </div>
</nav>
<!-- form container -->
<div class=" mx-0" style="height:85vh; background-color:white;">
    
    <div class="row mt-0">
        <div class="col-md-7 col-sm-12">
                <div class="border  position-relative bg-dark" style="background-image:url(image/prfl.png);height:130px;">

                 <img class="rounded-circle position-absolute" src="image/prfl.png" style="height:130px; width: 130px; bottom:-2rem;left:1rem;">
                </div>
                <div class="py-3"></div>
                <div class="border bg-white py-2 px-2  ">
                    <h5 style="padding:7px;">Headlines <i class="fa fa-pencil" aria-hidden="true"></i> </h5> 
                    <hr>
                    <h6 style="padding:7px;">Software development workers</h6>
                    
                </div>
                <div class="div">
                    
                </div>
        </div>
        <div class="col-md-5 col-sm-12 px-3 h-30">
                <li class="text-center border-top border-info border-1 shadow pb-4"> ACCOUNT SETTINGS </li>  
                <ul class="mt-2">
                
                <li class="border-1 border-bottom border-info py-2">
                        
                        <a href="#">
                            <i class="fa fa-edit" aria-hidden="true" style="font-size:20px;"></i>
                             Change Profile
                        </a>
                    </li>


                    <li class="border-1 border-bottom border-info py-2">
                        <a href="changepass.php">
                            <i class="fas fa-key" aria-hidden="true" style="font-size:20px;"></i>
                             Change Password
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-signal" aria-hidden="true" style="font-size:20px;"></i>
                             Sign in Activities
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="far fa-clock" aria-hidden="true" style="font-size:20px;"></i>
                            <i class="fa fa-warning text-warning" aria-hidden="true" style="font-size:20px;"></i>
                            Session tiomeout
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-tag" aria-hidden="true" style="font-size:20px;"></i>
                             Job & Feeds
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-envelope" aria-hidden="true" style="font-size:20px;"></i>
                             Email and Notification
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="#">
                            <i class="fa fa-bell" aria-hidden="true" style="font-size:20px;"></i>
                             Push Notification
                        </a>
                    </li>
                    <li class="border-1 border-bottom border-info py-2">
                        <a href="deleteA.php">
                            <i class="fa fa-user-times" aria-hidden="true" style="font-size:20px;"></i>
                             Delete Account
                        </a>
                    </li>
                    
                </ul>          
        </div>
    </div>
    </div>
</div>

</div>


<footer class="d-flex bg-info text-white p-2 justify-content-between fixed-bottom">
        <div>
            <a href="#" class="text-white px-2" style="text-decoration: none;">About Us</a>
            <a href="#" class="text-white px-2" style="text-decoration: none;">Advertisement</a>
        </div>
        <div>
            <a href="#" class="text-white px-2" style="text-decoration: none;">Kigali, Rwanda</a>
        </div>
        <div>
            <a href="#" class="text-white px-2" style="text-decoration: none;">How search work</a>
            <a href="#" class="text-white px-2" style="text-decoration: none;">Privacy</a>
        </div>


    </footer>

</body>
<!-- <script src="bootstrap/js/bootstrap.min.js"></script> -->
<script src="bootstrap/js/bootstrap.bundle.js"></script>


</html>
