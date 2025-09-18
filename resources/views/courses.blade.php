<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Courses</title>
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
                <a class="nav-link " aria-current="page" href="{{route('home')}}">Home</a>
            </li> 
            <li class="nav-item mx-2">
                <a class="nav-link active" href="#">Courses</a>
            </li> 
            <li class="nav-item mx-2">
                <a class="nav-link " href="{{route('register.index')}}">Login</a>
            </li>
        
        </ul>
    </div >

    <div class="d-flex">
        <div class="d-flex justify-content-center">
            <div class="icon-pro">
                <a href="{{ route('in') }}"><i  class="fa-solid fa-circle-user"></i></a>
                
            </div>
            <div class="pt-2 mx-2"">
                <p >name</p>
            </div>
        </div>
        <div class="cart me-2">
            <div class="count-cart rounded-circle text-center position-absolute  ">0</div>
            <i class="fa-solid fa-cart-shopping"></i>
        </div>
        <div class="menu-icon" id="menu-icon"><i class="fa-solid fa-bars"></i></div>
    </div>
    
</div>
</nav>
       
    <section class="my-2">
        <div class="container">
        
            <div class="row">
                    @if (@isset($data) and !@empty($data))
                    @foreach ($data as $info)
                    <div class="col-12 col-lg-3 col-md-4 mb-2">
                    <div class="card" >
                    <img src="img/Learn How to Edit Videos and Photos with AI.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <p class=" fw-lighter data-of-instructor">{{ $info->instructor->name }}</p>
                         <h6 class="card-title">{{ $info->category->name }}</h6>
                        <h5 class="card-title">{{ $info->title}}</h5>
                        <p class="card-text">{{ $info->description }}</p>
                        <div class="row ">
                            <div class="col-5 ">
                                <div class="d-flex flex-column">

                                    <span class="fw-medium">Price</span>
                                    <span class="fs-3">{{ $info->price }}$</span>
                                </div>
                            </div>
                             <div class="col-7">
                                <a href="#" class="btn bttn w-100 fw-bold py-3 rounded-2 ">Enroll</a>
                            </div>
                        </div>
                       </div>
                     </div>
                    </div>
                        
                    @endforeach
                        
                    @endif
            </div>
        </div>
    </section>
    <footer >
        <div class="container">
           <div class="row">
            <div class="col-12 col-md-4 ">
                <a class="navbar-brand logo" href="#">Acade<span class="sub-logo">mix</span></a>
                <p class="fw-bold">Learn • Grow • Succeed</p>
            </div>
             <div class="col-12 col-md-4 ">
                <h6 class="fw-bold my-3">Fast Links</h6>
                <ul>
                    <li>
                        <a class=" " aria-current="page" href="#">Home</a>
                    </li>
                    <li>
                          <a class="" href="#">Courses</a>
                    </li>
                </ul>
                
            </div>
             <div class="col-12 col-md-4 ">
                <h6 class="fw-bold my-3">contact us</h6>
                <ul>
                    <li>
                       <a href="tel:+201121712600">
						<span><strong>Phone : </strong>+20 1121712600</span>
						</a>
                    </li>
                    <li>
                       <a href="http://mahmoud.k.ahmed22@gmail.com">
						<span class="elementor-icon-list-text"><strong>Email : </strong>itharwat@gmail.com</span>
						</a>
                    </li>
                </ul>
                <div class="social ms-4">
                    <a href="http://facebook.com"><i class="fa-brands fa-facebook fs-4"></i></a>
                    <a href="http://facebook.com"> <i class="fa-brands fa-github fs-4"></i></i></a>
                    <a href="http://facebook.com"><i class="fa-brands fa-linkedin fs-4"></i></a>
                
                   
                </div>

               
                
            </div>
           </div>

        </div>

    </footer>


    <script src="https://kit.fontawesome.com/fca3fc4c97.js" crossorigin="anonymous"></script>
    <script src="javascript/bootstrap.min.js"></script> 
    <script src="{{ asset('javascript/main.js') }}"></script>
</body>
</html>




