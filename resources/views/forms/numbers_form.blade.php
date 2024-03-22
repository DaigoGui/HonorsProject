{{-- @extends('layout') --}}

{{-- @section('game-content') --}}
<!-- Include CSS -->

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <title>Main Page</title>
  <link rel="stylesheet" href="{{ asset('css/numbers_form.css') }}">

</head>
<body>




<div class="container">

            <h1 class="card-title">Number Matching Game</h1>
            <img src="{{ asset('img/general/H2.png') }}" class="card-img-top" alt="Game 1">
            <p class="card-text">You are replicating the game with the numbers displayed in the image. Please fill in the translations for each number in the specified language from 0 to 10.</p>
     

    <hr>
    
    {{-- <form action="{{ route('store_translation') }}" method="POST">
      @csrf
      <label for="language_code">Language Code:</label>
      <input type="text" id="language_code" name="language_code" required><br><br>
    
      @for ($i = 0; $i <= 10; $i++)
        <label for="words[{{ $i }}]">{{ $i }}:</label>
        <input type="text" id="words{{ $i }}" name="words[{{ $i }}]" required><br><br>
      @endfor
    
      <button type="submit">Submit</button>
    </form> --}}
    @if(session('success'))
    <div>{{ session('success') }}</div>
@endif

<form method="POST" action="{{ route('store_numbers_form') }}">
    @csrf
    <div>
        <label for="language_code">Language Code:</label>
        <input type="text" name="language_code" id="language_code" required>
    </div>
    @for ($i = 0; $i <= 10; $i++)
        <div>
            <label for="words[{{ $i }}]">Number {{ $i }}:</label>
            <input type="text" name="words[{{ $i }}]" id="words[{{ $i }}" required>
        </div>
    @endfor
    <button type="submit">Submit</button>
</form>


</div>

</body>
</html>