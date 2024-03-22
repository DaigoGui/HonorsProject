
@extends('games.layout')
@section('game-content') 
<!-- Include CSS -->

<style>
    /* Adjust .game-container styles if needed, but remove global flexbox styles from body */
.game-container {
    margin-top: 20px; /* Keep this if you want some space below the navbar */
    display: flex;
    flex-direction: column;
    align-items: center;
    text-align: center;
    background-color: rgba(17, 17, 17, 0.3);
    font-size: 18px;
    color: #ffffff;
    padding: 20px; /* Add some padding around game content */
}

img{
    width: 10%;
    height: 10%;
    background-size: cover;
    background-position: center;
}

.word-list-container,
.images-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: center;
}

.draggable {
    width: 100px;
    height: 100px;
    margin: 10px;
    cursor: move;
    border-radius: 50%;
    overflow: hidden;
    text-align: center;
    line-height: 100px;
}

/* Add padding to the droppable areas */
.droppable {
    position: relative;
    width: 100px;
    height: 100px;
    border: 2px solid #000;
    margin: 10px;
    text-align: center;
    line-height: 100px;
    padding: 5px;
    font-size: 15px;
   
}

/* Center the image more within the larger droppable area */
.droppable img {
    position: absolute;
    top: 40%;
    left: 40%;
    transform: translate(-50%, -50%);
    max-width: 100%;
    max-height: 100%;
  
}

.card-img-top{
    width: 400px;
    height: 400px;
}



</style>

<div class="text-centre">
    <p>Did you like this game? Wanna try it in another language?</p>
   <!-- Corrected Button Link -->
<a href="{{ route('game.languages') }}" class="btn btn-success">Create Game in New Language</a>

</div>


<div class="game-container">

    <h1>Number Matching Game</h1>
    <img src="{{ asset('img/general/H2.png') }}" class="card-img-top" alt="Game 1" >
    <p>You'll be presented with a list of number words alongside corresponding images. Your task is to match each image with its respective number word by dragging and dropping. Click the "Start Game" button to kick off the challenge, and when you're finished, simply hit "Reset Game" to start over. Get ready to enhance your language skills in a fun and interactive way!</p>

   




    <div class="word-list-container">
        @foreach ($numbers as $number)
            <div class="droppable" id="word-{{ $number->id }}"> {{ $number->word }} </div>
        @endforeach
    </div>

    <button class="btn btn-primary" id="startGameBtn">Start Game</button>
    <button class="btn btn-danger" id="resetGameBtn" style="display: none;">Reset Game</button>

    <div class="images-container">
        @foreach ($numbers as $number)
            <img src="{{ asset($number->image_url) }}" alt="Number {{ $number->id }}" class="draggable" id="{{ $number->id }}" data-word-id="word-{{ $number->id }}">
        @endforeach
    </div>
    <div id="feedback"></div>
</div>

<div class="completion-message" style="display: none;">
    <h2>Well done! You finished the game!</h2>
</div>




<!-- Include JavaScript -->
<script src="{{ asset('js/numbers.js') }}"></script>
 @endsection 
