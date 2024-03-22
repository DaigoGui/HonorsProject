<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Blog Post</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CDN for star icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your custom CSS -->
    <style>
        .rating {
            unicode-bidi: bidi-override;
            direction: rtl;
            text-align: center;
        }

        .rating>span {
            display: inline-block;
            position: relative;
            width: 1.1em;
        }

        .rating>span:hover:before,
        .rating>span:hover~span:before {
            content: "\2605";
            position: absolute;
            color: gold;
        }
    </style>
</head>

<body>
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="#">Language Learning</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#carousel-container">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#games-introduction">Games</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#blog-section">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#featured-game">Featured</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#success-stories">Testimonials</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#community-forum">Community</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Register</a>
                    </li>
                    <!-- Add additional nav items here -->
                </ul>
            </div>
        </nav>

    <div class="container mt-5">
        <div class="row">
            <div class="col-md-8">
                <!-- Blog Post -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h2 class="card-title">Title of the Blog Post</h2>
                        <img src="../../../public/img/2.jpg" class="card-img-top" alt="Image">
                        <p class="card-text">Written by: Author Name</p>
                        <p class="card-text">Date: January 1, 2024</p>
                        <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed commodo
                            hendrerit enim nec laoreet. Nulla facilisi. Pellentesque vel lorem at nisi condimentum
                            laoreet.</p>
                        <div class="rating">
                            <span><i class="far fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                            <span><i class="far fa-star"></i></span>
                        </div>
                    </div>
                </div>
                <!-- Comment Section -->

                <!-- Comment Section -->
                <div class="card mb-4">
                    <div class="card-body">
                        <h5 class="card-title">Leave a Comment</h5>
                        <form>
                            <div class="form-group">
                                <label for="commentName">Name</label>
                                <input type="text" class="form-control" id="commentName" placeholder="Your Name">
                            </div>
                            <div class="form-group">
                                <label for="commentEmail">Email</label>
                                <input type="email" class="form-control" id="commentEmail" placeholder="Your Email">
                            </div>
                            <div class="form-group">
                                <label for="commentText">Comment</label>
                                <textarea class="form-control" id="commentText" rows="3"
                                    placeholder="Write your comment here"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="commentRating">Rating</label>
                                <div class="rating">
                                    <span><i class="far fa-star" data-rating="1"></i></span>
                                    <span><i class="far fa-star" data-rating="2"></i></span>
                                    <span><i class="far fa-star" data-rating="3"></i></span>
                                    <span><i class="far fa-star" data-rating="4"></i></span>
                                    <span><i class="far fa-star" data-rating="5"></i></span>
                                </div>
                            </div>
                            <!-- Add your existing form fields here -->
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- Sidebar (Optional) -->
            <div class="col-md-4 d-none d-md-block">
                <img src="../../../public/img/3.jpg" class="card-img-top" alt="Image">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">About the Author</h5>
                        <p class="card-text">Author Name is a passionate writer with expertise in various topics.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('layouts.footer')

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function () {
            // Rating
            $('.rating i').click(function () {
                var rating = $(this).data('rating');
                $('.rating i').removeClass('fas').addClass('far');
                $('.rating i').each(function () {
                    if ($(this).data('rating') <= rating) {
                        $(this).removeClass('far').addClass('fas');
                    }
                });
            });
        });
    </script>
</body>

</html>
