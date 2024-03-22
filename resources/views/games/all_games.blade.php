<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Language Learning Games</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../public/css/style.css">
</head>
<style>
    body{background-color: #0f0e1f; color: rgb(246, 240, 255); font-family: 'Georgia Pro Light', serif;}

    .card {
        display: flex;
        flex-direction: column;
        height: 100%; /* Ensures that the card stretches to the height of the tallest card */
    }
    
    .card-img-top {
        height: 200px; /* Sets a fixed height for all images */
        object-fit: cover; /* Prevents the images from being squished */
        width: 100%;
    }
    
    .card-body {
        flex: 1; /* Allows the card body to expand to use up available space */
    }
    
    .card-title, .card-text {
        margin-bottom: .75rem;
    }
    
    /* Ensures text doesn't overflow and is cut off nicely */
    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
        display: -webkit-box;
        -webkit-line-clamp: 2; /* Limit to two lines */
        -webkit-box-orient: vertical;
    }
    
    .play-button {
        background-color: #a34caf; /* Play button color, change as needed */
        color: white;
        padding: 10px 24px;
        margin: 10px 0;
        border: none;
        border-radius: .25rem;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        display: inline-block;
        font-size: 16px;
        width: 100%; /* Makes the button extend the full width of the card */
    }
    
    /* Add any additional styling for aesthetics */
    </style>
<body>
    @include('layouts.navbar')


   <!-- Main Content -->
   <div class="container mt-5">
    <h1>All game Tutorials</h1>
    <p>This game offers numbers learning in various languages. Choose your preferred language to play the game.</p>

   
    <div class="container mt-5">
        <div class="row">
            @foreach($activities as $activity)
            <div class="col-md-4 mb-4">
                <div class="card">
                    @if($activity->img)
                        <img src="{{ $activity->img }}" class="card-img-top" alt="Image for {{ $activity->name }}">
                    @endif
                    <div class="card-body">
                        <h5 class="card-title">{{ $activity->name }}</h5>
                        <p class="card-text"><strong>Objective:</strong> {{ $activity->objective }}</p>
                        <p class="card-text"><strong>Gameplay:</strong> {{ $activity->gameplay }}</p>
                        <button class="play-button">Play</button>
                    </div>
                </div>
            </div>
        @endforeach
        </div>
    </div>
    
    
</div>

@include('layouts.footer')
    
<script src="../../public/js/app.js"></script>
    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>