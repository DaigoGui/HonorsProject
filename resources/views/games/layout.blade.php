<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Game Page</title>
  <link rel="stylesheet" href="css/numbers.css">
</head>
<style>
  body{
    background-color: #38335c; /* dark blue/purple color */
    color: #ffffff;
  }

  
  
</style>
<body>


  <!-- First Navbar -->
  @include('layouts.navbar')

  <!-- Game Layout Structure -->
    @yield('game-content')
 

@include('layouts.footer')

<!-- Include Bootstrap JS and jQuery -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.9/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>
</html>

