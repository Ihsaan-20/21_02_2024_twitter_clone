<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Share idea!</title>
  <!-- Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>
    /* Custom styles can be added here */
    /* For example: */
    /* Adjust spacing, colors, etc. */
  </style>
</head>
<body>

  <!-- Header -->
  <header class="bg-primary text-white p-4">
    <div class="container">
      <h5><></h5>
    </div>
  </header>

  <!-- Main Content Area -->
  <div class="container mt-4">

    <div class="row">
      <!-- Main Content -->
      <div class="col-md-6 mx-auto">

        @include('twitter.shared.message')



        <!-- Post Form -->
        <div class="card shadow">
            <div class="card-header">
                <h1 class="mb-5">
                    Registration
                </h1>
            </div>

            <div class="card-body">
                <form action="{{route('register')}}" method="POST" enctype="multipart/form-data">
                    @csrf
        
                    <div class="mb-3">
                        <label for="">Name</label>
                        <input type="text" name="name" id="name" value="{{old('name')}}" placeholder="Name..." class="form-control">
                        @error('name')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
        
        
                    <div class="mb-3">
                        <label for="">Email</label>
                        <input type="email" name="email" id="email" value="{{old('email')}}" placeholder="Email..." class="form-control">
                        @error('email')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">Password</label>
                        <input type="password" name="password" id="password" placeholder="Password..." class="form-control">
                        @error('password')
                            <span class="text-danger">{{$message}}</span>
                        @enderror
                    </div>
        
                    <div class="mb-3">
                        <label for="">Password Confirmation</label>
                        <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password confirmation..." class="form-control">
                    </div>
        
                    <div class="mb-3">
                        <button class="btn btn-primary px-5" type="submit">Create Account</button>
                    </div>
        
                    <div class="mb-3">
                        <p>Already have an account? <a href="{{route('login')}}">Login</a></p>
                        <p> <a href="{{route('idea.index')}}">Back to home</a></p>
                    </div>
        
                </form>
            </div>
        </div>


      </div>
    </div>
  </div>

  <!-- Bootstrap JS (optional, only needed if you want to use Bootstrap JS components) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
