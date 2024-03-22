<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Numbers Games</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <h1>Available Languages for the Game</h1>
 <!-- Button to create a new game in a new language -->
 <div class="container mt-3">
    {{-- <a href="{{ route('numbers_form') }}" class="btn btn-success">Create Game in New Language</a> --}}
</div>

    <div class="container mt-5">
        <div class="card-deck">
            @foreach($games as $languageCode => $details)
                @if($details->isNotEmpty())
                    @php $detail = $details->first(); @endphp
                    <div class="card">
                        @if($detail->img)
                            <img src="{{ asset($detail->img) }}" class="card-img-top" alt="Image for {{ $detail->name }}">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $detail->name }}</h5>
                            <p class="card-text"><strong>Objective:</strong> {{ $detail->objective }}</p>
                            <button class="play-button">Play</button>
                        </div>
                    </div>
                @endif
            @endforeach
        </div>
    </div>

    <!-- Optional: Include Bootstrap JS (if needed) -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>



