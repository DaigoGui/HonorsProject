
<style>
    body{background-color: #0f0e1f; color: rgb(246, 240, 255); font-family: 'Georgia Pro Light', serif;}

    .card {
        display: flex;
        flex-direction: column;
        height: 100%; /* Makes the card stretch to the height of the tallest card */
    }
    
    .card-img-top {
        height: 200px; /* Fixed height for all images */
        object-fit: cover; /* This will prevent the images from being squished */
        width: 100%;
    }
    
    .card-body {
        flex: 1; /* Allows the card body to expand */
        display: flex;
        flex-direction: column;
    }
    
    .card-text {
        overflow: hidden;
        text-overflow: ellipsis;
    }
    
    .card-footer {
        margin-top: auto; /* Pushes the footer to the bottom */
    }
    
    .btn-read-more {
        display: block;
        width: 100%;
        text-align: center;
    }
    
    /* Add any additional styles for aesthetics */
    </style>


@extends('blog.layout')


@section('blog-content') 


<div class="container">
    <h1>All Blog Posts</h1>
    <a href="{{ route('blog.create_form') }}" class="btn btn-primary mb-5">Create Blog Post</a>

    <div class="row">
        @foreach($blogPosts as $post)
        <div class="col-md-4 mb-4">
            <div class="card h-100">
                @if($post->image_url)
                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                @endif
                <div class="card-body">
                    <h5 class="card-title">{{ $post->title }}</h5>
                    <p class="card-text">{{ Str::limit($post->post, 150) }}</p>
                </div>
                <div class="card-footer">
                    <small>By {{ $post->author_name }} | Rating: {{ $post->rating }}</small>
                    <a href="#" class="btn btn-primary btn-read-more mt-2">Read More</a>
                </div>
            </div>
        </div>
    @endforeach
    
    </div>
</div>
@endsection 

