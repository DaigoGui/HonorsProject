
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
    <a href="{{ route('game.languages') }}" class="btn btn-primary">All Languages Available</a>
</div>


<div class="game-container">

    <h1>Number Matching Game</h1>
    <img src="{{ asset('img/general/H2.png') }}" class="card-img-top" alt="Game 1" >
    <p>You'll be presented with a list of number words alongside corresponding images. Your task is to match each image with its respective number word by dragging and dropping. Click the "Start Game" button to kick off the challenge, and when you're finished, simply hit "Reset Game" to start over. Get ready to enhance your language skills in a fun and interactive way!</p>

   

    {{-- <div class="word-list-container">
        <div class="droppable" id="word-9"> Kyuu </div>
        <div class="droppable" id="word-8"> Nana </div>
        <div class="droppable" id="word-7"> Shichi </div>
        <div class="droppable" id="word-6"> Roku </div>
        <div class="droppable" id="word-5"> Go </div>
        <div class="droppable" id="word-4"> Shi </div>
        <div class="droppable" id="word-3"> San </div>
        <div class="droppable" id="word-2"> Ni </div>
        <div class="droppable" id="word-1"> Ichi </div>
        <div class="droppable" id="word-0"> Ren </div>
    </div>

    <button class="btn btn-primary" id="startGameBtn">Start Game</button>

    <button class="btn btn-danger" id="resetGameBtn" style="display: none;">Reset Game</button>

    <div class="images-container">
        <img src="img/numbers/99.png" alt="Number 9" class="draggable" id="9" data-word-id="word-9">
        <img src="img/numbers/88.png" alt="Number 8" class="draggable" id="8" data-word-id="word-8">
        <img src="img/numbers/77.png" alt="Number 7" class="draggable" id="7" data-word-id="word-7">
        <img src="img/numbers/66.png" alt="Number 6" class="draggable" id="6" data-word-id="word-6">
        <img src="img/numbers/55.png" alt="Number 5" class="draggable" id="5" data-word-id="word-5">
        <img src="img/numbers/44.png" alt="Number 4" class="draggable" id="4" data-word-id="word-4">
        <img src="img/numbers/33.png" alt="Number 3" class="draggable" id="3" data-word-id="word-3">
        <img src="img/numbers/22.png" alt="Number 2" class="draggable" id="2" data-word-id="word-2">
        <img src="img/numbers/11.png" alt="Number 1" class="draggable" id="1" data-word-id="word-1">
        <img src="img/numbers/100.png" alt="Number 0" class="draggable" id="0" data-word-id="word-0">
    </div>
    <div id="feedback"></div>
</div>

<div class="completion-message" style="display: none;">
    <h2>Well done! You finished the game!</h2>
</div> --}}


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
