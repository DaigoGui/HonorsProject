<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>create blog Post</title>
    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CDN for star icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <!-- Your custom CSS -->

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
                <div class="col-md-8 offset-md-2"> <!-- Added offset-md-2 for centering -->
                    <div class="text-center"> <!-- Added text-center class -->
                        <!-- Blog Post Form -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <h2 class="card-title">Create a Blog Post</h2>
                                <form id="blogPostForm" enctype="multipart/form-data">
                                    <div class="form-group">
                                        <label for="postTitle">Title</label>
                                        <input type="text" class="form-control" id="postTitle" placeholder="Enter title" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="authorName">Author Name</label>
                                        <input type="text" class="form-control" id="authorName" placeholder="Enter author name" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="postDate">Date</label>
                                        <input type="date" class="form-control" id="postDate" required>
                                    </div>
                                    <div class="form-group">
                                        <label for="postContent">Content</label>
                                        <textarea class="form-control" id="postContent" rows="6" placeholder="Enter content" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label for="postImage">Upload Image</label>
                                        <input type="file" class="form-control-file" id="postImage">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar (Optional) -->
                <div class="col-md-4 d-none d-md-block">
                    <!-- Add your sidebar content here -->
                </div>
            </div>
        </div>
        

        @include('layouts.footer')
    

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>