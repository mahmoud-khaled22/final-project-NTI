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
                <a class="nav-link active" aria-current="page" href="{{url('/')}}">Home</a>
            </li> 
            <li class="nav-item mx-2">
                <a class="nav-link" href="{{route('cousres')}}">Courses</a>
            </li> 
            <li class="nav-item mx-2">
                 @if(Auth::check())
                 <a class="nav-link " href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                 <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf </form>
                 @else
                 <a class="nav-link " href="{{route('login')}}">Login</a>
                 @endif
            </li>
        
        </ul>
    </div >
   

    <div class="d-flex">
        <div class="d-flex justify-content-center">
             @if(Auth::check())
             @if(Auth::user()->role=="student")
            <div class="icon-pro">
                <a ><i  class="fa-solid fa-circle-user"></i></a>
            </div>
            @else
             <div class="icon-pro">
                <a href="{{ route('instructor') }}"><i  class="fa-solid fa-circle-user"></i></a>
            </div>
            @endif
            <div class=" mx-2  ">
                <p >{{ $username ?? '' }}</p>
            
                {{ Auth::user()->name }}
                
            </div>
            @endif
        </div>
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
                <div class="dash-border p-2 d-flex justify-content-center align-items-center">
                    <div>
                        <h3>Your path from beginner to pro</h3>
                        <p>Start from scratch and follow a clear, structured learning path built on real-world experience</p>
                    </div>
                    <div><i class="fa-solid fa-trophy logo"></i></div>
                </div>
            </div>
            <div class="col-12 col-md-4 p-3 ">
                 <div class="dash-border p-2 d-flex justify-content-center align-items-center">
                    <div>
                        <h3>Start your journey with practical learning</h3>
                        <p>guided by real industry professionals with hands-on experience and proven methods</p>
                    </div>
                    <div><i class="fa-solid fa-book logo"></i></i></div>
                </div>
            </div>
            <div class="col-12 col-md-4  p-3 align-self-center">
                <div class="dash-border p-2 d-flex justify-content-center align-items-center pb-4">
                    <div>
                        <h3 class="mb-4">9 Educational Courses</h3>
                        <p>Explore a wide and diverse collection of training programs</p>
                    </div>
                    <div><i class="fa-solid fa-sheet-plastic logo"></i></i></div>
                </div>
            </div>
          
        </div>
        </div>
    </section>
    <section class= "categories-of-course">
        <div class="container">

            <h2 class="text-center my-4 title fw-bolder">Courses Categories</h2>
            <div class="row">
                <div class="col-12 col-md-3 p-3 btn ">
                    <div class="c-btn p-3 rounded-1 d-flex justify-content-center align-items-center ">
                        <div>
                            <i class="fa-solid fa-laptop me-1"></i>
                        </div>
                        <div>
                            Information Technology (IT)
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3  p-3 btn">
                    <div class="c-btn p-3 rounded-1 d-flex justify-content-center align-items-center ">
                        <div>
                            <i class="fa-solid fa-business-time me-1"></i>
                        </div>
                        <div>
                           Business & Management
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-3 btn   ">
                    <div class="c-btn p-3 rounded-1 d-flex justify-content-center align-items-center ">
                        <div>
                            <i class="fa-solid fa-briefcase-medical me-1"></i>
                        </div>
                        <div>
                           Health & Medicine
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3 p-3 btn ">
                    <div class="c-btn p-3 rounded-1 d-flex justify-content-center align-items-center ">
                        <div>
                            <i class="fa-solid fa-palette me-1"></i>
                        </div>
                        <div>
                           Design & Creative
                        </div>
                    </div>                   
                </div>
                
            </div>
        </div>

    </section>
    <section class="my-2">
        <div class="container">
            <div class="d-flex justify-content-between py-2 mb-2">
                <div class="b-courses fw-bolder ">Best Courses</div>
                    <div class="btn bttn" href="{{route('cousres')}}">Show All Courses</div>
            </div>
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




