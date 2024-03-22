
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <!-- Bootstrap CDN -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
        <link rel="stylesheet" href="../../public/css/style.css">
    <title>materials</title>
    
    <style>
        body {
            background-color: #38335c; /* dark blue/purple color */
    color: #ffffff
  }

.custom-card {
    position: relative;
    width: 300px; /* Adjust based on your requirement */
    overflow: hidden;
}

.card-img-container {
    position: relative;
}

.card-img-top {
    width: 100%;
    height: auto;
    display: block;
}

.overlay {
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba(0, 0, 0, 0.5); /* Dark overlay for better readability */
    color: #ffffff;
    visibility: hidden;
    opacity: 0;
    transition: opacity 0.5s ease, visibility 0s linear 0.5s;
    display: flex;
    flex-direction: column;
    justify-content: center; /* Vertically center */
    align-items: center; /* Horizontally center */
    text-align: center; /* Ensure text within the overlay is centered */
}

.card-img-container:hover .overlay {
    visibility: visible;
    opacity: 1;
    transition-delay: 0s;
}

.card-body {
    visibility: hidden;
    opacity: 0;
    transition: visibility 0s linear 0.5s, opacity 0.5s ease;
}

.card-img-container:hover + .card-body {
    visibility: visible;
    opacity: 1;
    transition-delay: 0.5s;
}

.card-text {
    color: #000; /* Text color */
}

@media (min-width: 768px) {
    .container {
        max-width: 80%; /* Adjusts the maximum width of the container on medium screens and up */
    }
}

/* Responsive vertical spacing */
.my-5 {
    margin-top: 3rem !important; /* Adjusts top margin */
    margin-bottom: 3rem !important; /* Adjusts bottom margin */
}
    </style>
</head>
<body>
    @include('layouts.navbar')

    <div class="container text-center my-5">
        <div class="row">
            <div class="col-12">
                <h2 class="mt-4">Learning Materials</h2>
                <p>Welcome to our comprehensive collection of PDF learning materials designed to enhance your language learning journey. Here, you'll find a variety of resources tailored to suit your needs, whether you're a beginner looking to grasp the basics or an advanced learner aiming to refine your skills. Each PDF is carefully curated to offer valuable exercises, insightful videos, and essential grammar links to support your studies. Dive in and discover the perfect materials to elevate your language proficiency today!</p>
            </div>
        </div>
    </div>
    

            
                <div class="container my-5">
                    <div class="row">
                        @foreach($pdfMaterials as $material)
                            <div class="col-md-3 mb-4"> <!-- Ensure that each card takes up 3 columns -->
                                <div class="card custom-card">
                                    <div class="card-img-container">
                                        <img src="{{ asset($material->file_path) }}" class="card-img-top" alt="PDF Cover">
                                        <div class="overlay">
                                            <h5 class="card-title">{{ $material->title }}</h5>
                                            <a href="{{ asset($material->file_path) }}" class="btn btn-primary" download>Download</a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <p class="card-text">{{ $material->description }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                
            


                <div class="container text-center my-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mt-4">Videos</h2>
                            <p>Welcome to our comprehensive collection of PDF learning materials designed to enhance your language learning journey. Here, you'll find a variety of resources tailored to suit your needs, whether you're a beginner looking to grasp the basics or an advanced learner aiming to refine your skills. Each PDF is carefully curated to offer valuable exercises, insightful videos, and essential grammar links to support your studies. Dive in and discover the perfect materials to elevate your language proficiency today!</p>
                        </div>
                    </div>
                </div>

                <div class="container text-center my-5">
                    <div class="row">
                        <div class="col-12">
                            <h2 class="mt-4">Grammar Links</h2>
                            <p>Welcome to our comprehensive collection of PDF learning materials designed to enhance your language learning journey. Here, you'll find a variety of resources tailored to suit your needs, whether you're a beginner looking to grasp the basics or an advanced learner aiming to refine your skills. Each PDF is carefully curated to offer valuable exercises, insightful videos, and essential grammar links to support your studies. Dive in and discover the perfect materials to elevate your language proficiency today!</p>
                        </div>
                    </div>
                </div>
    </div>
  
    

 
    
    @include('layouts.footer')
        <!-- Bootstrap and jQuery scripts -->
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>