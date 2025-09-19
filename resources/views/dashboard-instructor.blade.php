<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <title>Instructor Dashboard</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
  

  <div class="sidebar d-flex flex-column justify-content-between ">
    
     <div>
        <a href="#" class="nav-link click"> My Courses</a>
    </div>
    <div>
      <form action="{{ route('logout') }}" method="POST" style="display: inline;">
         @csrf
       <button type="submit" class="btn btn-outline-danger">Logout</button>
      </form>

    </div>
  </div>

 
  <div class="content">
    

   
    <div class="card profile-card p-3 mb-4 shadow-sm">
      <div class="d-flex align-items-center gap-3">
        <div>
         
          <h5 class="mb-0">

            <p >{{ $username ?? '' }}</p>
           
                @if(Auth::check())
                <p>{{ Auth::user()->name }}</p>
                @endif
          </h5>
        
          <small class="text-muted">
                @if(Auth::check())
                <p>{{ Auth::user()->email }}</p>
                @endif
          </small>
        </div>
      </div>
    </div>

   
    <div class="row mb-4">
      
  

    
    <div class="d-flex justify-content-between align-items-center mb-3">
      <h4 class="mb-0">My Courses</h4>
      <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCourseModal">+ Add New Course</button>
    </div>

    <!-- Courses table -->
    <table class="table table-striped table-bordered shadow-sm">
      <thead class="table-dark">
        <tr>
          <th style="width:50px">#</th>
          <th>Title</th>
          <th>Category</th>
          <th >Max Student</th>
          <th >Price</th>
          <th >Strat Date</th>
          <th>
            Edit
          </th>
          
        </tr>
      </thead>
      <tbody id="coursesTableBody">
         @if (@isset($data) and !@empty($data))
                    @foreach ($data as $info)
                    @if($info->instructor->id==auth::user()->id and !$info->deleted_at)
                     <tr>
                      <td>{{ $info->id }}</td>
                      <td>{{ $info->title }}</td>
                      <td>{{ $info->category->name  }}</td>
                      <td>{{ $info->max_students }}</td>
                      <td>{{ $info->price }}</td>
                      <td>{{ $info->start_date }}</td>
                      <td>
                     <a href="{{ route('instructorById' , $info->id) }}"> <button class="btn btn-sm btn-warning btn-edit">Edit</button></a>
                     <a href="{{ route('deletecourse' , $info->id) }}"><button class="btn btn-sm btn-danger btn-delete">Delete</button></a>
                      </td>



                    </tr>
                    @endif
  
                    @endforeach
                        
                    @endif
       
       
      </tbody>
    </table>
  </div>

 
  <div class="modal fade" id="addCourseModal" tabindex="-1" aria-labelledby="addCourseLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <form id="addCourseForm" class="needs-validation" action="{{ route('addcourse') }}" method="POST" novalidate>
          @csrf
          <div class="modal-header">
            <h5 class="modal-title" id="addCourseLabel">Add New Course</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>

          <div class="modal-body">
            <div id="formError" class="alert alert-danger d-none" role="alert"></div>

            <div class="mb-3">
              <label for="courseName" class="form-label">Course Name</label>
              <input type="text" class="form-control" name="courseName" id="courseName" required>
              <div class="invalid-feedback">Course name is required.</div>
            </div>

            <div class="mb-3">
              <label for="courseCategory" class="form-label">Category</label>
              <select id="courseCategory" class="form-select" name="courseCategory" required>
                <option value="IT">IT</option>
                <option value="Business">Business</option>
                <option value="Design">Art</option>
                <option value="Health">Health</option>
                <option value="Education">Education</option>
              </select>
              <div class="invalid-feedback">Please select a category.</div>
            </div>
            <div class="mb-3">
            <label for="startDate" class="form-label">Start Date:</label>
            <input type="date" class="form-control" id="startDate" name="startDate" required>
             <div class="invalid-feedback">Please date is required.</div>
            </div>

              <div class="mb-3">
              <label for="courseDescription" class="form-label">Course Description</label>
              <input type="text" class="form-control" name="courseDescription" id="courseDescription" required>
              <div class="invalid-feedback">Course Descriotion is required.</div>
            </div>
            
            <div class="mb-3">
              <label for="maxStudents" class="form-label">Max Number Of Student</label>
              <input type="number" id="maxStudents" name="maxStudents" class="form-control" min="0" placeholder="0">
            </div>
            

            <div class="mb-3">
              <label for="coursePrice" class="form-label">Price ($)</label>
              <input type="number" id="coursePrice" name="coursePrice" class="form-control" min="0" placeholder="e.g. 49">
            </div>

          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
            <button type="submit" class="btn btn-success">Save Course</button>
          </div>
        </form>
      </div>
    </div>
  </div>

  
  <script src="https://kit.fontawesome.com/fca3fc4c97.js" crossorigin="anonymous"></script>
    <script src=" {{ asset('javascript/bootstrap.min.js') }}"></script> 
    <script src="{{ asset('javascript/main.js') }}"></script>
</body>
</html>
