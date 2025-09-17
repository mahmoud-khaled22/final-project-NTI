<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Academix</title>
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-light bg-light d-flex">
      
  <div class="container-fluid justify-content-between my-2">
    <div class>
        
        <a class="navbar-brand logo" href="#">Acade<span class="sub-logo">mix</span></a>
    </div>
    
    <div class="navbar-edit " >
        <ul class="navbar-nav  ">
             <li class="nav-item mx-2">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
            </li> 
            <li class="nav-item mx-2">
                <a class="nav-link" href="#">Courses</a>
            </li> 
            <li class="nav-item mx-2">
                <a class="nav-link " href="{{route('register.index')}}">Login</a>
            </li>
        </ul>
    </div >

    <div class="d-flex">
        <div class="cart me-2">
            <div class="count-cart rounded-circle text-center position-absolute  ">0</div>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="menu-icon" id="menu-icon"><i class="fa-solid fa-bars"></i></div>
    </div>
    
</div>
</nav>
    <section class=" hero ">
        <div class="  container d-flex ">
            <div class="row align-items-center" id="move-it">
                <div class="col-12 col-lg-6 text-lg-start text-sm-center">
                    <h2 class="fw-bolder mb-lg-5 text" >Develop your skills and start your career journey with confidence</h2>
                    <button class="btn bttn mt-lg-3 m-sm-3">Start your learning journey now</button>
                </div>
                <div class=" col-12 col-lg-6 text-end photo ">
                    <img src="img/student-man-making-crazy-gesture-removebg-preview.png" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="information ">
        <div class="container d-flex">
        <div class="row d-flex mt-3 mb-3">
            <div class="col-12 col-md-4 p-3 ">
                <div class="border p-2">
                    <h3>Your path from beginner to pro</h3>
                    <p>Start from scratch and follow a clear, structured learning path built on real-world experience</p>

                </div>
            </div>
            <div class="col-12 col-md-4 p-3">
                <div class="border border-d p-2">
                    <h3>Start your journey with practical learning</h3>
                    <p>guided by real industry professionals with hands-on experience and proven methods</p>
                </div>
            </div>
            <div class="col-12 col-md-4  p-3">
                <div class="border p-2">
                    <h3>9 Educational Courses</h3>
                    <p>Explore a wide and diverse collection of training programs</p>
                </div>
            </div>
          
        </div>
        </div>
    </section>

    <script src="https://kit.fontawesome.com/fca3fc4c97.js" crossorigin="anonymous"></script>
     <script src="javascript/bootstrap.min.js"></script> 
    <script src="{{ asset('javascript/main.js') }}"></script>
</body>
</html>




