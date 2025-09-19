<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
</head>
<body>
     
  <div class="container mt-5">
  <div class="card shadow">
    <div class="card-header bg-primary text-white">
      <h5 class="mb-0">Edit My Course</h5>
    </div>
    <div class="card-body">
      <form id="updateInstructorById" class="needs-validation" action="{{ route('updateInstructorById',$data['id']) }}" method="POST" novalidate>
        @csrf

        <div class="row g-3">
         
          <div class="col-md-6">
            <label for="courseName" class="form-label">Course Name</label>
            <input type="text" class="form-control" name="courseName" id="courseName" value="{{ $data->title }}" required>
            <div class="invalid-feedback">Course name is required.</div>
          </div>

     
          <div class="col-md-6">
           
            <label for="courseCategory" class="form-label" >Category</label>
            <select id="courseCategory" class="form-select" name="courseCategory" value="" required>
              <option selected disabled value="">Choose a category</option>
              <option value="IT" {{ $data->category->name == 'IT' ? 'selected' : '' }}>IT</option>
              <option value="Business " {{ $data->category->name == 'Business' ? 'selected' : '' }}>Business</option>
              <option value="Design"  {{ $data->category->name == 'Design' ? 'selected' : '' }}>Art</option>
              <option value="Health" {{ $data->category->name == 'Health' ? 'selected' : '' }}>Health</option>
            </select>
            <div class="invalid-feedback">Please select a category.</div>
          </div>

    
          <div class="col-md-6">
            <label for="startDate" class="form-label">Start Date</label>
            <input type="date" class="form-control" id="startDate" name="startDate" value="{{ $data->start_date }}" required>
            <div class="invalid-feedback">Start date is required.</div>
          </div>

          <div class="col-md-6">
            <label for="maxStudents" class="form-label">Max Students</label>
            <input type="number" class="form-control" id="maxStudents" name="maxStudents" min="1"  value="{{ $data->max_students }}">
          </div>

        
          <div class="col-md-6">
            <label for="coursePrice" class="form-label">Price ($)</label>
            <input type="number" class="form-control" id="coursePrice" name="coursePrice" min="0" placeholder="e.g. 49" value="{{ $data->price }}" required>
            <div class="invalid-feedback">Price is required.</div>
          </div>
        </div>

        <div class="mt-4">
          <button type="submit" class="btn btn-primary">Save Course</button>
        </div>
      </form>
    </div>
  </div>
</div>

    
</body>
</html>