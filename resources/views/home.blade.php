@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="hero text-white text-center py-5" style="background-color:rgb(0, 121, 30)">
        <div class="container">
            <h1 class="display-4 mb-3">Welcome to Climate Change Awareness</h1>
            <p class="lead mb-4">Join us in the fight against climate change. Together, we can make a difference!</p>
            <a href="#learn-more" class="btn btn-primary btn-lg">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="learn-more" class="about py-5">
        <div class="container text-center">
            <h2 class="mb-4 text-success">What You Can Do</h2>
            <p class="lead mb-5">
                Climate change affects everyone. But the good news is, we all have a role to play in reducing its impact. Learn how small changes can lead to big results.
            </p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <img src="https://www.envacgroup.com/wp-content/uploads/2024/10/adobestock_308429705-1500x1000.jpeg" class="card-img-top" alt="Renewable Energy">
                        <div class="card-body">
                            <h5 class="card-title">Renewable Energy</h5>
                            <p class="card-text">Transition to clean energy sources like solar and wind to reduce our carbon footprint.</p>
                            <a href="{{ route('solution') }}" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <img src="https://www.nirvanaorganic.in/cdn/shop/articles/4x6_-15_979c618f-b642-40e6-af01-0cd2e2854876.png?v=1725435478&width=1500" class="card-img-top" alt="Sustainable Practices">
                        <div class="card-body">
                            <h5 class="card-title">Sustainable Practices</h5>
                            <p class="card-text">Adopt sustainable farming, recycling, and waste management to protect the planet.</p>
                            <a href="{{ route('solution') }}" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm border-light">
                        <img src="https://iso.500px.com/wp-content/uploads/2020/09/Playful-Leopard-Cub-By-Will-Burrard-Lucas-1500x1000.jpeg" class="card-img-top" alt="Conservation">
                        <div class="card-body">
                            <h5 class="card-title">Conservation Efforts</h5>
                            <p class="card-text">Support reforestation and wildlife conservation efforts to protect biodiversity.</p>
                            <a href="{{ route('solution') }}" class="btn btn-outline-primary">Learn More</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Call to Action Section -->
    <section class="cta text-white text-center py-5" style="background-color:rgb(0, 80, 155)">
        <div class="container">
            <h2 class="display-4 mb-3">Take Action Today</h2>
            <p class="lead mb-4">Your contribution can make a real difference in combating climate change. Join our cause now.</p>
            <a href="{{ route('donate') }}" class="btn btn-success btn-lg">Donate Now</a>
        </div>
    </section>

    <!-- Footer Section -->
    <footer class="bg-light text-center">
        <p>&copy; 2024 Climate Change Awareness. All Rights Reserved.</p>
    </footer>

@endsection
