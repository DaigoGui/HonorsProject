<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../../public/css/style.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Georgia+Pro+Light&display=swap">
  <title>Main Page</title>
  <link rel="stylesheet" href="{{ asset('css/index.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>



<style>
    body{background-color: #0f0e1f; color: rgb(246, 240, 255); font-family: 'Georgia Pro Light', serif;}

    #language-map {
    background-color: rgba(255, 255, 255, 0.5); /* Solid white background with 50% opacity */
    backdrop-filter: blur(10px); /* Apply blur effect */}



.btn-primary{background-color: #625b8b;}

.nav-item {
    text-align: center; /* Center the text */
}

.nav-item a.nav-link {
    color: white; /* Set text color to white */
    font-family: 'Georgia Pro Light', serif; /* Set font to Georgia Pro Light */
}
.card{background-color: rgba(255, 255, 255, 0.1); color: rgb(246, 240, 255); font-family: 'Georgia Pro Light', serif;}

.blog{background-color: rgba(255, 255, 255, 0.1); color: rgb(246, 240, 255); font-family: 'Georgia Pro Light', serif;}
</style>
<body>


    
 @include('layouts.navbar')


    <!-- Header Carousel -->
    <div class="container d-flex justify-content-center align-items-center min-vh-80 mt-5">
        <div class="carousel-container">
            <div class="slide">
                <!-- Carousel item for Switzerland -->
                <div class="item" style="background-image: url('{{ asset('img/1.PNG') }}');">
                    <div class="content">
                        <div class="name">Switzerland</div>
                        <div class="des">Lorem ipsum dolor, sit amet!</div>
                        <button class="btn-primary" >See More</button>
                    </div>
                </div>
                <!-- Carousel item for Finland -->
                <div class="item" style="background-image: url('{{ asset('img/2.jpg') }}');">
                    <div class="content">
                        <div class="name">Finland</div>
                        <div class="des">Lorem ipsum dolor, sit amet!</div>
                        <button class="btn-primary" >See More</button>
                    </div>
                </div>
                <!-- Carousel item for Iceland -->
                <div class="item" style="background-image: url('{{ asset('img/1.PNG') }}');">
                    <div class="content">
                        <div class="name">Iceland</div>
                        <div class="des">Lorem ipsum dolor, sit amet!</div>
                        <button class="btn-primary" >See More</button>
                    </div>
                </div>
                <!-- Carousel item for Australia -->
                <div class="item" style="background-image: url('{{ asset('img/2.jpg') }}');">
                    <div class="content">
                        <div class="name">Australia</div>
                        <div class="des">Lorem ipsum dolor, sit amet!</div>
                        <button class="btn-primary" >See More</button>
                    </div>
                </div>
                <!-- Carousel item for the Netherlands -->
                <div class="item" style="background-image: url('{{ asset('img/1.PNG') }}');">
                    <div class="content">
                        <div class="name">Netherlands</div>
                        <div class="des">Lorem ipsum dolor, sit amet!</div>
                        <button class="btn-primary" >See More</button>
                    </div>
                </div>
            </div>
            <div class="button">
                <button class="prev">
                    <i class="fa-solid fa-arrow-left"></i>
                </button>
                <button class="next">
                    <i class="fa-solid fa-arrow-right"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Games Introduction -->
    <section class="py-5">
        <h1 class="text-center mb-4">Games Available</h1>
        <p class=" text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quas molestiae sunt
            unde voluptas, dolore, provident, minus ex hic tenetur impedit voluptates laudantium dolorum corporis sit
            nobis vitae natus cupiditate?
            Nisi, quasi delectus aut inventore praesentium error dolores exercitationem corrupti quidem, earum illum
            suscipit ratione, itaque veniam alias pariatur sed excepturi quod illo architecto voluptas. Minima illum
            similique eius voluptas!
            Vitae exercitationem a repellendus, labore maiores autem voluptate cumque numquam magnam laudantium ut.
            Voluptatem minus sint non velit ducimus ipsam dolores laudantium facere, doloremque sequi atque dicta magnam
            sed assumenda?
            Voluptatem maxime fugit officia doloremque? Ad et itaque error voluptatum illo quas odio dolore rem
            laboriosam, nobis est quae corporis? Consequuntur provident assumenda esse? Placeat sunt sit illo beatae
            nisi.
            Veritatis doloremque dolores vitae corporis earum omnis saepe fugiat eaque, incidunt voluptatibus, eveniet a
            esse nam iure illum consequatur aliquid repellat ipsam, magnam adipisci voluptas. Necessitatibus esse qui
            culpa doloremque?</p>



        <!-- Browse All Posts Link -->
        <div class="row justify-content-center mt-4">
            <a href="{{ route('games.all') }}" class="btn btn-primary">Browse All Games</a>
        </div>
        


        <br>
        <div class="container">
            <div class="row">
                <!-- Use Bootstrap card component for each game preview -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/general/H2.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Number Matching Game</h5>
                            <p class="card-text">Test your skills in this interactive language learning game! Match the images with their corresponding number words in various languages.</p>
                            <a href="{{ route('play.numbers') }}" class="btn btn-primary">Play Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/general/H6.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Word Scramble Game</h5>
                          <p class="card-text">Challenge yourself with this exciting word scramble game! Unscramble Japanese verbs and match them with their English counterparts.</p>
                            <a href="games/all_language_game.blade.php" class="btn btn-primary">Play Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="{{ asset('img/general/H1.png') }}" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Kanji Quiz</h5>
                          <p class="card-text">Test your knowledge of Kanji characters with this interactive quiz! Match the Kanji with their meanings in Japanese.</p>
                            <a href="{{ asset('all_language_game.blade.php') }}" class="btn btn-primary">Play Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Blog Section Introduction -->
    <section class="blog py-5 bg-light">
        <h1 class="text-center mb-4">Advice and Tips Available on ADHD</h1>
        <p class=" text-center p-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facere quas molestiae sunt
            unde voluptas, dolore, provident, minus ex hic tenetur impedit voluptates laudantium dolorum corporis sit
            nobis vitae natus cupiditate?
            Nisi, quasi delectus aut inventore praesentium error dolores exercitationem corrupti quidem, earum illum
            suscipit ratione, itaque veniam alias pariatur sed excepturi quod illo architecto voluptas. Minima illum
            similique eius voluptas!
            Vitae exercitationem a repellendus, labore maiores autem voluptate cumque numquam magnam laudantium ut.
            Voluptatem minus sint non velit ducimus ipsam dolores laudantium facere, doloremque sequi atque dicta magnam
            sed assumenda?
            Voluptatem maxime fugit officia doloremque? Ad et itaque error voluptatum illo quas odio dolore rem
            laboriosam, nobis est quae corporis? Consequuntur provident assumenda esse? Placeat sunt sit illo beatae
            nisi.
            Veritatis doloremque dolores vitae corporis earum omnis saepe fugiat eaque, incidunt voluptatibus, eveniet a
            esse nam iure illum consequatur aliquid repellat ipsam, magnam adipisci voluptas. Necessitatibus esse qui
            culpa doloremque?</p>

        <!-- Browse All Posts Link -->
        <div class="row justify-content-center mt-4">
            <a href="{{ route('blog.all') }}" class="btn btn-primary">Browse All Posts</a>
            <a href="{{ route('blog.create_form') }}" class="btn btn-primary ">Create Blog Post</a>
        </div>
        
        
        <br>
        <div class="container">
            <div class="row">
                
                <!-- Use Bootstrap card component for each blog post -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../public/img/1.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post Title</h5>
                            <p class="card-text">A short excerpt from the blog post.</p>
                            <a href="blog/blog_post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../public/img/1.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post Title</h5>
                            <p class="card-text">A short excerpt from the blog post.</p>
                            <a href="blog/blog_post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card">
                        <img src="../../public/img/1.PNG" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">Blog Post Title</h5>
                            <p class="card-text">A short excerpt from the blog post.</p>
                            <a href="blog/blog_post.html" class="btn btn-primary">Read More</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        
    </section>

    <!-- Featured Game of the Week -->
    <section id="featured-game" class="py-5">
        <div class="container">
            <div class="card mb-3">
                <div class="row no-gutters">
                    <div class="col-md-4">
                        <img src="{{ asset('img/1.PNG') }}" class="card-img" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title">Featured Game of the Week</h5>
                            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to
                                additional content.</p>
                            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Success Stories/Testimonials -->
    <section id="success-stories" class="py-5">
        <div class="container">
            <h2 class="text-center mb-4">Success Stories</h2>
            <div id="testimonialsCarousel" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="testimonial">
                            <img src="{{ asset('img/2.jpg') }}" class="rounded-circle mx-auto d-block" alt="User 1"
                                style="width: 100px; height: 100px;">
                            <p class="text-center mt-4">"This platform has transformed my language learning journey. The
                                games make learning so much fun and effective!"</p>
                            <em class="text-center d-block">- Person 1, Country</em>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <div class="testimonial">
                            <img src="{{ asset('img/3.jpg') }}" class="rounded-circle mx-auto d-block" alt="User 2"
                                style="width: 100px; height: 100px;">
                            <p class="text-center mt-4">"I've tried many language learning apps, but this one stands out
                                because of its ADHD-friendly design. Highly recommend!"</p>
                            <em class="text-center d-block">- Person 2, Country</em>
                        </div>
                    </div>
                    <!-- Add more carousel items here -->
                </div>
                <a class="carousel-control-prev" href="#testimonialsCarousel" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#testimonialsCarousel" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </section>


    <!-- Interactive Language Map -->
    <section id="language-map" class="py-5 bg-light">
        <div class="container">
            <!-- Content for Interactive Language Map -->
        </div>
    </section>

    <!-- Community Forum CTA -->
    <section id="community-forum" class="py-5">
        <div class="container">
            <div class="text-center">
                <h2>Join Our Community Forum</h2>
                <p>Connect with fellow language learners, share tips, and get support.</p>
                <a href="#" class="btn btn-primary">Visit the Forum</a>
            </div>
        </div>
    </section>

    <!-- Accessibility Features Toolbar -->
    <div id="accessibility-toolbar" class="fixed-top">
        <!-- Toolbar with accessibility options -->
    </div>

    @include('layouts.footer')

   <script src="{{ asset('js/caroussel.js') }}"></script>

    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>