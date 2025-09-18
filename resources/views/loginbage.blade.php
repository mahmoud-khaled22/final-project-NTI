<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>





<body class="bg-light d-flex align-items-center justify-content-center" style="height:100vh;">

    <div class="card shadow p-4" style="width: 350px;">
        <h3 class="text-center mb-4">Login</h3>

        <form action="{{route('register.store')}}" method="POST" >
            @csrf

            <div class="mb-3">
                <label class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
            </div>

            <div class="mb-3">
                <label class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" placeholder="Enter your password" required>
            </div>

            <button type="submit" class="btn btn-primary w-100">Login</button>
        </form>

        @if ($errors->any())
            <div class="alert alert-danger mt-3 p-2">
                {{ $errors->first() }}
            </div>
        @endif

        <div class="text-center mt-3">
            Don’t have an account? <a  href="{{route('register.index')}}">Register</a>
        </div>
    </div>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


