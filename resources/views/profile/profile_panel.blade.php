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

</style>

<style>
    .badge img {
    /* Adjust width and height as needed to make the badges smaller */
    width: 100px; /* Example size */
    height: 100px; /* Example size to maintain aspect ratio for a circle */
    
    /* Make images circular */
    border-radius: 70%;
    
    /* Optional: Center the image in the div */
    display: block;
    margin: 0 auto;
}

.badge p {
    text-align: center; /* Center the text below the badge */
}

</style>
<style>
    /* CSS for achievement badges */
    .badge {
        display: inline-block;
        padding: 5px 10px;
        margin-right: 10px;
        background-color: rgba(255, 255, 255, 0.5);
        /* Use consistent color for all badges */
        color: #fff;
        border-radius: 5px;
    }
</style>



<body>
    @include('layouts.navbar')

    {{-- @if(auth()->check())
    <p>User is logged in.</p>
@else
    <p>User is not logged in. Please <a href="{{ route('login') }}">login</a>.</p>
@endif --}}




    
    <!-- Profile Header -->
  <header class="py-5 text-center bg">
        <div class="container">
            <div class="card">
                <header class="py-5 text-center bg">
                    <div class="container">
                        <h1>Profile Panel</h1>
                        <!-- Profile Picture -->
                        <img src="{{ asset(Auth::user()->img_url) }}" class="rounded-circle" alt="{{ Auth::user()->name }}" style="width: 250px; height: 250px;">




                        <!-- Username -->
                        @auth
                    <div class="profile-panel mt-5">

                        <div>Name: {{ Auth::user()->name }}</div>
                        <div>Email: {{ Auth::user()->email }}</div>
                        <div>Role: {{ Auth::user()->role }}</div>
                        <div>Email Verified: {{ Auth::user()->email_verified_at ? 'Yes' : 'No' }}</div>
                    </div>
                    @endauth
                    
                        <div class="mt-2">
                            <!-- Number of games played since joining -->
                            <p>Games Played: 100</p>
                            <!-- Number of games created by the user -->
                            <p>Games Created: 10</p>
                            <!-- Favorite game -->
                            <p>Favorite Game: Game Name</p>
                        </div>
                        <div class="mb-4">
                            <h2>Bio</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nulla commodo orci nec eros dignissim, ac gravida orci aliquet. Integer at ipsum urna. Aliquam vitae placerat enim.</p>
                        </div>


                    </div>
                </header>
            </div>
        </div>
    </header> 



    <!-- Profile Content -->
<section id="profile-content" class="py-5">
    <div class="container">
        <!-- User Achievement Badges -->
        <div class="mb-4">
            <h2 class="text-center">User Achievement Badges</h2>
            <div class="row justify-content-center">
                <!-- Most Games Created Badge -->
                <div class="col-md-2 mb-4">
                    <div class="badge">
                        <img src="{{ asset('img/badges/diamond.png') }}" alt="Badge">
                        <p>Most Games Created</p>
                    </div>
                </div>
                <!-- Most Games Played Badge -->
                <div class="col-md-2 mb-4">
                    <div class="badge" >
                        <img src="{{ asset('img/badges/gold.png') }}" alt="Badge">
                        <p>Most Games Played</p>
                    </div>
                </div>
                <!-- Highest Score Badge -->
                <div class="col-md-2 mb-4">
                    <div class="badge" >
                        <img src="{{ asset('img/badges/silver.png') }}" alt="Badge">
                        <p>Highest Score</p>
                    </div>
                </div>
                <!-- Most Consistent Presence Badge -->
                <div class="col-md-2 mb-4">
                    <div class="badge" >
                        <img src="{{ asset('img/badges/bronze.png') }}" alt="Badge">
                        <p>Consistent Presence</p>
                    </div>
                </div>
                <!-- Most Activity in Blog Badge -->
                {{-- <div class="col-md-2 mb-4">
                    <div class="hexagon-badge" style="background-color: #ff9879;">
                        <i class="fas fa-pencil-alt"></i>
                        <p>Most Activity in Blog</p>
                    </div>
                </div>
                <!-- Most Activity in Community Badge -->
                <div class="col-md-2 mb-4">
                    <div class="hexagon-badge" style="background-color: #cf688a;">
                        <i class="fas fa-users"></i>
                        <p>Most Activity in Community</p>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
</section>
    

    <!-- Profile Content -->
    <section id="profile-content" class="py-5">
        <div class="container">
            <!-- User Statistics Chart -->
            <div class="mb-4">
                <h2>User Statistics</h2>
                <canvas id="userStatisticsChart" width="400" height="200"></canvas>
            </div>
        </div>
    </section>

    <!-- Profile Content -->
    {{-- <section id="profile-content" class="py-5">
        <div class="container">
            <!-- User's Posts -->
            <div class="mb-4">
                <h2>User's Posts</h2>
                <div class="row">
                    <!-- Card 7 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="../../../public/img/2.jpg" class="card-img-top" alt="ADHD and Language Learning">
                            <div class="card-body">
                                <h5 class="card-title">ADHD-friendly Language Learning Techniques</h5>
                                <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                                <!-- Update and Delete buttons -->
                                <div class="btn-group" role="group" aria-label="Post actions">
                                    <a href="#" class="btn btn-info">Update</a>
                                    <a href="#" class="btn btn-danger">Delete</a>
                                    <a href="#" class="btn btn-primary">View</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="../../../public/img/3.jpg" class="card-img-top" alt="ADHD and Language Learning">
                            <div class="card-body">
                                <h5 class="card-title">Building Language Skills in ADHD Students</h5>
                                <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum
                                    dolore eu fugiat nulla pariatur.</p>
                                    <div class="btn-group" role="group" aria-label="Post actions">
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                        <a href="#" class="btn btn-primary">View</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="../../../public/img/2.jpg" class="card-img-top" alt="ADHD and Language Learning">
                            <div class="card-body">
                                <h5 class="card-title">ADHD-friendly Language Learning Techniques</h5>
                                <p class="card-text">Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris
                                    nisi ut
                                    aliquip ex ea commodo consequat.</p>
                                    <div class="btn-group" role="group" aria-label="Post actions">
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                        <a href="#" class="btn btn-primary">View</a>
                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Card 8 -->
                    <div class="col-md-3 mb-4">
                        <div class="card">
                            <img src="../../../public/img/3.jpg" class="card-img-top" alt="ADHD and Language Learning">
                            <div class="card-body">
                                <h5 class="card-title">Building Language Skills in ADHD Students</h5>
                                <p class="card-text">Duis aute irure dolor in reprehenderit in voluptate velit esse
                                    cillum
                                    dolore eu fugiat nulla pariatur.</p>
                                    <div class="btn-group" role="group" aria-label="Post actions">
                                        <a href="#" class="btn btn-info">Update</a>
                                        <a href="#" class="btn btn-danger">Delete</a>
                                        <a href="#" class="btn btn-primary">View</a>
                                    </div>
                                
                            </div>
                        </div>
                    </div>
                    <!-- Repeat the card structure for each post -->
                </div>
            </div> <!-- Repeat the card structure for each post -->
        </div> --}}

        {{-- <section id="profile-content" class="py-5">
            <div class="container">
                <!-- User's Posts -->
                <div class="mb-4">
                    <h2>User's Posts</h2>
                    <div class="row">
                        @foreach($blogPosts as $post)
                            <div class="col-md-3 mb-4">
                                <div class="card">
                                    < <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text">{{ Str::limit($post->post, 100) }}</p>
                                        <!-- Update and Delete buttons -->
                                        <div class="btn-group" role="group" aria-label="Post actions">
                                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Update</a>
                                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-danger">Delete</button>
                                            </form>
                                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                        <!-- Repeat the card structure for each post -->
                    </div>
                </div>
            </div>
        </section> --}}
        
        {{-- </div>
    </section> --}}

    <div class="mb-4">
        <h2>User's Posts</h2>
        <div class="row">
            @foreach($blogPosts as $post)
            <div class="col-md-3 mb-4">
                <div class="card">
                    <img src="{{ $post->image_url }}" class="card-img-top" alt="{{ $post->title }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $post->title }}</h5>
                        <p class="card-text">{{ Str::limit($post->post, 100) }}</p>
                        <!-- Update and Delete buttons -->
                        <div class="btn-group" role="group" aria-label="Post actions">
                            <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info">Update</a>
                            <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                            <a href="{{ route('posts.show', $post->id) }}" class="btn btn-primary">View</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
            <!-- Repeat the card structure for each post -->
        </div>
    </div>



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


    <!-- Bootstrap and jQuery scripts -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.7.0/chart.min.js"></script>
    <script>
        // Sample data for user statistics
        const userStatisticsData = {
            labels: ['Games Played', 'Games Created', 'Favorite Game'],
            datasets: [{
                label: 'User Statistics',
                data: [100, 10, 1], // Replace with actual user data
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)'
                ],
                borderWidth: 1
            }]
        };

        // Create and render the chart
        var userStatisticsChart = new Chart(document.getElementById('userStatisticsChart'), {
            type: 'bar',
            data: userStatisticsData,
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>

   
</body>

</html>