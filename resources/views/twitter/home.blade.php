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
        <div class="col-lg-12">
            <div class="d-flex justify-content-end">
                <a href="" class="btn btn-primary mr-2 mb-3">Login</a>
                <a href="" class="btn btn-primary mr-2 mb-3">Register</a>
                <a href="" class="btn btn-danger mr-2 mb-3">Logout</a>
            </div>
        </div>
    </div>

    <div class="row">
      <div class="col-lg-12">
          @include('twitter.shared.message')
      </div>

      <!-- Sidebar -->
      <div class="col-md-3">
        <div class="card shadow">
            @include('twitter.shared.trending')
        </div>
      </div>

      <!-- Main Content -->
      <div class="col-md-9">
        <!-- Post Form -->
        <div class="card mb-3 shadow">
            @include('twitter.shared.create-tweet')
        </div>

        <!-- Posts -->
        <!-- Example post -->
        <div class="card mb-3 shadow">
            @include('twitter.shared.twitter-card')
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
